<?php

declare(strict_types=1);

session_start();
header('Cache-Control: no-store');

if (
    empty($_SESSION['contact_csrf'])
    || !is_string($_SESSION['contact_csrf'])
) {
    $_SESSION['contact_csrf'] = bin2hex(random_bytes(32));
}

$contactStatus = $_SESSION['contact_status'] ?? null;
unset($_SESSION['contact_status']);

$basePath = '../';
$currentPage = 'contact';
$pageTitle = 'Nous joindre';
$pageDescription = 'Coordonnées d’ARCAD Santé PLUS à Bamako '
    . 'et formulaire de contact institutionnel.';

require __DIR__ . '/../templates/page_start.php';

?>
<main id="main">
    <section class="page-hero">
        <div class="container page-hero__inner">
            <p class="eyebrow">Contact</p>
            <h1>Nous joindre</h1>
            <p class="lead">
                Écrivez à ARCAD Santé PLUS pour une question
                institutionnelle, un partenariat ou une information
                générale. Vous pouvez aussi contacter directement
                l’équipe à Bamako.
            </p>
        </div>
    </section>

    <section class="section-space">
        <div class="container contact-layout">
            <div>
                <h2>Nos coordonnées</h2>
                <p class="muted">
                    Direction générale, Bamako, Mali.
                </p>
                <dl class="contact-details">
                    <dt>Adresse</dt>
                    <dd>
                        N’Tomikorobougou, face à l’INFSS,<br>
                        Immeuble Tapa N’Diaye, Bamako, Mali.
                    </dd>

                    <dt>Téléphone</dt>
                    <dd>
                        <a href="tel:+22344907303">
                            (+223) 44 90 73 03
                        </a><br>
                        <a href="tel:+22344907304">
                            (+223) 44 90 73 04
                        </a>
                    </dd>

                    <dt>E-mail</dt>
                    <dd>
                        <a href="mailto:arcadsanteplus@arcadsanteplus.org">
                            arcadsanteplus@arcadsanteplus.org
                        </a>
                    </dd>
                </dl>
            </div>

            <div class="form-panel" id="contact-form">
                <p class="eyebrow">Formulaire</p>
                <h2>Envoyer un message</h2>
                <p>
                    Tous les champs visibles sont obligatoires.
                    Le message est enregistré pour traitement par
                    l’équipe. Il n’est pas envoyé par e-mail à ce stade.
                </p>

                <?php if (is_array($contactStatus)): ?>
                    <div class="form-status<?=
                        ($contactStatus['type'] ?? '') === 'success'
                            ? ''
                            : ' form-status--error'
                    ?>" role="status">
                        <?= e((string) ($contactStatus['message'] ?? '')) ?>
                    </div>
                <?php endif; ?>

                <form action="../contact_submit.php" method="post">
                    <input type="hidden" name="csrf_token"
                           value="<?= e($_SESSION['contact_csrf']) ?>">

                    <div class="contact-honeypot" aria-hidden="true">
                        <label for="website">Votre site internet</label>
                        <input id="website" type="text" name="website"
                               tabindex="-1" autocomplete="off">
                    </div>

                    <div class="form-grid">
                        <div class="field">
                            <label for="contact-name">Nom complet *</label>
                            <input id="contact-name" name="name"
                                   type="text" required minlength="2"
                                   maxlength="120" autocomplete="name">
                        </div>

                        <div class="field">
                            <label for="contact-email">
                                Adresse e-mail *
                            </label>
                            <input id="contact-email" name="email"
                                   type="email" required maxlength="180"
                                   autocomplete="email">
                        </div>

                        <div class="field field--wide">
                            <label for="contact-subject">Sujet *</label>
                            <input id="contact-subject" name="subject"
                                   type="text" required minlength="3"
                                   maxlength="160">
                        </div>

                        <div class="field field--wide">
                            <label for="contact-message">Message *</label>
                            <textarea id="contact-message" name="message"
                                      required minlength="10"
                                      maxlength="2000" rows="7"></textarea>
                        </div>
                    </div>

                    <div class="form-help">
                        <strong>Protégez vos informations.</strong>
                        <p>
                            N’envoyez pas de dossier médical, résultat
                            d’analyse, pièce d’identité, mot de passe
                            ni autre donnée sensible par ce formulaire.
                            <a href="politique_confidentialite.php">
                                Lire la politique de confidentialité
                            </a>.
                        </p>
                    </div>

                    <button class="button" type="submit">
                        Envoyer le message
                    </button>
                </form>
            </div>
        </div>
    </section>
</main>
<?php require __DIR__ . '/../templates/page_end.php'; ?>
