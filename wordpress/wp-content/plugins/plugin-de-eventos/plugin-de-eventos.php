<?php
/*
Plugin Name: Plugin de Eventos
Plugin URI: 
Description: 
Version: 
Author: 
Author URI: 
License: 
License URI: 
*/
if ( ! function_exists('Eventos') ) {

// Register Custom Post Type
function Eventos() {

	$labels = array(
		'name'                  => _x( 'Eventos', 'Post Type General Name', 'Eventos' ),
		'singular_name'         => _x( 'Evento', 'Post Type Singular Name', 'Eventos' ),
		'menu_name'             => __( 'Evento', 'Eventos' ),
		'name_admin_bar'        => __( 'Eventos', 'Eventos' ),
		'archives'              => __( 'Item Archives', 'Eventos' ),
		'attributes'            => __( 'Item Attributes', 'Eventos' ),
		'parent_item_colon'     => __( 'Parent Item:', 'Eventos' ),
		'all_items'             => __( 'All Items', 'Eventos' ),
		'add_new_item'          => __( 'Add New Item', 'Eventos' ),
		'add_new'               => __( 'Add New', 'Eventos' ),
		'new_item'              => __( 'New Item', 'Eventos' ),
		'edit_item'             => __( 'Edit Item', 'Eventos' ),
		'update_item'           => __( 'Update Item', 'Eventos' ),
		'view_item'             => __( 'View Item', 'Eventos' ),
		'view_items'            => __( 'View Items', 'Eventos' ),
		'search_items'          => __( 'Search Item', 'Eventos' ),
		'not_found'             => __( 'Not found', 'Eventos' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'Eventos' ),
		'featured_image'        => __( 'Featured Image', 'Eventos' ),
		'set_featured_image'    => __( 'agregar imagen', 'Eventos' ),
		'remove_featured_image' => __( 'Remove featured image', 'Eventos' ),
		'use_featured_image'    => __( 'Use as featured image', 'Eventos' ),
		'insert_into_item'      => __( 'Insert into item', 'Eventos' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'Eventos' ),
		'items_list'            => __( 'Items list', 'Eventos' ),
		'items_list_navigation' => __( 'Items list navigation', 'Eventos' ),
		'filter_items_list'     => __( 'Filter items list', 'Eventos' ),
	);
	$rewrite = array(
		'slug'                  => 'Evento',
		'with_front'            => true,
		'pages'                 => true,
		'feeds'                 => true,
	);
	$args = array(
		'label'                 => __( 'Evento', 'Eventos' ),
		'description'           => __( 'Post Type Description', 'Eventos' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'thumbnail', 'comments' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-admin-settings',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'rewrite'               => $rewrite,
		'capability_type'       => 'page',
	);
	register_post_type( 'Eventos', $args );

}
add_action( 'init', 'Eventos', 0 );

}
