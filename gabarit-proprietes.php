<?php /* Template Name: Gabarit proprietes */ ?>
<?php get_header(); ?>
    <div class="container-1">


        <div class="bloc-title-proprietes">
            <h1 class="title-proprietes"><span class="nos">Nos </span><span class="propr">Propriétés</span></h1>
            <div class="trait-propriete"></div>
        </div>
        
        <?php $post = get_the_ID() ?>
        <?php
        $args = array(
            'post_type' => 'propriétés',
            'posts_per_page' => 10,
            'order' => 'ASC',
            'post__not_in' => array($post));
        ?>
        <!--The Query-->
        <?php $the_query = new WP_Query($args); ?>

        <div class="cards">
            <!--The loop-->
            <?php if ($the_query->have_posts()) : ?>
                <?php while ($the_query->have_posts()) :
                    $the_query->the_post(); ?>


                    <div class="card">
                        

                            <img src="<?php the_post_thumbnail_url('medium') ?>">
                        
                        
                            <h2>
                                <a class="lien-title" href="<?php the_permalink() ?>">
                                    <?php the_title() ?></a></h2>
                            
                            <?php get_field('ville') ?>
                            <p><?php the_field('ville') ?></p>
                            
                            <?php get_field('prix') ?>
                            <p class="price-proprietes"><?php the_field('prix') ?></p>
                            <div class="details-proprietes">
                                <?php get_field('superficie')
                                ?><?php get_field('nb_chambres')
                                ?><?php get_field('salle') ?>
                                <p>
                                    <span><?php the_field('superficie') ?></span>
                                    <span><?php the_field('nb_chambres') ?></span>
                                    <span><?php the_field('salle') ?></span>
                                </p>

                            </div>
                       
                    </div>
                    
                
                <?php endwhile; ?>
            
            <?php endif; ?>

        </div>
    </div>

<?php get_footer() ?>