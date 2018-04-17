<?php

// Register Navigation Menus
function nadro_main_menu() {

	$locations = array(
		'Main Menu' => __( 'Main Menu', 'text_domain' ),
	);
	register_nav_menus( $locations );

}
add_action( 'init', 'nadro_main_menu' );


function cssandjs(){
	wp_enqueue_style( 'google-fonts', '//fonts.googleapis.com/css?family=Play|Russo+One');
	wp_enqueue_style( 'mdi', 'https://cdn.materialdesignicons.com/1.2.65/css/materialdesignicons.min.css');
	wp_enqueue_style( 'nadro', get_stylesheet_directory_uri() . '/style.css');
	// wp_register_script( 'bulma', get_stylesheet_directory_uri() . '/bulma/bulma.js', array( 'jquery' ), '', true);
	// wp_enqueue_script( 'bulma' );
}
	add_action( 'wp_enqueue_scripts', 'cssandjs' );