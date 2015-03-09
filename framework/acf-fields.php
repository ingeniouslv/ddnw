<?php
/**
 * Custom Fields
 *
 * @package SEVEN
 * 
**/

/* Add-Ons */
function ti_register_fields(){
	include_once('acf-add-ons/acf-gallery/gallery.php');
	include_once('acf-add-ons/acf-repeater/repeater.php');
	include_once('acf-add-ons/acf-flexible-content/flexible-content.php');
}
add_action('acf/register_fields', 'ti_register_fields'); 


if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_headline-photo',
		'title' => 'Headline Photo',
		'fields' => array (
			array (
				'key' => 'field_54cacfae8d4b1',
				'label' => 'Headline Photo',
				'name' => 'seven_article_headline_photo',
				'type' => 'image',
				'instructions' => 'Upload the headline photo (16:9 Widescreen) for the story.',
				'required' => 1,
				'save_format' => 'object',
				'preview_size' => 'thumbnail',
				'library' => 'all',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'post',
					'order_no' => 0,
					'group_no' => 0,
				),
				array (
					'param' => 'post_format',
					'operator' => '==',
					'value' => 'image',
					'order_no' => 1,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'acf_after_title',
			'layout' => 'default',
			'hide_on_screen' => array (
				0 => 'custom_fields',
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => 'acf_photo-gallery',
		'title' => 'Photo Gallery',
		'fields' => array (
			array (
				'key' => 'field_54caf3ca5aeae',
				'label' => 'Photo Gallery',
				'name' => 'photo_gallery',
				'type' => 'gallery',
				'instructions' => 'Upload the images for the photo gallery here.',
				'required' => 1,
				'preview_size' => 'thumbnail',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'galleries',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'acf_after_title',
			'layout' => 'default',
			'hide_on_screen' => array (
				0 => 'discussion',
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => 'acf_video',
		'title' => 'Video',
		'fields' => array (
			array (
				'key' => 'field_54cac73653a68',
				'label' => 'Add Video',
				'name' => 'seven_article_video',
				'type' => 'text',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'post',
					'order_no' => 0,
					'group_no' => 0,
				),
				array (
					'param' => 'post_format',
					'operator' => '==',
					'value' => 'video',
					'order_no' => 1,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'acf_after_title',
			'layout' => 'default',
			'hide_on_screen' => array (
				0 => 'custom_fields',
			),
		),
		'menu_order' => 0,
	));
}

