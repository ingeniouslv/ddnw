<?php
/**
 * ----------------------------------------------------------------
 * 1.0 Menu post type
 * ----------------------------------------------------------------
 */
function menu_post_type() {
	$labels = array(
		'name'			=> _x( 'Menus', 'post type general name' ),
		'singular_name'	=> _x( 'Menu', 'post type singular name' ),
		'add_new'		=> _x( 'Add New', 'menu' ),
		'add_new_item'	=> __( 'Add New Menu' )
	);
	$args = array(
		'labels'				=> $labels,
		'publicly_queryable' 	=> true,
		'exclude_from_search' 	=> false,
		'show_ui' 				=> true,
		'query_var' 			=> false,
		'rewrite' 				=> false,
		'capability_type'		=> 'post',
		'menu_position'			=> 8,
		'supports'				=> array(
			'title',
			'thumbnail',
			'editor'
		),
	);
	register_post_type( 'menu', $args );
}
add_action( 'init', 'menu_post_type' );


/**
 * --------------------------------------------------------------------
 * 2.0 Events post type
 * --------------------------------------------------------------------
 */
function events_post_type() { 
	// creating (registering) the custom type 
	$lables = array(
		'name' => __('Events', 'post type general name'), 
		'singular_name' => __('Event', 'post type general name'), 
		'add_new' => __('Add New', 'event'), 
	);
	$args = array(
		'labels' => $labels,
		'description' => __( 'To list upcoming events' ),
		'public' => true,
		'publicly_queryable' => true,
		'exclude_from_search' => false,
		'show_ui' => true,
		'query_var' => true,
		'menu_position' => 8,
		'has_archive' => 'events', 
		'capability_type' => 'post',
		'hierarchical' => false,
		'supports' => array( 
			'title', 
			'thumbnail', 
			'revisions', 
			'excerpt', 
			'sticky'
		)
 	);
	register_post_type( 'events', $args );
	
	register_taxonomy_for_object_type('category', 'events');
	register_taxonomy_for_object_type('post_tag', 'events');	
} 
add_action( 'init', 'events_post_type');

/**
 * --------------------------------------------------------------------
 * 3.0 Gallery post type
 * --------------------------------------------------------------------
 */
function gallery_post_type() {
	$labels = array(
		'name'				=> _x( 'Photo Galleries', 'post type general name' ),
		'singular_name'		=> _x( 'Photo hGallery', 'post type general name' ),
		'add_new'			=> _x( 'Add New', 'book' ),
		'add_new_item'		=> __( 'Add New Gallery' ),
		'edit_item'			=> __( 'Edit Gallery' ),
		'new_item'			=> __( 'New Gallery' ),
		'all_items'			=> __( 'All Galleries' ),
		'view_item'			=> __( 'View Gallery' ),
		'search_items'		=> __( 'Search Galleries' ) ,
		'not_found'			=> __( 'No Galleries Found' ),
		'parent_item_colon'	=> '',
		'menu_name'			=> 'Galleries'
	);
	$args = array(
		'labels'			=> $labels,
		'description'		=> 'Photo galleries and descriptions',
		'public'			=> true,
		'rewrite' => array( 
			'slug' => 'gallery', 
			'with_front' => false 
		),
		'menu_position'		=> 8,
		'supports'			=> array( 
			'title', 
			'editor', 
			'author', 
			'thumbnail', 
			'excerpt', 
			'trackbacks', 
			'comments', 
			'revisions'
		),
		'taxonomies' 		=> array('post_tag'),
		'has_archive'		=> true
	);	
	register_post_type( 'gallery', $args );
}
add_action( 'init', 'gallery_post_type' );

    
