<?php

//Je vérifie que me fonction n'existe pas deja 
//(dans le cas d'un child theme par exemple)
if (!function_exists('ludo_enqueue')) {

    function ludo_enqueue() {
        //Je déclare a WordPress 2 chose :
        //1 feuille de style 
        //1 feuille de script
        wp_enqueue_style(
            'main-style', //le nom de ma feuille de style doit etre unique
            get_theme_file_uri('public/css/style.css'),
            [],
            '1.0.0' //La version de ma feuille de style
        );

        wp_enqueue_script(
            'app', //le no mde ma feuille de script doit etre unique
            get_theme_file_uri('public/js/app.js'),
            [],
            true //Je souhaites que mon script soit inclu dans le footer
        );
    }
}
add_action('wp_enqueue_scripts', 'ludo_enqueue');