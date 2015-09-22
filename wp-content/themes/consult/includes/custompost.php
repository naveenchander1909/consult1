<?php
/**
 * Register our CustomPost Type Topics.
 *
 */ 

	// Hooking up our function to theme setup
	//add_action( 'init', 'topic_custom_init' );

/**
 * Register our CustomPost Type Topics.
 *
 */ 
function cities_custom_init() {
	$labels = array(
	
		'menu_name'          => __( 'Cities'),
		'name_admin_bar'     => __( 'Cities' ),
		'add_new'            => __( 'Add New' ),
		'add_new_item'       => __( 'Add New Cities'),
		'new_item'           => __( 'New Cities'),
		'edit_item'          => __( 'Edit Cities' ),
		'view_item'          => __( 'View Cities'),
		'all_items'          => __( 'All Cities'),
	
	);
    $args = array(
      'public' => true,
      'label'  => 'Cities',
	  'has_archive' => true,
	  	  'supports' => array(
				'title',
				'editor',
				'custom-fields',
				'thumbnail',
				'excerpt',
				)
			
	     );
	register_post_type( 'Cities', $args );
	}
	// Hooking up our function to theme setup
	add_action( 'init', 'Cities_custom_init' ); 
	
/**
 * Register our CustomPost Type Topics.
 *
 */ 
// Our custom post type function
// Our custom post type function

// Hooking up our function to theme setup
