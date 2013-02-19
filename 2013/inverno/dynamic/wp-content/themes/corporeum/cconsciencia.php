<?php 
/*
Template name: C.Consciência
*/
?>
<?php get_header(); ?>
	<div id="body">
<?php 	while( have_posts() ) : the_post(); ?>
		<article id="content" class="hentry">
			<h1 class="entry-title"><?php the_title(); ?></h1>
			<div class="entry-content">
				<?php the_content(); ?>
				<div class="box">
<?php 				if ( $images = get_field( 'box_gallery' ) ) : ?>
					<h2 class="box-title"><?php the_field( 'box_title' ); ?></h2>
					<ul class="box-list slider" data-show="3">
<?php 					foreach( $images as $img ) : ?>
						<li class="box-item"><a href="<?php echo $img['sizes']['large']; ?>" class="fancybox"><?php echo wp_get_attachment_image( $img['id'], 'gallery' ); ?><span></span></a></li>
<?php 					endforeach; ?>
					</ul>
<?php 				endif; ?>
				</div>
			</div>
		</article>
<?php 	endwhile; ?>
	</div>
<?php get_footer(); ?>