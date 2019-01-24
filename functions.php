<?php
add_action('wp_enqueue_scripts', 'insert_css');
function insert_css()
{
    // On ajoute le css general du theme
    wp_enqueue_style('style', get_stylesheet_uri());



// On ajoute le jQuery au thème
    wp_register_script('jquery2','https://cdnjs.cloudﬂare.com/ajax/libs/jquery/2.1.4/jquery.min.js');
    wp_enqueue_script('jquery2');
    
    wp_register_script('scroll','https://unpkg.com/scrollreveal/dist/scrollreveal.min.js');
    wp_enqueue_script('scroll');
    
    wp_enqueue_style( 'load-fa', 'https://use.fontawesome.com/releases/v5.6.3/css/all.css' );
    wp_enqueue_style('font');
    
}
// on ajoute une ligne dans le footer
add_action("wp_footer", "mfp_Add_Text");

// Déﬁnr ‘mfp_Add_Text'
function mfp_Add_Text()
{


}
// on ajoute les menus dans le back
add_theme_support('menus');
register_nav_menus(array(
    'menu-principal' => 'Navigation principale',
    'menu-secondaire' => 'Navigation secondaire',
    'menu-footer' => 'Navigation footer'));

//isertion de la sidebar backoffice

if (function_exists('register_sidebar'))
    register_sidebar(array('name'=>'sidebar',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>', ));

add_theme_support('post-thumbnails');



//insertion des custom posttype

function create_post_type() {
    register_post_type('Propriétés',
        array(
            'label'                 => __('Propriétés'),
            'singular_label'        => __('Propriété'),
            'add_new_item'          => __( 'Ajouter une propriétés' ),
            'edit_item'             => __( 'Modifier une propriétés' ),
            'new_item'              => __( 'Nouvelle propriétés' ),
            'view_item'             => __( 'Voir la propriétés' ),
            'search_items'          => __( 'Rechercher une propriétés' ),
            'not_found'             =>  __( 'Aucune propriétés trouvée' ),
            'not_found_in_trash'    => __( 'Aucune propriétés trouvée' ),
            'public'                => true,
            'show_ui'               => true,
            'capability_type'       => 'post',
            'has_archive'           => true,
            'hierarchical'          => true,
            'menu_icon'             => 'dashicons-video-alt3',
            'taxonomies'            => array('Genre'),
            'supports'              => array( 'title', 'editor', 'thumbnail'),
            'rewrite'               => array('slug' => 'proprietes', 'with_front' => true)
        )
    );
    
   
}
add_action( 'init', 'create_post_type' );

function themes_taxonomy() {
    register_taxonomy(
        'ville',
        'Propriétés',
        array(
            'label' => 'ville',
            'query_var' => true,
            'rewrite' => array(
                'slug' => 'ville',
                'with_front' => true
            ),
            'hierarchical' => true,
        )
    );
}
add_action( 'init', 'themes_taxonomy');


?>