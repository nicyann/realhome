<?php get_header(); ?>

<?php $title = get_the_title(get_option('page_for_posts', true)); ?>


<?php //$img =wp_get_attachment_image_src(get_post_thumbnail_id(get_option('page_for_posts')),'full'); ?>
<div class="container">
    <h1 class="titre-actualites"><?php echo $title ?></h1>
    <div class="main-article">


        <div class="card-article">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <?php if (get_the_post_thumbnail_url()): ?>
                        <div class="article-preview">
                            <h3><?php the_title() ?></h3>
                            <img src='<?php the_post_thumbnail_url('full') ?>' alt="image a la une">
                            <?php the_excerpt() ?>
                            <div class="button-suite">
                                <a href="<?php the_permalink() ?>">Lire la suite</a>
                            </div>
                        </div>
                    <?php endif; ?>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>

        <div class="article-sidebar">
            <?php get_sidebar('sidebar') ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>



