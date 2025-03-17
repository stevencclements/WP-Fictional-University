<?php

function university_post_types() {
    register_post_type('event', array(
        'public' => true,
        'has_archive' => true,
        'show_in_rest' => true,
        'labels' => array(
            'name' => 'Events',
            'add_new_item' => 'Add New Event',
            'edit_item' => 'Edit Event',
            'all_items' => 'All Events',
            'singular_name' => 'Event'
        ),
        'rewrite' => array(
            'slug' => 'events'
        ),
        'supports' => array(
            'title',
            'editor',
            'excerpt'
        ),
        'menu_icon' => 'dashicons-calendar'
    ));

    register_post_type('program', array(
        'public' => true,
        'has_archive' => true,
        'show_in_rest' => true,
        'labels' => array(
            'name' => 'Programs',
            'add_new_item' => 'Add New Program',
            'edit_item' => 'Edit Program',
            'all_items' => 'All Programs',
            'singular_name' => 'Program'
        ),
        'rewrite' => array(
            'slug' => 'programs'
        ),
        'supports' => array(
            'title',
            'editor',
            'excerpt'
        ),
        'menu_icon' => 'dashicons-awards'
    ));
}

add_action('init', 'university_post_types');
