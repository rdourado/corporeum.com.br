<!doctype html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title><?php wp_title(); ?></title>
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri() . '?' . filemtime( TEMPLATEPATH . '/style.css' ); ?>" media="screen">
	<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	<!-- WP/ --><?php wp_head(); ?><!-- /WP -->
</head>
<body <?php body_class(); ?>>
	<header id="head">
		<h1 id="logo"><a href="<?php echo home_url( '/' ); 
		?>"><img src="<?php t_url(); ?>/img/logo.png" alt="C.Blog by Corporeum" width="306" height="102"></a></h1>
	</header>
	<div id="body">
		<div id="banners">
<?php 
			global $wpdb;
			$sql = "SELECT `guid` 
					  FROM `{$wpdb->posts}`,`{$wpdb->postmeta}` 
					 WHERE `ID` = `post_id` 
					   AND `meta_key` = '_wp_attachment_is_custom_header' 
					   AND `meta_value` = 'corporeum-blog'";
			$results = $wpdb->get_col( $sql );
			foreach( $results as $img )
				echo '<img src="' . $img . '" alt="" class="banner" width="905" height="246">';
?>
		</div>
		<div id="content">
<?php 		while( have_posts() ) : the_post(); ?>
			<article <?php post_class( 'cf' ); ?>>
				<header class="entry-header">
					<time datetime="<?php the_time( 'Y-m-d' ); ?>" class="entry-date"><?php the_time( 'd M' ); ?></time>
					<h2 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
				</header>
				<div class="entry-content">
<?php 				the_content(); ?>
				</div>
				<footer class="entry-meta">
					<a href="<?php echo comments_link(); ?>" class="comments-link">Comentários (<?php echo comments_number( '0', '1', '%' ); ?>)</a>
				</footer>
			</article>
<?php 		comments_template();
			endwhile;
			if ( function_exists( 'wp_pagenavi' ) ) wp_pagenavi(); ?>
		</div>
		<div id="widgets">
<?php 		dynamic_sidebar(); ?>
		</div>
	</div>
	<footer id="foot">
		<a href="http://mgstudio.com.br/" id="mg" target="_blank">by MG Studio</a>
	</footer>
	<!-- WP/ --><?php wp_footer(); ?><!-- /WP -->
</body>
</html>