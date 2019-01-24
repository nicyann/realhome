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

    <meta charset="utf-8">
    <!-- Nous chargeons les fichiers CDN de Leaflet. Le CSS AVANT le JS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css" integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ=="
          crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js" integrity="sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw=="
            crossorigin=""></script>
    <script type="text/javascript">
        // On initialise la latitude et la longitude de Paris (centre de la carte)
        var lat = 48.852969;
        var lon = 2.349903;
        var macarte = null;
        // Fonction d'initialisation de la carte
        function initMap() {
            // Créer l'objet "macarte" et l'insèrer dans l'élément HTML qui a l'ID "map"
            macarte = L.map('map').setView([lat, lon], 11);
            // Leaflet ne récupère pas les cartes (tiles) sur un serveur par défaut. Nous devons lui préciser où nous souhaitons les récupérer. Ici, openstreetmap.fr
            L.tileLayer('https://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png', {
                // Il est toujours bien de laisser le lien vers la source des données
                attribution: 'données © <a href="//osm.org/copyright">OpenStreetMap</a>/ODbL - rendu <a href="//openstreetmap.fr">OSM France</a>',
                minZoom: 1,
                maxZoom: 20
            }).addTo(macarte);
        }
        window.onload = function(){
            // Fonction d'initialisation qui s'exécute lorsque le DOM est chargé
            initMap();
        };
    </script>
    
    <title><?php wp_title(''); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header>
    <div class="header">



        <div class="realhome-logo">
            <div class="hsquare-top-left"></div>
            <div class="hsquare-top-right"></div>
            <div class="realhome"><a href="http://php/www.realhome.com/">
                    <span class="realheader">REAL<strong>HOME</strong></span></a>
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