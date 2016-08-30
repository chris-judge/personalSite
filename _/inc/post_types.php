<?php

//Create Custom Post Types

 /**
   * Register a book post type, with REST API support
   *
   * Based on example at: http://codex.wordpress.org/Function_Reference/register_post_type
   */
  add_action( 'init', 'gp_cpt' );
  function gp_cpt() {
    $labels = array(
        'name'               => _x( 'Current Developments', 'post type general name', 'your-plugin-textdomain' ),
        'singular_name'      => _x( 'Current Developments', 'post type singular name', 'your-plugin-textdomain' ),
        'menu_name'          => _x( 'Current Developments', 'admin menu', 'your-plugin-textdomain' )
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'project' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'show_in_rest'       => true,
        'taxonomies' => array('category'),
        'rest_base'          => 'pg-gallery',
        'rest_controller_class' => 'WP_REST_Posts_Controller',
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
    );

    register_post_type( 'gallery', $args );
}

  add_action( 'init', 'po_cpt' );
  function po_cpt() {
    $labels = array(
        'name'               => _x( 'Portfolio', 'post type general name', 'your-plugin-textdomain' ),
        'singular_name'      => _x( 'Portfolio', 'post type singular name', 'your-plugin-textdomain' ),
        'menu_name'          => _x( 'Portfolio', 'admin menu', 'your-plugin-textdomain' )
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'portfolio' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'show_in_rest'       => true,
        'taxonomies' => array('category'),
        'rest_base'          => 'po-gallery',
        'rest_controller_class' => 'WP_REST_Posts_Controller',
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
    );

    register_post_type( 'portfolio', $args );
}