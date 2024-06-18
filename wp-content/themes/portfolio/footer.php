<section class="footer" id="footer">
    <h3 role="heading" aria-level="3" class="hidden">footer</h3>
        <div class="footer__top">
            <div class="footer__top__logo">
                <a href="<?= get_field('home_link', 'option') ?>">
                    <img src="<?= get_field('home_logo', 'option') ?>" alt="">
                </a>
            </div>
            <div class="footer__top__icon">
                <ul role="list" class="footer__top__icon__list">
                    <?php if (have_rows('social-list', 'option')) :
                        while (have_rows('social-list', 'option')) : the_row();
                            $image = get_sub_field('social-image');
                            $link = get_sub_field('social-link');
                            ?>
                            <li itemscope itemtype="http://schema.org/SiteNavigationElement">
                                <a href="<?= $link ?>" title="Vers la page" itemprop="url">
                                    <img class="social_logo" src="<?= $image ?>" alt="" width="40px">
                                </a>
                            </li>
                        <?php endwhile;
                    endif; ?>
                </ul>
            </div>
            <div class="footer__top__button">
                <a href="<?= get_field('contact_page', 'option') ?>">Contact</a>
            </div>
        </div>
        <hr>
        <div itemscope itemprop="https://schema.org/Person" class="footer__bottom">
            <div class="footer__bottom__extra">
                <p>© 2024 <span itemprop="name">Luca Lemaire</span>. Tous droits réservés.</p>
                <a href="<?=get_field('button-confidential', 'options');?>">Politique de confidentialités</a>
            </div>
        </div>
</section>