<?php 
/*
Template name: Clipping
*/
?>
<?php get_header(); ?>
	<div id="body">
<?php 	while( have_posts() ) : the_post(); ?>
		<article id="content" class="hentry">
			<h1 class="entry-title"><?php the_title(); ?></h1>
			<div class="entry-content">
				<ul class="clipping-list" data-show="3">
<?php 				$images = get_field( 'gallery' );
					foreach( $images as $img ) : ?>
					<li class="clip-item"><?php echo wp_get_attachment_image( $img['id'], 'clipping' ); ?></li>
<?php 				endforeach; ?>
				</ul>
			</div>
		</article>
<?php 	endwhile; ?>
	</div>
<?php get_footer(); ?>