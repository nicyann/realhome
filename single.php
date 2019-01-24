<?php get_header(); ?>
    <div class="single-container">
        <div class="single-article">
            <?php if (have_posts()) : ?>
            <?php while (have_posts()):
            the_post() ?>
            <h1><?php the_title() ?></h1>


            <p><?php the_field('actualies_paragraphe_top') ?></p>
            <img class="article-img" src='<?php the_post_thumbnail_url('full') ?>' alt="image a la une">

            <p><?php the_field('') ?></p>
            <h2><?php the_field('actualites_sous-titre_pagraphe') ?></h2>
            <p><?php the_field('actualites_paragraphe_bottom_1') ?></p>

        </div>
        <?php endwhile; ?>
        <?php endif; ?>


        <div>
            <?php get_sidebar('sidebar') ?>
        </div>
    </div>
<?php get_footer() ?>