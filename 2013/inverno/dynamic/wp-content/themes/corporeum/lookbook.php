<?php 
/*
Template name: Lookbook
*/
?>
<?php get_header(); ?>
	<div id="body">
<?php 	while( have_posts() ) : the_post(); ?>
		<article id="content" class="hentry">
			<h1 class="entry-title"><span></span><?php the_title(); ?></h1>
            <a class="bt_voltar" href="">&lsaquo; Voltar</a>
			<div class="entry-content">
				<ul class="lookbook-list slider" data-show="3">
<?php 				$url = get_permalink( get_the_ID() );
					$images = get_field( 'gallery' );
					foreach( $images as $i => $img ) : ?>
					<li class="look-item">
						<a href="<?php echo $img['sizes']['large']; ?>"><?php echo wp_get_attachment_image( $img['id'], 'lookbook' ); ?><span></span></a>
						<div class="info">
							<em><?php 
								echo '<span>' . str_replace( "\n", '</span><span>', $img['description'] ) . '</span>'; 
							?></em>
							<a href="<?php 
							echo 'http://www.facebook.com/sharer.php?u=' . urlencode("{$url}?p={$i}") . '&amp;t=Corporeum'; 
							?>" target="_blank"><img src="<?php t_url(); ?>/img/facebook_look.gif" alt="Facebook" class="ignore" width="20" height="20"></a>
						</div>
						<!-- fim DIV -->
					</li>
<?php 				endforeach; ?>
				</ul>
			</div>
		</article>
<?php 	endwhile; ?>
	</div>
<?php get_footer(); ?>