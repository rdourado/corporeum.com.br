<?php 

/* Functions */

$t_url = get_stylesheet_directory_uri();

function t_url() {
	global $t_url;
	echo $t_url;
}

/* Header */

add_action( 'after_setup_theme', 'my_setup' );

function my_setup() {
	global $t_url;
	add_image_size( 'custom-header', 905, 246, true );
	add_theme_support( 'custom-header', array(
		'default-image'          => "{$t_url}/img/header-1.jpg",
		'random-default'         => true,
		'width'                  => 905,
		'height'                 => 246,
		'flex-height'            => false,
		'flex-width'             => false,
		'default-text-color'     => 'fff',
		'header-text'            => false,
		'uploads'                => true,
		'wp-head-callback'       => '',
		'admin-head-callback'    => '',
		'admin-preview-callback' => '',
	) );
}

/* Widgets */

add_action( 'widgets_init', 'my_widgets_init' );

function my_widgets_init() {
	register_sidebar( array(
		'name' 	=> 'Lateral',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' 	=> '</aside>',
		'before_title' 	=> '<h3 class="widget-title">',
		'after_title' 	=> '</h3>',
	) );
}

/* Scripts */

add_action( 'wp_enqueue_scripts', 'my_scripts' );

function my_scripts() {
	$uri = get_stylesheet_directory_uri();

	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js', array(), '1.8.3', true );
	wp_enqueue_script( 'jquery' );

	wp_enqueue_script( 'interface', "{$uri}/js/interface.js", array( 'jquery' ), filemtime( TEMPLATEPATH . '/js/interface.js' ), true );
}
