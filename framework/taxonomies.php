<?php

/*
for more information on taxonomies, go here:
http://codex.wordpress.org/Function_Reference/register_taxonomy
*/

// now let's add custom categories (these act like categories)
register_taxonomy( 'events_cat', 
	array('custom_type'), /* if you change the name of register_post_type( 'custom_type', then you have to change this */
	array('hierarchical' => true,     /* if this is true, it acts like categories */             
		'labels' => array(
			'name' => __( 'Custom Categories', 'bonestheme' ), /* name of the custom taxonomy */
			'singular_name' => __( 'Custom Category', 'bonestheme' ), /* single taxonomy name */
			'search_items' =>  __( 'Search Custom Categories', 'bonestheme' ), /* search title for taxomony */
			'all_items' => __( 'All Custom Categories', 'bonestheme' ), /* all title for taxonomies */
			'parent_item' => __( 'Parent Custom Category', 'bonestheme' ), /* parent title for taxonomy */
			'parent_item_colon' => __( 'Parent Custom Category:', 'bonestheme' ), /* parent taxonomy title */
			'edit_item' => __( 'Edit Custom Category', 'bonestheme' ), /* edit custom taxonomy title */
			'update_item' => __( 'Update Custom Category', 'bonestheme' ), /* update title for taxonomy */
			'add_new_item' => __( 'Add New Custom Category', 'bonestheme' ), /* add new title for taxonomy */
			'new_item_name' => __( 'New Custom Category Name', 'bonestheme' ) /* name title for taxonomy */
		),
		'show_admin_column' => true, 
		'show_ui' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => 'custom-slug' ),
	)
);   

// now let's add custom tags (these act like categories)
register_taxonomy( 'custom_tag', 
	array('custom_type'), /* if you change the name of register_post_type( 'custom_type', then you have to change this */
	array('hierarchical' => false,    /* if this is false, it acts like tags */                
		'labels' => array(
			'name' => __( 'Custom Tags', 'bonestheme' ), /* name of the custom taxonomy */
			'singular_name' => __( 'Custom Tag', 'bonestheme' ), /* single taxonomy name */
			'search_items' =>  __( 'Search Custom Tags', 'bonestheme' ), /* search title for taxomony */
			'all_items' => __( 'All Custom Tags', 'bonestheme' ), /* all title for taxonomies */
			'parent_item' => __( 'Parent Custom Tag', 'bonestheme' ), /* parent title for taxonomy */
			'parent_item_colon' => __( 'Parent Custom Tag:', 'bonestheme' ), /* parent taxonomy title */
			'edit_item' => __( 'Edit Custom Tag', 'bonestheme' ), /* edit custom taxonomy title */
			'update_item' => __( 'Update Custom Tag', 'bonestheme' ), /* update title for taxonomy */
			'add_new_item' => __( 'Add New Custom Tag', 'bonestheme' ), /* add new title for taxonomy */
			'new_item_name' => __( 'New Custom Tag Name', 'bonestheme' ) /* name title for taxonomy */
		),
		'show_admin_column' => true,
		'show_ui' => true,
		'query_var' => true,
	)
); 