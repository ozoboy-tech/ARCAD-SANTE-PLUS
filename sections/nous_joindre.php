<?php

declare(strict_types=1);

session_start();

$current_page = 'contact';
$basePath = '../';


/*
 * Création du jeton CSRF du formulaire.
 */
if (
    empty($_SESSION['contact_csrf'])
    || !is_string($_SESSION['contact_csrf'])
) {
    $_SESSION['contact_csrf'] = bin2hex(random_bytes(32));
}


/*
 * Message retourné après soumission.
 */
$contactStatus = $_SESSION['contact_status'] ?? null;

unset($_SESSION['contact_status']);

?>

<!doctype html>

<html lang="fr">

<head>

    <meta charset="utf-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1"
    >

    <title>
        Nous joindre | ARCAD Santé PLUS
    </title>

    <meta
        name="description"
        content="Contactez ARCAD Santé PLUS à Bamako pour toute demande institutionnelle, partenariat, recrutement ou information générale."
    >

    <link
        rel="stylesheet"
        href="../style.css"
    >

</head>


<body>


<?php

require __DIR__ . '/../templates/header.php';

?>


<main
    id="main"
    class="contact-page"
>


    <!-- =====================================================
         HERO
    ====================================================== -->

    <section class="contact-hero">

        <div class="container contact-hero__inner">


            <div class="contact-hero__content">

                <span class="contact-eyebrow">
                    Nous joindre
                </span>


                <h1>
                    Parlons de votre
                    <span>demande.</span>
                </h1>


                <p>

                    Une question, une proposition de partenariat,
                    une demande institutionnelle ou simplement
                    besoin d'une information ?

                    Notre équipe est à votre écoute.

                </p>

            </div>


        </div>

    </section>



    <!-- =====================================================
         CONTACT
    ====================================================== -->

    <section class="contact-main-section">

        <div class="container contact-layout">


            <!-- =============================================
                 INFORMATIONS
            ============================================== -->

            <aside class="contact-information">


                <span class="contact-section-kicker">
                    ARCAD Santé PLUS
                </span>


                <h2>
                    Nos coordonnées
                </h2>


                <p class="contact-information__intro">

                    Vous pouvez également nous contacter directement
                    ou vous rendre à notre direction à Bamako.

                </p>



                <!-- Adresse -->

                <div class="contact-info-card">

                    <div
                        class="contact-info-icon"
                        aria-hidden="true"
                    >
                        01
                    </div>

                    <div>

                        <strong>
                            Adresse
                        </strong>

                        <p>

                            N’Tomikorobougou,<br>
                            face à l’INFSS,<br>
                            Immeuble Tapa N’Diaye,<br>
                            Bamako, Mali

                        </p>

                    </div>

                </div>



                <!-- Téléphone -->

                <div class="contact-info-card">

                    <div
                        class="contact-info-icon"
                        aria-hidden="true"
                    >
                        02
                    </div>

                    <div>

                        <strong>
                            Téléphone
                        </strong>

                        <p>

                            <a href="tel:+22344907303">
                                (+223) 44 90 73 03
                            </a>

                            <br>

                            <a href="tel:+22344907304">
                                (+223) 44 90 73 04
                            </a>

                        </p>

                    </div>

                </div>



                <!-- E-mail -->

                <div class="contact-info-card">

                    <div
                        class="contact-info-icon"
                        aria-hidden="true"
                    >
                        03
                    </div>

                    <div>

                        <strong>
                            E-mail
                        </strong>

                        <p>

                            <a href="mailto:arcadsanteplus@arcadsanteplus.org">

                                arcadsanteplus@arcadsanteplus.org

                            </a>

                        </p>

                    </div>

                </div>



                <!-- Horaires -->

                <div class="contact-info-card">

                    <div
                        class="contact-info-icon"
                        aria-hidden="true"
                    >
                        04
                    </div>

                    <div>

                        <strong>
                            Horaires
                        </strong>

                        <p>
                            Lundi au vendredi<br>
                            9h00 – 17h00
                        </p>

                    </div>

                </div>


            </aside>



            <!-- =============================================
                 FORMULAIRE
            ============================================== -->

            <div
                class="contact-form-panel"
                id="contact-form"
            >


                <div class="contact-form-heading">

                    <span class="contact-section-kicker">
                        Formulaire
                    </span>

                    <h2>
                        Envoyer un message
                    </h2>

                    <p>

                        Remplissez les informations ci-dessous.
                        Les champs marqués d'un astérisque sont
                        obligatoires.

                    </p>

                </div>



                <?php if (is_array($contactStatus)): ?>

                    <div
                        class="contact-alert
                        <?= ($contactStatus['type'] ?? '') === 'success'
                            ? 'contact-alert--success'
                            : 'contact-alert--error'
                        ?>"
                        role="status"
                    >

                        <?= htmlspecialchars(
                            (string) ($contactStatus['message'] ?? ''),
                            ENT_QUOTES,
                            'UTF-8'
                        ) ?>

                    </div>

                <?php endif; ?>



                <form
                    action="../contact_submit.php"
                    method="post"
                    class="secure-contact-form"
                >


                    <!-- CSRF -->

                    <input
                        type="hidden"
                        name="csrf_token"
                        value="<?= htmlspecialchars(
                            $_SESSION['contact_csrf'],
                            ENT_QUOTES,
                            'UTF-8'
                        ) ?>"
                    >



                    <!-- Honeypot anti-bot -->

                    <div
                        class="contact-honeypot"
                        aria-hidden="true"
                    >

                        <label for="website">
                            Votre site internet
                        </label>

                        <input
                            type="text"
                            id="website"
                            name="website"
                            tabindex="-1"
                            autocomplete="off"
                        >

                    </div>



                    <!-- Nom -->

                    <div class="contact-field">

                        <label for="contact-name">

                            Nom complet
                            <span aria-hidden="true">*</span>

                        </label>

                        <input
                            id="contact-name"
                            name="name"
                            type="text"
                            required
                            minlength="2"
                            maxlength="120"
                            autocomplete="name"
                        >

                    </div>



                    <!-- Email -->

                    <div class="contact-field">

                        <label for="contact-email">

                            Adresse e-mail
                            <span aria-hidden="true">*</span>

                        </label>

                        <input
                            id="contact-email"
                            name="email"
                            type="email"
                            required
                            maxlength="180"
                            autocomplete="email"
                        >

                    </div>



                    <!-- Sujet -->

                    <div class="contact-field">

                        <label for="contact-subject">

                            Sujet
                            <span aria-hidden="true">*</span>

                        </label>

                        <input
                            id="contact-subject"
                            name="subject"
                            type="text"
                            required
                            minlength="3"
                            maxlength="160"
                        >

                    </div>



                    <!-- Message -->

                    <div class="contact-field">

                        <label for="contact-message">

                            Message
                            <span aria-hidden="true">*</span>

                        </label>

                        <textarea
                            id="contact-message"
                            name="message"
                            required
                            minlength="10"
                            maxlength="2000"
                            rows="8"
                        ></textarea>


                        <small>

                            Maximum 2 000 caractères.

                        </small>

                    </div>



                    <!-- Avertissement données sensibles -->

                    <div class="contact-privacy-note">

                        <strong>
                            Confidentialité
                        </strong>

                        <p>

                            N'envoyez pas de dossier médical,
                            résultat d'analyse, mot de passe,
                            pièce d'identité ou autre information
                            médicale sensible via ce formulaire.

                        </p>

                    </div>



                    <button
                        type="submit"
                        class="contact-submit-button"
                    >

                        Envoyer le message

                        <span aria-hidden="true">
                            →
                        </span>

                    </button>


                </form>


            </div>


        </div>

    </section>


</main>



<?php

require __DIR__ . '/../templates/footer.php';

?>


<script src="../java.js"></script>


</body>

</html>