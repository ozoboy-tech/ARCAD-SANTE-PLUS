<?php

/*
 * Footer commun ARCAD Santé PLUS
 *
 * $basePath :
 * accueil               = ''
 * /sections/            = '../'
 * /sections/Nos_actions = '../../'
 */

$basePath = $basePath ?? '';

?>

<footer
    class="site-footer modern-footer"
    id="site-footer"
>

    <div class="footer-top container">

        <div class="footer-grid">


            <!-- =========================================
                 COLONNE 1 : IDENTITÉ
            ========================================== -->

            <div class="f-col f-brand">

                <a
                    href="<?= $basePath ?>index.php"
                    class="f-logo"
                    aria-label="ARCAD Santé PLUS — Accueil"
                >
                    Arcad
                    <span>Santé</span>
                    Plus
                </a>


                <p class="f-desc">

                    Organisation engagée dans la santé communautaire,
                    la prévention, l'accès aux soins et le
                    renforcement des capacités.

                </p>


                <div class="f-quick">

                    <a
                        class="btn btn-donate"
                        href="mailto:arcadsanteplus@arcadsanteplus.org?subject=Je%20souhaite%20faire%20un%20don"
                        aria-label="Contacter ARCAD Santé PLUS pour faire un don"
                    >

                        Faire un don

                        <svg
                            class="donate-icon"
                            viewBox="0 0 24 24"
                            fill="currentColor"
                            aria-hidden="true"
                        >
                            <path
                                clip-rule="evenodd"
                                fill-rule="evenodd"
                                d="M12 2.25c-5.385 0-9.75
                                4.365-9.75 9.75s4.365 9.75
                                9.75 9.75 9.75-4.365
                                9.75-9.75S17.385 2.25
                                12 2.25zm4.28 10.28a.75.75
                                0 000-1.06l-3-3a.75.75
                                0 10-1.06 1.06l1.72
                                1.72H8.25a.75.75 0 000
                                1.5h5.69l-1.72 1.72a.75.75
                                0 101.06 1.06l3-3z"
                            >
                            </path>
                        </svg>

                    </a>


                    <a
                        class="f-cta ghost"
                        href="<?= $basePath ?>sections/nous_joindre.php"
                    >
                        Nous contacter
                    </a>

                </div>


                <!-- Accès rapides -->

                <div class="f-mini-sitemap">

                    <strong>
                        Accès rapide
                    </strong>

                    <div>

                        <a
                            href="<?= $basePath ?>index.php"
                            class="f-mini-link"
                        >
                            Accueil
                        </a>

                        <a
                            href="<?= $basePath ?>sections/Actualités.php"
                            class="f-mini-link"
                        >
                            Actualités
                        </a>

                        <a
                            href="<?= $basePath ?>index.php#nos-actions"
                            class="f-mini-link"
                        >
                            Nos actions
                        </a>

                        <a
                            href="<?= $basePath ?>sections/Recrutement.php"
                            class="f-mini-link"
                        >
                            Recrutement
                        </a>

                    </div>

                </div>

            </div>



            <!-- =========================================
                 COLONNE 2 : NOS ACTIONS
            ========================================== -->

            <div class="f-col">

                <h4>
                    Nos actions
                </h4>


                <ul class="f-links">

                    <li>
                        <a
                            href="<?= $basePath ?>sections/Nos_actions/nos_sites_et_services.php"
                        >
                            Nos sites et nos services
                        </a>
                    </li>

                    <li>
                        <a
                            href="<?= $basePath ?>sections/Nos_actions/Renforcement_de_capacités.php"
                        >
                            Renforcement de capacités
                        </a>
                    </li>

                    <li>
                        <a
                            href="<?= $basePath ?>sections/Nos_actions/Recherche_opérationnelle.php"
                        >
                            Recherche opérationnelle
                        </a>
                    </li>

                    <li>
                        <a
                            href="<?= $basePath ?>sections/Nos_actions/Plaidoyer.php"
                        >
                            Plaidoyer
                        </a>
                    </li>

                </ul>

            </div>



            <!-- =========================================
                 COLONNE 3 : RESSOURCES
            ========================================== -->

            <div class="f-col">

                <h4>
                    Ressources
                </h4>


                <ul class="f-links">

                    <li>
                        <a
                            href="<?= $basePath ?>sections/Actualités.php"
                        >
                            Actualités
                        </a>
                    </li>

                    <li>
                        <a
                            href="<?= $basePath ?>sections/Recrutement.php"
                        >
                            Recrutement
                        </a>
                    </li>

                    <li>
                        <a
                            href="<?= $basePath ?>sections/Médiathèque/Photothèque.php"
                        >
                            Photothèque
                        </a>
                    </li>

                    <li>
                        <a
                            href="<?= $basePath ?>sections/Médiathèque/Vidéothèque.php"
                        >
                            Vidéothèque
                        </a>
                    </li>

                </ul>

            </div>



            <!-- =========================================
                 COLONNE 4 : CONTACT
            ========================================== -->

            <div class="f-col f-contact">

                <h4>
                    Contact
                </h4>


                <ul class="f-links">

                    <li>
                        N’Tomikorobougou,
                        face à l’INFSS,
                        Immeuble Tapa N’Diaye
                    </li>

                    <li>
                        Lundi au vendredi :
                        9h00 – 17h00
                    </li>

                    <li>
                        <a
                            href="mailto:arcadsanteplus@arcadsanteplus.org"
                        >
                            arcadsanteplus@arcadsanteplus.org
                        </a>
                    </li>

                    <li>
                        <a
                            href="<?= $basePath ?>sections/nous_joindre.php"
                        >
                            Nous joindre
                        </a>
                    </li>

                </ul>

            </div>


        </div>

    </div>



    <!-- =============================================
         BAS DU FOOTER
    ============================================== -->

    <div class="footer-bottom container">

        <div class="copyright">

            &copy;
            <?= date('Y') ?>
            ARCAD Santé PLUS —
            Tous droits réservés

        </div>


        <div class="footer-actions">

            <button
                class="back-to-top"
                type="button"
                aria-label="Retour en haut de la page"
                title="Retour en haut"
            >
                ↑
            </button>

        </div>

    </div>

</footer>