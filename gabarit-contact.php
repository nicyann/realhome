<?php /* Template Name: Gabarit Contact */ ?>
<?php get_header(); ?>


<h2 class="titre-contact    ">Contact</h2>

<div class="main-contact">
    <div class="contact-map">
        <div id="map">
            <!-- Ici s'affichera la carte -->
        </div>
    </div>
    <div class="contact-bas">
        <div class="contact-bas-infos">
            <h2 class="infos_title">Infos</h2>
            <p class="contact-text"><?php the_field('info_contact_texte'); ?></p>
            <p class="contact-adress"><?php the_field('info_contact_adress'); ?></p>
            <p class="contact-ville"><?php the_field('info_contact_ville'); ?></p>
            <p class="contact-tel">Telephone : <?php the_field('info_contact_tel'); ?></p>
            <p class="contact-fax">Fax : <?php the_field('info_contact_fax'); ?></p>
            <p >
                Email: <a class="contact-mail" href="mailto:<?php the_field('info_contact_mail'); ?>"><?php the_field('info_contact_mail'); ?></a>
            </p>
        </div>
        <div class="contact-bas-form">
            <h2 class="form_title">Envoyez-nous un message !</h2>
    
            <?php echo do_shortcode('[contact-form-7 id="161" title="Formulaire de contact 1"]') ?>
        </div>
    </div>
</div>
<?php get_footer() ?>


