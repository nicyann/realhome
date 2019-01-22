<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<? bloginfo('pingback_url'); ?>">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script|Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title><?php wp_title(''); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header>
    <div class="header">



        <div class="realhome-logo">
            <div class="hsquare-top-left"></div>
            <div class="hsquare-top-right"></div>
            <div class="realhome"><a href="http://php/www.realhome.com/"></a>
                <span class="real">REAL</span>
                <span class="homes">HOME</span>
            </div>
            <div class="hsquare-bottom-left"></div>
            <div class="hsquare-bottom-right"></div>
        </div>
       
        <div class="header-nav">
            <?php wp_nav_menu(array( 'theme_location' => 'menu-principal', 'container' => 'nav')); ?>
        </div>
        <div class="social-networks">
            <?php wp_nav_menu(array( 'theme_location' => 'menu-secondaire', 'container' => 'nav')); ?>
        </div>

    </div>



</header>
<script>

</script>