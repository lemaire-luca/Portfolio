<?php /* Template Name: contact page template */ ?>
<?php get_header(); ?>
<section id="contact" class="contact">
    <div class="contact__image-information">
        <img src="<?= get_field('image-contact')?>" alt="Image de lemaire luca">
        <div itemscope itemprop="https://schema.org/Person" class="contact__image-information__span">
            <a href="tel:+32 (0)470 61 50 28">
                <span itemprop="telephone" class="num">+32 (0)470 61 50 28</span>
            </a>
            <a href="mailto:lucalemaire@hotmail.fr">
                <span itemprop="email" class="mail-l">lucalemaire@hotmail.fr</span>
            </a>
        </div>
    </div>
    <div class="contact__container">
        <div class="contact__container__infos">
            <h2 role="heading" aria-level="2">Me contacter</h2>
            <p>Vous souhaitez collaborer avec moi ?</p>
        </div>
        <?php get_template_part('components/formulaire'); ?>
    </div>
</section>
<?php get_footer(); ?>