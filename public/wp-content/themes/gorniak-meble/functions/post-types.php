<?php

function create_post_type_offer() {

    register_post_type('offer', // type name
        array('labels' =>
            array(
                'name' => __('Oferty'),
                'singular_name' => __('Oferta'),
                'add_new' => 'Dodaj ofertę',
                'add_new_item' => 'Dodaj nową ofertę',
                'not_found' => 'Nie ofert'
            ),
            'public' => true,
            'menu_position' => 5,
            'rewrite' => array('slug' => 'oferta'),
            'supports' => array('title', 'editor', 'thumbnail'),
            'menu_icon' => 'dashicons-tickets-alt'
        )
    );
}
add_action('init','create_post_type_offer');

function create_post_type_realization() {

    register_post_type('realization', // type name
        array('labels' =>
            array(
                'name' => __('Realizacje'),
                'singular_name' => __('Realizacja'),
                'add_new' => 'Dodaj realizację',
                'add_new_item' => 'Dodaj nową realizację',
                'not_found' => 'Nie znaleziono realizacji'
            ),
            'public' => true,
            'menu_position' => 5,
            'rewrite' => array('slug' => 'realizacje'),
            'supports' => array('title', 'editor', 'thumbnail'),
            'menu_icon' => 'dashicons-media-document'
        )
    );
}
add_action('init','create_post_type_realization');