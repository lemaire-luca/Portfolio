<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="author" content="<?= get_bloginfo('name'); ?>">
    <meta name="title" content="Luca Lemaire">
    <meta name="keywords"
          content="Portfolio,Luca Lemaire, Front-end, Back-end, Fullstack, Développeur web, étudiant à l'HEPL, Développeur Wordpress">
    <meta name="description"
          content="Il s’agit d'un site pour web permettant à tout individu de suivre mon travail ainsi que le projet que j'ai pu éventuellement créer ainsi que suivre mon parcours scolaire et découvrir mes compétences développer tout au long de mon cursus scolaire">
    <meta property="profile:first_name" content="Luca">
    <meta property="profile:last_name" content="Lemaire">
    <link rel="stylesheet" href="<?= dw_asset('css/style.css') ?>">
    <title>
        <?php
        get_bloginfo('name');
        ?>
    </title>
</head>
<body itemscope itemtype="https://schema.org/Person">
<noscript>
    <p class="no-js__message">
        Pour accéder à toutes les fonctionnalités de ce site, vous devez activer JavaScript.<br>
        Voici les <a href="https://www.enable-javascript.com/fr/" title="vers le site enable-javascript">instructions
            pour activer JavaScript dans votre navigateur Web</a>.
    </p>
</noscript>
<header role="banner">
    <h1 class="hidden" role="heading" aria-level="1"><?= get_the_title(); ?></h1>
    <nav id="navigation" class="navigation" role="navigation">
        <h2 class="hidden" role="heading" aria-level="2">Navigation principale</h2>
        <div class="navigation__logo-container">
            <a href="<?= get_field('home_link', 'option') ?>">
                <img src="<?= get_field('home_logo', 'option') ?>" alt="">
            </a>
        </div>
        <input type="checkbox" id="burger-toggle">
        <label for="burger-toggle" class="burger_menu" id="burger-menu">
            <span></span>
            <span></span>
            <span></span>
        </label>
        <ul class="navigation__container" role="menu">
            <?php if (have_rows('nav-list', 'options')) :
                while (have_rows('nav-list', 'options')) :the_row();
                    $name = get_sub_field('nav-name-link');
                    $link = get_sub_field('nav-link');
                    ?>
                    <li>
                        <a href="<?= $link ?>"><?= $name ?></a>
                    </li>
                <?php endwhile;
            endif; ?>
        </ul>
    </nav>
</header>
