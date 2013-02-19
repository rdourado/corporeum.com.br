<?php 

$t_url = get_template_directory_uri();

function t_url() {
	global $t_url;
	echo $t_url;
}

/* Setup */

add_action( 'after_setup_theme', 'my_setup' );
add_action( 'admin_menu', 'remove_menus' );
add_filter( 'acf_options_page_title', 'my_acf_options_page_title' );

function my_setup() {
	register_nav_menu( 'menu', 'Menu' );
	set_post_thumbnail_size( 230, 215, true );
	add_image_size( 'campanha', 842, 543, false );
	add_image_size( 'lookbook', 270, 446, true );
	add_image_size( 'gallery', 207, 326, true );
	add_image_size( 'clipping', 300, 435, true );
}

function remove_menus() {
global $menu;
	$restricted = array( __('Posts'), __('Tools'), __('Comments') );
	end( $menu );
	while( prev( $menu ) ) {
		$value = explode( ' ', $menu[key( $menu )][0] );
		if ( in_array( $value[0] != NULL ? $value[0] : "" , $restricted ) )
			unset( $menu[key( $menu )] );
	}
}

function my_acf_options_page_title( $title ) {
	return 'Redes Sociais';
}

/* Scripts */

add_action( 'wp_enqueue_scripts', 'my_scripts' );

function my_scripts() {
	$uri = get_stylesheet_directory_uri();

	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js', array(), false, true );
	wp_enqueue_script( 'jquery' );
	
	wp_enqueue_script( 'fancybox', "{$uri}/js/fancybox/jquery.fancybox-1.3.4.pack.js", array( 'jquery' ), null, true );
	wp_enqueue_script( 'easypaginate', "{$uri}/js/easypaginate/easypaginate.min.js", array( 'jquery' ), null, true );
	wp_enqueue_script( 'easing', "{$uri}/js/jquery.easing.1.3.js", array( 'jquery' ), null, true );
	wp_enqueue_script( 'mask', "{$uri}/js/jquery.mask.js", array( 'jquery' ), null, true );
	wp_enqueue_script( 'interface', "{$uri}/js/interface.js", array( 'jquery' ), null, true );
}
