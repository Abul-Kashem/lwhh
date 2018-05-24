<?php

if (site_url() == "http://localhost:85/lwhh"){
	define("VERSION", microtime(true));
}else{
	define("VERSION", wp_get_theme()->get("Version"));
}
//echo VERSION;
//die();

function alpha_theme_setup() {
	load_theme_textdomain( "alpha" );
	add_theme_support( "post-thumbnails" );
	add_theme_support( "title-tag" );
	register_nav_menu( "topmenu", __( "Top Menu", "alpha" ) );
	register_nav_menu( "footermenu", __( "Footer Menu", "alpha" ) );
}

add_action( 'after_setup_theme', 'alpha_theme_setup' );

function alpha_assets() {
	wp_enqueue_style( "bootstrap", "//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css", array(), '1.0' );
	wp_enqueue_style( "featherlight", "//cdn.rawgit.com/noelboss/featherlight/1.7.13/release/featherlight.min.css", array(), '1.0' );
	wp_enqueue_style( "alpha", get_stylesheet_uri(), null, VERSION );


	wp_enqueue_script( "featherlight-js", "//cdn.rawgit.com/noelboss/featherlight/1.7.13/release/featherlight.min.js", array( "jquery" ), "1.0.0", true );
	wp_enqueue_script( "main-js", get_theme_file_uri() . "/assets/js/main.js", array( "jquery"), VERSION, true );
}

add_action( "wp_enqueue_scripts", "alpha_assets" );


function alpha_sidebar() {
	register_sidebar(
		array(
			'name'          => __( 'Single Post Sidebar', 'alpha' ),
			'id'            => 'sidebar-1',
			'description'   => __( 'Right Sidebar', 'alpha' ),
			'before_widget' => '<section id="%1$s%" class="widget %2$s%">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => __( 'Footer Left', 'alpha' ),
			'id'            => 'footer-left',
			'description'   => __( 'Footer Left Sidebar', 'alpha' ),
			'before_widget' => '<section id="%1$s%" class="widget %2$s%">',
			'after_widget'  => '</section>',
			'before_title'  => '',
			'after_title'   => '',
		)
	);
	register_sidebar(
		array(
			'name'          => __( 'Footer Right', 'alpha' ),
			'id'            => 'footer-right',
			'description'   => __( 'Footer Right Sidebar', 'alpha' ),
			'before_widget' => '<section id="%1$s%" class="widget %2$s%">',
			'after_widget'  => '</section>',
			'before_title'  => '',
			'after_title'   => '',
		)
	);
}

add_action( "widgets_init", "alpha_sidebar" );

//Filter Hook


function alpha_the_excerpt( $excerpt ) {
	if ( post_password_required() ) {
		echo get_the_password_form();
	} else {
		return $excerpt;
	}
}

add_filter( "the_excerpt", "alpha_the_excerpt" );


function alpha_protected_title_change() {
	return "%s";
}

add_filter( "protected_title_format", "alpha_protected_title_change" );

function alpha_menu_item_classes( $classes, $item ) {
	$classes[] = "list-inline-item";

	return $classes;
}

add_filter( "nav_menu_css_class", "alpha_menu_item_classes", 10, 2 );