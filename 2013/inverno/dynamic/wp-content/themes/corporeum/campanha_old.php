<?php 
/*
Template name: Campanha
*/
?>
<?php get_header(); ?>
	<div id="body">
<?php 	while( have_posts() ) : the_post(); ?>
		<article id="content" class="hentry">
			<h1 class="entry-title"><span></span><?php the_title(); ?></h1>
            <a class="bt_voltar" href="">&lsaquo; Voltar</a>
			<div class="entry-content">
				<ul class="campanha-list slider">
<?php 				$images = get_field( 'gallery' );
					foreach( $images as $img ) : ?>
					<li class="campanha-item"><?php echo wp_get_attachment_image( $img['id'], 'campanha' ); ?></li>
<?php 				endforeach; ?>
				</ul>
			</div>
		</article>
<?php 	endwhile; ?>
	</div>
<?php get_footer(); ?>