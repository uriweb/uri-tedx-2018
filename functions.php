<?php
function uri_tedx_2018_enqueues() {

    $parent_style = 'uri-2017-style';

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    
    wp_enqueue_style( 'uri-tedx-2018-style', get_stylesheet_directory_uri() . '/style.css', array( $parent_style ), wp_get_theme()->get('Version') );
    
    wp_enqueue_script( 'uri-tedx-2018-script', get_stylesheet_directory_uri() . '/js/script.min.js', array(), wp_get_theme()->get('Version') );
}
add_action( 'wp_enqueue_scripts', 'uri_tedx_2018_enqueues' );


/**
 * Set up Talks post type and custom fields
 */
function uri_tedx_2018_create_talk_post_type() {
  register_post_type( 'talk',
    array(
        'label' => 'Talk',
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'capability_type' => 'post',
        'hierarchical' => true,
        'rewrite' => array('slug' => 'talk'),
        'query_var' => true,
        'has_archive' => true,
        'exclude_from_search' => false,
        'supports' => array('title','thumbnail','revisions'),
        'taxonomies' => array('post_tag', 'category'),
        'labels' => array(
            'name' => __( 'Talks' ),
            'singular_name' => __( 'Talk' )
        ),
    )
  );
}
add_action( 'init', 'uri_tedx_2018_create_talk_post_type' );

if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_talks',
		'title' => 'Talks',
		'fields' => array (
			array (
				'key' => 'field_5a970a87efcb4',
				'label' => 'Name',
				'name' => 'name',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5a970aadefcb5',
				'label' => 'Talk Title',
				'name' => 'title',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5a970ad1efcb6',
				'label' => 'Youtube ID',
				'name' => 'ytid',
				'type' => 'text',
				'instructions' => 'Enter the YouTube video id found in the YouTube url.	For example, if the URL is "https://www.youtube.com/watch?v=XzAurHQwIcU", enter "XzAurHQwIcU"',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5a970b5eefcb7',
				'label' => 'Bio',
				'name' => 'bio',
				'type' => 'wysiwyg',
				'required' => '0',
				'toolbar' => 'basic',
				'media_upload' => 'no',
			),
			array (
				'key' => 'field_5a970bbbefcb8',
				'label' => 'Profession',
				'name' => 'profession',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5a970bc9efcb9',
				'label' => 'Transcript',
				'name' => 'transcript',
				'type' => 'wysiwyg',
				'required' => '0',
				'toolbar' => 'basic',
				'media_upload' => 'no',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'talk',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'acf_after_title',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
}