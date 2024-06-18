<?php get_header(); ?>
<?php if (have_posts()): while (have_posts()): the_post(); ?>
    <main role="main">
        <section id="title" class="title">
            <div class="title__infos">
                <div class="title__infos__text">
                    <h2><?= get_field('intro-title',false, false); ?></h2>
                </div>
                <img src="<?= get_field('intro-img'); ?>" alt="">
            </div>
        </section>
        <section itemscope itemtype="https://schema.org/Person" id="profile" class="profile">
            <div class="profile__img">
                <img src="<?= get_field('profile-img'); ?>" alt="">
                <span itemprop="birthDate" class="date">10 Octobre 2002</span>
                <span itemprop="nationality" class="nationality">Belge</span>
            </div>
            <div class="profile__infos">
                <h2 role="heading" aria-level="2" class="profile__infos__big">salut,</h2>
                <h2 role="heading" aria-level="2" class="profile__infos__small">je m'appelle <span itemprop="name" class="green">Luca</span> !</h2>
                <p class="profile__infos__p">
                    Je suis un jeune web <span lang="en">developer</span> passionné, toujours aux études. Curieux et motivé, je passe mon temps
                    à explorer les dernières tendances. Avec ma créativité et mon désir constant d'apprendre, je ne
                    cesse de découvrir de nouvelles choses.
                </p>
                <div class="profile__infos__button">
                    <a href="<?= get_field('link-me')?>">Découvrez moi</a>
                </div>
            </div>
        </section>
    <?php get_template_part('components/more-project'); ?>
    </main>
<?php endwhile; endif; ?>
<?php get_footer(); ?>
