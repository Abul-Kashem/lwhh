<?php


/*
Plugin Name: Philosophy-Companion
Plugin URI:
Description: Companion plugin for the philosophy theme
Version: 1.0
Author: LWHH
Author URI:
License: GPLv2 or Later
Text Domain: philosophy_companion

*/

//echo "Hello World";


/**
 * Post Type: Books.
 */


/*
function philosophy_companion_register_my_cpts_book() {


	$labels = array(
		"name" => __( "Books", "philosophy" ),
		"singular_name" => __( "Book", "philosophy" ),
		"all_items" => __( "My Books", "philosophy" ),
		"featured_image" => __( "Book Cover", "philosophy" ),
	);

	$args = array(
		"label" => __( "Books", "philosophy" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => "notes",
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "note", "with_front" => false ),
		"query_var" => true,
		"menu_position" => 6,
		"menu_icon" => "dashicons-book",
		"supports" => array( "title", "editor", "thumbnail", "excerpt", "page-attributes" ),
	);

	register_post_type( "book", $args );
}

add_action( 'init', 'philosophy_companion_register_my_cpts_book' );*/


// Register Custom Post Type Book
// Post Type Key: book
function create_book_cpt() {

	$labels = array(
		'name'                  => __( 'Books', 'Post Type General Name', 'philosophy' ),
		'singular_name'         => __( 'Book', 'Post Type Singular Name', 'philosophy' ),
		'menu_name'             => __( 'Books', 'philosophy' ),
		'name_admin_bar'        => __( 'Book', 'philosophy' ),
		'archives'              => __( 'Book Archives', 'philosophy' ),
		'attributes'            => __( 'Book Attributes', 'philosophy' ),
		'parent_item_colon'     => __( 'Parent Book:', 'philosophy' ),
		'all_items'             => __( 'All Books', 'philosophy' ),
		'add_new_item'          => __( 'Add New Book', 'philosophy' ),
		'add_new'               => __( 'Add New', 'philosophy' ),
		'new_item'              => __( 'New Book', 'philosophy' ),
		'edit_item'             => __( 'Edit Book', 'philosophy' ),
		'update_item'           => __( 'Update Book', 'philosophy' ),
		'view_item'             => __( 'View Book', 'philosophy' ),
		'view_items'            => __( 'View Books', 'philosophy' ),
		'search_items'          => __( 'Search Book', 'philosophy' ),
		'not_found'             => __( 'Not found', 'philosophy' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'philosophy' ),
		'featured_image'        => __( 'Featured Image', 'philosophy' ),
		'set_featured_image'    => __( 'Set featured image', 'philosophy' ),
		'remove_featured_image' => __( 'Remove featured image', 'philosophy' ),
		'use_featured_image'    => __( 'Use as featured image', 'philosophy' ),
		'insert_into_item'      => __( 'Insert into Book', 'philosophy' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Book', 'philosophy' ),
		'items_list'            => __( 'Books list', 'philosophy' ),
		'items_list_navigation' => __( 'Books list navigation', 'philosophy' ),
		'filter_items_list'     => __( 'Filter Books list', 'philosophy' ),
	);
	$args   = array(
		'label'               => __( 'Book', 'philosophy' ),
		'description'         => __( '', 'philosophy' ),
		'labels'              => $labels,
		'menu_icon'           => 'dashicons-category',
		'supports'            => array( 'title', 'editor', 'excerpt', 'thumbnail', ),
		'taxonomies'          => array(),
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 5,
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => 'books',
		'hierarchical'        => false,
		'exclude_from_search' => false,
		'show_in_rest'        => true,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
		'rewrite'             => array(
			'with_front' => false,
		)
	);
	register_post_type( 'book', $args );

}

add_action( 'init', 'create_book_cpt', 0 );
