<?php

define( 'ATTACHMENTS_SETTINGS_SCREEN', false );
add_filter( 'attachments_default_instance', '__return_false' );


function alpha_attachments( $attachments ) {


	$fields = array(
		array(
			'name'    => 'title',                         // unique field name
			'type'    => 'text',                          // registered field type
			'label'   => __( 'Title', 'alpha' ),          // label to display
			'default' => 'title',                         // default value upon selection
		),

	);

	$args = array(

		// title of the meta box (string)
		'label'       => 'Featured Slider',

		// all post types to utilize (string|array)
		'post_type'   => array( 'post' ),


		// allowed file type(s) (array) (image|video|text|audio|application)
		'filetype'    => array( 'image' ),  // no filetype limit

		// include a note within the meta box (string)
		'note'        => 'Add Slider Images here!',


		// text for 'Attach' button in meta box (string)
		'button_text' => __( 'Attach Files', 'alpha' ),


		// fields array
		'fields'      => $fields,

	);

	$attachments->register( 'slider', $args ); // unique instance name
}

add_action( 'attachments_register', 'alpha_attachments' );


function alpha_testimonials_attachments( $attachments ) {
	$fields = array(
		array(
			'name'    => 'name',                         // unique field name
			'type'    => 'text',                          // registered field type
			'label'   => __( 'Name', 'alpha' ),          // label to display
			'default' => 'name',                         // default value upon selection
		),

		array(
			'name'  => 'position',                         // unique field name
			'type'  => 'text',                          // registered field type
			'label' => __( 'Position', 'alpha' ),          // label to display
		),
		array(
			'name'  => 'company',                         // unique field name
			'type'  => 'text',                          // registered field type
			'label' => __( 'Company Name', 'alpha' ),          // label to display
		),
		array(
			'name'  => 'description',                         // unique field name
			'type'  => 'textarea',                          // registered field type
			'label' => __( 'Description', 'alpha' ),          // label to display
		),

	);

	$args = array(

		'label'       => 'Testimonials',
		'post_type'   => array( 'page' ),
		'filetype'    => array( 'image' ),
		'note'        => 'Add Testimonails Images here!',
		'button_text' => __( 'Attach Files', 'alpha' ),

		'fields' => $fields,

	);

	$attachments->register( 'testimonials', $args ); // unique instance name
}

add_action( 'attachments_register', 'alpha_testimonials_attachments' );


function alpha_team_attachments( $attachments ) {
	$fields = array(
		array(
			'name'    => 'name',                         // unique field name
			'type'    => 'text',                          // registered field type
			'label'   => __( 'Name', 'alpha' ),          // label to display
			'default' => 'name',                         // default value upon selection
		),

		array(
			'name'  => 'position',                         // unique field name
			'type'  => 'text',                          // registered field type
			'label' => __( 'Position', 'alpha' ),          // label to display
		),
		array(
			'name'  => 'description',                         // unique field name
			'type'  => 'textarea',                          // registered field type
			'label' => __( 'Description', 'alpha' ),          // label to display
		),
		array(
			'name'  => 'email',                         // unique field name
			'type'  => 'text',                          // registered field type
			'label' => __( 'Email', 'alpha' ),          // label to display
		),


	);

	$args = array(

		'label'       => 'Team Members',
		'post_type'   => array( 'page' ),
		'filetype'    => array( 'image' ),
		'note'        => 'Add Team Member Images here!',
		'button_text' => __( 'Attach Files', 'alpha' ),

		'fields' => $fields,

	);

	$attachments->register( 'team', $args ); // unique instance name
}

add_action( 'attachments_register', 'alpha_team_attachments' );