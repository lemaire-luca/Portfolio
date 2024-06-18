<?php /* Template Name: projects page template */ ?>
<?php get_header(); ?>
    <main role="main">
        <section class="projects">
            <div class="projects__infos">
                <h2 role="heading" aria-level="2">Mes projets</h2>
                <p>Voici quelques projets que j’ai réaliser</p>
            </div>
            <h3 class="hidden" role="heading" aria-level="3">Liste de mes projets</h3>
            <div class="projects__slider">
                <?php if (have_rows('project-list')) :
                    while (have_rows('project-list')) : the_row();
                        $title = get_sub_field('title');
                        $image = get_sub_field('image');
                        $link = get_sub_field('link');
                        ?>
                        <div class="projects__slider__image">
                            <a href="<?= $link ?>">
                                <h3 role="heading" aria-level="3"><?= $title ?></h3>
                                <img src="<?= $image ?>" alt="Projet curriculum vitae">
                            </a>
                        </div>
                    <?php endwhile;
                endif;
                ?>
            </div>
        </section>
    </main>
<?php get_template_part('components/collaboration'); ?>
<?php get_footer(); ?>