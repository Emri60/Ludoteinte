<?php

class Galeries_cpt
{
    public function __construct()
    {
        add_action('init', [$this, 'create_cpt']);
    }

    public function create_cpt()
    {
        $labels = [
            'name'                  => 'Galeries',
            'singular_name'         => 'Galerie',
            'menu_name'             => 'Galeries',
            'name_admin_bar'        => 'Galeries',
            'archives'              => 'Archives des Galeries',
            'attributes'            => 'Attributs des Galeries',
            'parent_item_colon'     => 'Element parent',
            'all_items'             => 'Toutes les Galeries',
            'add_new_item'          => 'Ajouter une nouvel Galerie',
            'add_new'               => 'Ajouter une nouvel Galerie',
            'new_item'              => 'Nouvel Galerie',
            'edit_item'             => 'Editer Galerie',
            'update_item'           => 'Mettre à jour Galerie',
            'view_item'             => 'Voir Galerie',
            'view_items'            => 'Voir les Galeries',
            'search_items'          => 'Rechercher les Galeries',
            'not_found'             => 'Aucun Galerie trouvé',
            'not_found_in_trash'    => 'Aucun Galerie trouvé dans la corbeille',
            'featured_image'        => 'Image de Galerie',
            'set_featured_image'    => 'Ajouter une image à Galerie',
            'remove_featured_image' => 'Supprimer Galerie',
            'use_featured_image'    => 'Utiliser une image pour Galerie',
            'insert_into_item'      => 'Inserer dans Galerie',
            'uploaded_to_this_item' => 'Televerser dans Galerie',
            'items_list'            => 'Liste des Galeries',
            'items_list_navigation' => 'Liste des Galeries',
            'filter_items_list'     => 'Filtrer la liste des Galeries',
        ];

        $args = [
            'labels'                => $labels,
            'description'           => 'Ma galerie',
            'public'                => true,
            'hierarchical'          => true,
            'supports'              => [
                'title',
                'editor',
                'thumbnail',
            ],
            'menu_position'         => 4,
            'menu_icon'             => 'dashicons-camera-alt',
            'has_archive'           => true,
            'rewrite'               => [
                'slug'              => 'galerie',
                'with_front'        => true,
                // Exemple d'url avec with_front:
                // http://ocooking.fr/recette/burger-bien-fat
                // Exemple d'url sans with_front:
                // http://ocooking.fr/burger-bien-fat
            ],
            'show_in_rest'      => true,
            'show_in_admin_bar'      => true,
            'show_in_menu'          => true,
        ];

        register_post_type('galery', $args);
    }

    public function activation()
    {
        $this->create_cpt();
        // $this->create_taxo();

        flush_rewrite_rules();
    }

    public function deactivation()
    {
        flush_rewrite_rules();
    }
}