<?php /* Template Name: about page template */ ?>
<?php get_header(); ?>
<?php if (have_posts()): while (have_posts()): the_post(); ?>
    <main>
        <h2><?= get_field('about-title'); ?></h2>
    </main>
<?php endwhile; endif; ?>
<?php get_footer(); ?><?php
