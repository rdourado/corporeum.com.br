<!doctype html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title><?php wp_title(); ?></title>
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" media="screen">
	<link rel="stylesheet" href="<?php t_url(); ?>/js/fancybox/jquery.fancybox-1.3.4.css" media="screen">
	<link rel="stylesheet" href="<?php t_url(); ?>/js/easypaginate/easypaginate.style.css" media="screen">    
	<!--[if lte IE 9]><link rel="stylesheet" href="<?php t_url(); ?>/style_ie.css" media="screen"><![endif]-->
	<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	<!-- WP/ --><?php wp_head(); ?><!-- /WP -->
</head>
<body <?php body_class( "{$post->post_name} no-js" ); ?>>
	<header id="head">
<?php 	if ( is_home() ) : ?>
		<h1 id="logo"><img src="<?php t_url(); ?>/img/corporeum.png" alt="Corporeum" width="230" height="30"></h1>
<?php 	else : ?>
		<div id="logo"><a href="<?php echo home_url( '/' ); ?>"><img src="<?php t_url(); ?>/img/corporeum.png" alt="Corporeum" width="230" height="30"></a></div>
<?php 	endif; ?>
		
		<a href="#" id="radio" title="Rádio Corporeum" tabindex="-1" onclick="window.open('<?php t_url(); ?>/radio/radio.html', 'Radio', 'status=no, toolbar=no,location=no,directories=no,resisable=no,scrollbars=yes,top=10,left=10,width=295,height=58');"></a>
		
		<br class="clear">
		
		<a id="blog" title="C.Blog" target="_blank" href="http://www.corporeum.com.br/blog/">
			<img src="<?php t_url(); ?>/img/c-blog.png" alt="C.Blog" width="67" height="14">
		</a>
		
		<ul id="social">
			<li class="social-item"><a href="<?php the_field( 'instagram', 'options' ); ?>" target="_blank"><img src="<?php t_url(); ?>/img/icon-instagram.png" alt="Instagram" width="14" height="14"></a></li>
			<li class="social-item"><a href="<?php the_field( 'facebook', 'options' ); ?>" target="_blank"><img src="<?php t_url(); ?>/img/icon-facebook.png" alt="Facebook" width="14" height="14"></a></li>
		</ul>               
		
		<?php 
		wp_nav_menu( array(
			'container' 	=> 'nav',
			'container_id' 	=> 'nav',
			'menu_id' 		=> 'menu',
			'fallback_cb' 	=> false,
			'depth' 		=> 1,
		) ); 
		?>
	</header>
	<hr>
