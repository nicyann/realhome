<?php /* Template Name: Gabarit A propos */ ?>
<?php get_header(); ?>
<h1><?php the_title() ;?></h1>
<div class="cadre-apropos">
    <img src="<?php the_post_thumbnail_url('medium') ?>">
    <?php get_field('apropos-description') ;?>
    <p><?php the_field('apropos-description');?></p>
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
    
    <div class="realhome-team">
        <?php if( have_rows('realhome_team') ): ?>
            <?php while( have_rows('realhome_team') ): the_row(); ?>
                <div class="icon-all">
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