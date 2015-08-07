<?php

register_nav_menus( array(
	'global_nav' => 'Global Navigation',
) );

add_action( 'init', 'location_post_type' );
function location_post_type() {
  register_post_type( 'locations',
    array(
      'labels' => array(
        'name' => __( 'Locations' ),
        'singular_name' => __( 'Location' )
      ),
      'public' => true,
      'has_archive' => true,
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
    )
  );
}

function remove_content_editor() {
    remove_post_type_support( 'locations' , 'editor' );
    remove_post_type_support( 'events', 'editor' );
    
}

add_action( 'init', 'remove_content_editor' );

?>