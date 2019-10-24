<?php

/*
Plugin name: Ludo Settings
Description: Réglages pour le theme de ludovic
Author: Emri
Version: 1.0.0
 */

// Sécuriser le plugin
if (!defined('WPINC')) {
    die();
}

// Inclusion des différentes classes necessaire au plugin
require plugin_dir_path(__FILE__) . 'inc/galeries_cpt.php';

// CPT GALERY   
$galeries_cpt = new Galeries_cpt();

register_activation_hook(__FILE__, [$galeries_cpt, 'activation']);
register_deactivation_hook(__FILE__, [$galeries_cpt, 'deactivation']);