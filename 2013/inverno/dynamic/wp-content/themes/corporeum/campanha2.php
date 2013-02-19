<?php 
/*
Template name: Campanha 2
*/
?>
<?php get_header(); ?>
	<div id="body">
<?php 	while( have_posts() ) : the_post(); ?>
		<article id="content" class="hentry">
			<h1 class="entry-title"><span></span><?php the_title(); ?></h1>
            <a class="bt_voltar" href="">&lsaquo; Voltar</a>
			<div class="entry-content">
				<?php the_content(); ?>
			</div>
		</article>
<?php 	endwhile; ?>
	</div>
<?php get_footer(); ?>