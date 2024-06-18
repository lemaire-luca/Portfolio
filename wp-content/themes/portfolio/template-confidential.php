<?php /* Template Name: confidential page template */ ?>
<?php get_header(); ?>
<?php if (have_posts()): while (have_posts()): the_post(); ?>
    <main role="main">
        <section class="confidential">
            <h2 role="heading" aria-level="2" class="main">Politique de confidentialité</h2>
            <p class="confidential__update">Dernières mise à jour le :
                <span><?= get_field('confidential-update'); ?></span></p>
            <p class="confidential__intro">Lemaire Luca accorde une importance capitale à la protection de vos données
                personnelles. Mon engagement se traduit par un traitement confidentiel de ces données et une utilisation
                strictement limitée au cadre initial de leur collecte. Il est à noter que vos données sont susceptibles
                d'être enregistrées dans ma bases de données et ne seront, en aucun cas, divulguées à des tiers sans
                votre consentement explicite. De plus, vous conservez en tout temps le droit de solliciter l'accès à vos
                données, leurs rectification ou leurs suppression.</p>
            <div itemscope itemprop="https://schema.org/Person" class="confidential__container">
                <article role="article" class="confidential__container__article">
                    <h3 role="heading" aria-label="3">IDENTITÉ</h3>
                    <p itemprop="name">Lemaire Luca</p>
                    <p>4020, Liège</p>
                    <p>Belgique</p>
                </article>
                <article role="article" class="confidential__container__article">
                    <h3 role="heading" aria-label="3">CONTACT</h3>
                    <p>Vous pouvez nous contacter aux coordonnées suivantes :</p>
                    <p>Téléphone : <a itemprop="telephone" class="confidential__container__article__infos"
                                      href="tel:+32 (0)470 61 50 28">+32 (0)470 61 50 28</a></p>
                    <p>Email : <a itemprop="email" class="confidential__container__article__infos"
                                  href="mailto:lucalemaire@hotmail.fr">lucalemaire@hotmail.fr</a></p>
                </article>
                <article role="article" class="confidential__container__article">
                    <h3 role="heading" aria-label="3">HÉBERGEMENT</h3>
                    <!--<p>INFOMANIAK<br> Sise au 26 Avenue de la Praille,<br> 1227 Genève,<br> Suisse.<br> Pour de plus amples informations, veuillez consulter le site web d'Infomaniak via le lien suivant : <a href="https://www.infomaniak.com/fr">https://www.infomaniak.com/fr</a></p>-->
                </article>
                <?php if (have_rows('confidential-list')) :
                    while (have_rows('confidential-list')) :the_row();
                        $title = get_sub_field('confidential-title');
                        $text = get_sub_field('confidential-text');
                        ?>
                        <article role="article" class="confidential__container__article">
                            <h3 role="heading" aria-label="3"><?= $title ?></h3>
                            <p><?= $text ?></p>
                        </article>
                    <?php endwhile;
                endif; ?>
            </div>
        </section>
    </main>
<?php endwhile; endif; ?>
<?php get_footer(); ?><?php