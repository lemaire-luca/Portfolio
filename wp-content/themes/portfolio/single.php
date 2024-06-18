<?php get_header(); ?>
<?php if (have_posts()): while (have_posts()): the_post(); ?>
        <section class="single">
            <div class="single__title">
                <a class="back" href="<?= get_field('projet-back', 'option') ?>">Retour</a>
                <h2 role="heading" aria-level="2"><?= get_field('projet-title')?></h2>
                <p><?= get_field('projet-intro')?></p>
                <img src="<?= get_field('projet-image')?>" alt="landing page cv">
            </div>
            <div class="single__details">
                <div class="single__details__description">
                    <h3 role="heading" aria-level="3">Description</h3>
                    <p><?= get_field('projet-description')?></p>
                </div>
                <div class="single__details__tools">
                    <h3 role="heading" aria-level="3">Outils utilisés</h3>
                    <p><?= get_field('projet-langages')?></p>
                    <div class="button_profile">
                        <a href="<?= get_field('link-website')?>">Découvrir le site</a>
                    </div>
                </div>
            </div>
            <div class="single__gallery">
                <?php if (have_rows('projet-gallery')) :
                    while (have_rows('projet-gallery')) : the_row();
                        $image = get_sub_field('projet-gallery-image');
                        ?>
                        <img src="<?= $image ?>" alt="photo du site">
                    <?php endwhile;
                endif;
                ?>
            </div>
            <?php get_template_part('components/more-project'); ?>
            <?php get_template_part('components/collaboration'); ?>
        </section>
<?php endwhile; endif; ?>
<?php get_footer(); ?>