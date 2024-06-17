<section id="more-project" class="more-project">
    <h2 role="heading" aria-level="2">Projets</h2>
    <div class="more-project__container">
        <?php if (have_rows('more-project-list', 'option')) :
            while (have_rows('more-project-list','option')) : the_row();
                $title = get_sub_field('title');
                $link = get_sub_field('link');
                $image = get_sub_field('image');
                ?>
                <div class="more-project__container__image">
                    <a href="<?= $link ?>">
                        <h3 role="heading" aria-level="3"><?= $title ?></h3>
                        <img src="<?= $image ?>" alt="">
                    </a>
                </div>
            <?php endwhile;
        endif;
        ?>
    </div>
        <div class="more">
            <a href="<?= get_field('view-more', 'option') ?>">Voir plus</a>
        </div>
</section>
