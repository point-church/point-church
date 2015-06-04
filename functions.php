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

?>