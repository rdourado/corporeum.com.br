<?php 
/*
Template name: Making Of
*/
?>
<?php get_header(); ?>
	<div id="body">
<?php 	while( have_posts() ) : the_post(); ?>
		<article id="content" class="hentry">
			<h1 class="entry-title"><?php the_title(); ?></h1>
			<div class="entry-content">
				<ul class="campanha-list slider" data-show="1">
<?php 				$url = get_permalink( get_the_ID() );
					$images = get_field( 'gallery' );
					foreach( $images as $i => $img ) : ?>
					<li class="campanha-item">
						<a href="<?php echo $img['sizes']['large']; ?>"><?php echo wp_get_attachment_image( $img['id'], 'makingof' ); ?><span></span></a>
					</li>
<?php 				endforeach; ?>
				</ul>
			</div>
		</article>
<?php 	endwhile; ?>
	</div>
<?php get_footer(); ?>