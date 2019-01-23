<?php /* Template Name: Gabarit A propos */ ?>
<?php get_header(); ?>
<!--bloc A propos-->
<h1 class="title-apropos"><?php the_title() ;?></h1>
<div class="cadre-apropos">
    <img src="<?php the_post_thumbnail_url('medium') ?>">
        <?php get_field('apropos-description') ;?>
    <div class="apropos-description">
        <p ><?php the_field('apropos-description');?></p>
    </div>
</div>
<div class="bandeau-midle">
    <?php while (have_rows('titre_bandeau')) : the_row(); ?>
        <div class="cadre">
            <i><?php the_sub_field('icone'); ?> </i>
            <h3><?php the_sub_field('titre'); ?></h3>
            <p><?php the_sub_field('long_text'); ?></p>
        </div>
    <?php endwhile; ?>
</div>



    <p class="titre-equipe">Notre <strong>équipe</strong></p>
    <div class="realhome-team">
    
    <?php
        $args = array(
        'post_type' => 'agents',
        'posts_per_page' => 4,
        'order' => 'ASC',
        );
        // The Query
        $the_query = new WP_Query($args);?>
        
        <?php if( have_rows('realhome_team') ): ?>
            <?php while( have_rows('realhome_team') ): the_row(); ?>
                <div class="card-agent">
                    <?php $teamImage = get_sub_field("real_team_image") ;?>
                    <img src="<?php echo $teamImage['url'];?>" alt="">
                    <h3>
                        <?php the_sub_field('real_team_nom'); ?>
                    </h3>
                    <?php the_sub_field('real_team_fonction'); ?>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>





<?php get_footer() ?>