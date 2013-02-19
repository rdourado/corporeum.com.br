<?php 
/*
Template name: CClub
*/
?>
<?php get_header(); ?>
	<div id="body">
		<article id="content" class="hentry">
			<!--<h1 class="entry-title"><img src="<?php t_url(); ?>/img/cclub.png" alt="C Club" width="274" height="70"></h1>-->
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