<?php get_header(); ?>
    <div class="home-img">
        <h1 class="home_title">REAL HOME L'AGENCE QUI VOUS ACCOMPAGNE DANS VOS PROJETS</h1>
        <img src="<?php the_post_thumbnail_url('full') ?>"
    </div>


    <div class="presentation">
        <div class="bloc-title">
        <h2 class="presentation-titre"><?php the_field('sous_titre'); ?></h2>
            <div class="bloc-trait"></div>
        </div>
        <div class="presentation-texte">
            <?php the_field('textarea'); ?>
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
    <div class="container-1">
        <div class="bloc-title-proprietes">
            <h1 class="title-proprietes"><span class="nos">Nos </span><span class="propr">Propriétés</span></h1>
            <div class="trait-propriete"></div>
            <div class="texte-propriete">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A adipisci consequatur dolores eveniet facere
                laborum nisi possimus quia quisquam voluptas?</p>
            </div>
        </div>
        
        <?php $post = get_the_ID() ?>
        <?php
        $args = array(
            'post_type' => 'propriétés',
            'posts_per_page' => 6,
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


                        <h2><?php the_title() ?></h2>
                        
                        <?php get_field('ville') ?>
                        <p><?php the_field('ville') ?></p>
                        
                        <?php get_field('prix') ?>
                        <p><?php the_field('prix') ?></p>
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
        <div class="bloc-all-see">
            <button class="favorite styled"
                    type="button">
                VOIR TOUTES
            </button>
        </div>
    </div>

<div class="bloc-nos-agents">
    <div class="bloc-picture">
        <?php if( get_field('image') ): ?>

            <img src="<?php the_field('image'); ?>" />
    
        <?php endif; ?>
    </div>
    <div class="bloc-text">
        <div class="titre">
            <h1>Nos Agents</h1>
        </div>
        <div class="trait"></div>
        <div class="nom">
            <?php get_field('nom_agents') ?>
            <?php the_field('nom_agents') ?>
        
        </div>
        <div class="desc"></div>
    </div>
</div>








<?php get_footer(); ?>