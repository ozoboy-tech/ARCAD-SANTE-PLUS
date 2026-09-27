<?php

declare(strict_types=1);

session_start();


/*
|--------------------------------------------------------------------------
| Fonctions
|--------------------------------------------------------------------------
*/

function redirectContact(
    string $type,
    string $message
): never {

    $_SESSION['contact_status'] = [
        'type' => $type,
        'message' => $message
    ];

    header(
        'Location: sections/nous_joindre.php#contact-form'
    );

    exit;
}


function textLength(string $value): int
{
    if (function_exists('mb_strlen')) {
        return mb_strlen($value, 'UTF-8');
    }

    return strlen($value);
}



/*
|--------------------------------------------------------------------------
| Méthode HTTP
|--------------------------------------------------------------------------
*/

if (
    !isset($_SERVER['REQUEST_METHOD'])
    || $_SERVER['REQUEST_METHOD'] !== 'POST'
) {

    header(
        'Location: sections/nous_joindre.php'
    );

    exit;
}



/*
|--------------------------------------------------------------------------
| Honeypot anti-bot
|--------------------------------------------------------------------------
*/

$honeypot = trim(
    (string) ($_POST['website'] ?? '')
);


if ($honeypot !== '') {

    /*
     * On simule un succès pour ne pas indiquer
     * au robot qu'il a été détecté.
     */

    redirectContact(
        'success',
        'Merci. Votre message a bien été pris en compte.'
    );

}



/*
|--------------------------------------------------------------------------
| Protection CSRF
|--------------------------------------------------------------------------
*/

$sessionToken = $_SESSION['contact_csrf'] ?? '';

$submittedToken = $_POST['csrf_token'] ?? '';


if (
    !is_string($sessionToken)
    || !is_string($submittedToken)
    || $sessionToken === ''
    || !hash_equals(
        $sessionToken,
        $submittedToken
    )
) {

    redirectContact(
        'error',
        'La session du formulaire a expiré. Rechargez la page puis réessayez.'
    );

}



/*
|--------------------------------------------------------------------------
| Limitation simple des soumissions
|--------------------------------------------------------------------------
*/

$now = time();

$lastSubmission =
    (int) ($_SESSION['contact_last_submission'] ?? 0);


if (
    $lastSubmission > 0
    && ($now - $lastSubmission) < 60
) {

    redirectContact(
        'error',
        'Veuillez attendre environ une minute avant d’envoyer un nouveau message.'
    );

}



/*
|--------------------------------------------------------------------------
| Récupération
|--------------------------------------------------------------------------
*/

$name = trim(
    (string) ($_POST['name'] ?? '')
);


$email = trim(
    (string) ($_POST['email'] ?? '')
);


$subject = trim(
    (string) ($_POST['subject'] ?? '')
);


$message = trim(
    (string) ($_POST['message'] ?? '')
);



/*
|--------------------------------------------------------------------------
| Nettoyage
|--------------------------------------------------------------------------
*/

/*
 * Pas de retours à la ligne dans ces champs.
 */

$name = str_replace(
    ["\r", "\n"],
    ' ',
    $name
);


$email = str_replace(
    ["\r", "\n"],
    '',
    $email
);


$subject = str_replace(
    ["\r", "\n"],
    ' ',
    $subject
);



/*
|--------------------------------------------------------------------------
| Validation
|--------------------------------------------------------------------------
*/

if (
    textLength($name) < 2
    || textLength($name) > 120
) {

    redirectContact(
        'error',
        'Veuillez indiquer un nom valide.'
    );

}


if (
    textLength($email) > 180
    || !filter_var(
        $email,
        FILTER_VALIDATE_EMAIL
    )
) {

    redirectContact(
        'error',
        'Veuillez indiquer une adresse e-mail valide.'
    );

}


if (
    textLength($subject) < 3
    || textLength($subject) > 160
) {

    redirectContact(
        'error',
        'Veuillez indiquer un sujet valide.'
    );

}


if (
    textLength($message) < 10
    || textLength($message) > 2000
) {

    redirectContact(
        'error',
        'Votre message doit contenir entre 10 et 2 000 caractères.'
    );

}



/*
|--------------------------------------------------------------------------
| Création du dossier sécurisé
|--------------------------------------------------------------------------
*/

$storageDirectory =
    __DIR__ . DIRECTORY_SEPARATOR . 'storage';


if (!is_dir($storageDirectory)) {

    if (
        !mkdir(
            $storageDirectory,
            0700,
            true
        )
        && !is_dir($storageDirectory)
    ) {

        redirectContact(
            'error',
            'Le message ne peut pas être enregistré actuellement.'
        );

    }

}



/*
|--------------------------------------------------------------------------
| Enregistrement
|--------------------------------------------------------------------------
*/

$record = [

    'received_at' => gmdate('c'),

    'name' => $name,

    'email' => $email,

    'subject' => $subject,

    'message' => $message

];


$json = json_encode(

    $record,

    JSON_UNESCAPED_UNICODE
    | JSON_UNESCAPED_SLASHES

);


if ($json === false) {

    redirectContact(
        'error',
        'Une erreur est survenue pendant le traitement du message.'
    );

}


$file =
    $storageDirectory
    . DIRECTORY_SEPARATOR
    . 'contact_messages.jsonl';


$result = file_put_contents(

    $file,

    $json . PHP_EOL,

    FILE_APPEND | LOCK_EX

);


if ($result === false) {

    redirectContact(
        'error',
        'Le message ne peut pas être enregistré actuellement.'
    );

}



/*
|--------------------------------------------------------------------------
| Succès
|--------------------------------------------------------------------------
*/

$_SESSION['contact_last_submission'] = $now;


/*
 * Renouvellement du token CSRF.
 */

$_SESSION['contact_csrf'] =
    bin2hex(
        random_bytes(32)
    );


redirectContact(
    'success',
    'Merci. Votre message a bien été enregistré. Notre équipe pourra le traiter.'
);