<?php $basePath = $basePath ?? ''; ?>
<footer class="site-footer" id="site-footer">
    <div class="container footer-grid">
        <div class="footer-identity">
            <a href="<?= e($basePath) ?>index.php"
               class="footer-wordmark">ARCAD Santé PLUS</a>
            <p>Résilience · Communautés · Développement · Santé</p>
            <a class="footer-email"
               href="mailto:arcadsanteplus@arcadsanteplus.org">
                arcadsanteplus@arcadsanteplus.org
            </a>
        </div>

        <div>
            <h2>Explorer</h2>
            <ul>
                <li><a href="<?= e($basePath) ?>sections/organisation.php">
                    L’organisation</a></li>
                <li><a href="<?= e($basePath) ?>sections/Nos_actions/acceuil.php">
                    Nos actions</a></li>
                <li><a href="<?= e($basePath) ?>sections/Actualités.php">
                    Actualités</a></li>
                <li><a href="<?= e($basePath) ?>sections/Recrutement.php">
                    Recrutement</a></li>
            </ul>
        </div>

        <div>
            <h2>Ressources</h2>
            <ul>
                <li><a href="<?= e($basePath) ?>sections/Publications.php">
                    Publications</a></li>
                <li><a href="<?= e($basePath) ?>sections/Médiathèque/Photothèque.php">
                    Photothèque</a></li>
                <li><a href="<?= e($basePath) ?>sections/Médiathèque/Vidéothèque.php">
                    Vidéothèque</a></li>
                <li><a href="<?= e($basePath) ?>sections/nous_joindre.php">
                    Nous joindre</a></li>
            </ul>
        </div>

        <div class="footer-contact">
            <h2>À Bamako</h2>
            <address>
                N’Tomikorobougou, face à l’INFSS<br>
                Immeuble Tapa N’Diaye, Mali
            </address>
            <a href="tel:+22344907303">(+223) 44 90 73 03</a>
            <a href="tel:+22344907304">(+223) 44 90 73 04</a>
        </div>
    </div>

    <div class="container footer-bottom">
        <span>&copy; <?= date('Y') ?> ARCAD Santé PLUS</span>
        <div>
            <a href="<?= e($basePath) ?>sections/politique_confidentialite.php">
                Politique de confidentialité
            </a>
            <a href="<?= e($basePath) ?>sections/cgu.php">
                Conditions d’utilisation
            </a>
        </div>
    </div>
</footer>

