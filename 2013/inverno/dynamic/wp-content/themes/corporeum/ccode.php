<?php 
/*
Template name: CCode
*/
?>
<?php get_header(); ?>
	<div id="body">
		<article id="content" class="hentry">
			<!--<h1 class="entry-title"><img src="<?php t_url(); ?>/img/ccode.png" alt="C. Code" width="281" height="56"></h1>-->
			<div class="entry-content">
				<ul class="image-menu">
<?php 				$pages = get_pages( 'sort_column=menu_order&sort_order=ASC&child_of=' . $post->ID );
					foreach( $pages as $page ) : ?>
					<li class="image-item"><a href="<?php echo get_permalink( $page ); ?>"><?php 
					echo get_the_post_thumbnail( $page->ID, 'post-thumbnail' ); ?><h1><?php echo get_the_title($page); ?></h1></a></li>
<?php 				endforeach; ?>
				</ul>
			</div>
		</article>
	</div>
<?php get_footer(); ?>