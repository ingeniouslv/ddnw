<?php
/**
 * ------------------------------------------------------------------------------
 * 1.0 Define constants
 * ------------------------------------------------------------------------------
 */
define( 'THEMEROOT', get_stylesheet_directory_uri() );
define( 'IMAGES', THEMEROOT . '/images' );
define( 'SCRIPTS', THEMEROOT . '/js' );
define( 'FRAMEWORK', get_template_directory() . '/framework' );

/**
 * ------------------------------------------------------------------------------
 * 2.0 Load the framework
 * ------------------------------------------------------------------------------
 */


/**
 * ------------------------------------------------------------------------
 * 3.0 - ACF
 *
 * Custom fields for Post Formats
 * @return void
 * ------------------------------------------------------------------------
 */	
define( 'ACF_LITE', true ); 
include_once( FRAMEWORK . '/acf/acf.php' );
include_once( FRAMEWORK . '/acf-fields.php' );	

/**
 * ------------------------------------------------------------------------
 * 4.0 - Create gallery content post type
 * ------------------------------------------------------------------------
 */	
function register_gallery() {
	$labels = array(
		'name'				=> _x( 'Photo Galleries', 'post type general name' ),
		'singular_name'		=> _x( 'Gallery', 'post type general name' ),
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
			'slug' => 'galleries', 
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
	register_post_type( 'galleries', $args );
}   
add_action('init', 'register_gallery');



