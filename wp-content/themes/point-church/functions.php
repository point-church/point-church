<?php

register_nav_menus( array(
	'global_nav' => 'Global Navigation',
) );

add_theme_support( 'post-thumbnails' ); 

add_action( 'init', 'staff_post_type' );
function staff_post_type() {
  register_post_type( 'staff',
    array(
      'labels' => array(
        'name' => __( 'Staff' ),
        'singular_name' => __( 'Staff Member' )
      ),
      'public' => true,
      'has_archive' => false,
      'menu_icon' => 'dashicons-groups'
    )
  );
}

add_action( 'init', 'events_post_type' );
function events_post_type() {
  register_post_type( 'events',
    array(
      'labels' => array(
        'name' => __( 'Events' ),
        'singular_name' => __( 'Event' )
      ),
      'public' => true,
      'has_archive' => true,
      'menu_icon' => 'dashicons-calendar'
    )
  );
}

add_action( 'init', 'locations_post_type' );
function locations_post_type() {
  register_post_type( 'locations',
    array(
      'labels' => array(
        'name' => __( 'Locations' ),
        'singular_name' => __( 'Location' )
      ),
      'public' => true,
      'has_archive' => true,
      'menu_icon' => 'dashicons-location'
    )
  );
}

function remove_content_editor() {
    remove_post_type_support( 'staff' , 'editor' );
    remove_post_type_support( 'events', 'editor' );
    remove_post_type_support( 'locations', 'editor' );
}

add_action( 'init', 'remove_content_editor' );

// ALERT BAR SETTINGS

include_once('includes/alert-bar.php');

?>