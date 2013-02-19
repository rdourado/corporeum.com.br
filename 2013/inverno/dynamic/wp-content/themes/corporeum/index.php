<?php 
/*
Template name: Home
*/
?>
<?php get_header(); ?>
	<div id="body">
		<ul id="network">
			<li class="network-item">
            	<a href="<?php echo get_permalink( 8 ); ?>">
                    <img src="<?php t_url(); ?>/img/home-corporeum.jpg" alt="Corporeum" width="216" height="126">
                </a>
            </li>
            <li class="network-item">
            	<a href="<?php echo get_permalink( 10 ); ?>">
                    <img src="<?php t_url(); ?>/img/home-cclub.jpg" alt="C.Club!" width="216" height="126">
                 </a>
            </li>
			<li class="network-item">
            	<a href="<?php echo get_permalink( 9 ); ?>">
                    <img src="<?php t_url(); ?>/img/home-ccode.jpg" alt="C.Code!" width="216" height="126">
                </a>
            </li>
            <li class="network-item">
            	<a href="#">
                    <img src="<?php t_url(); ?>/img/home-video.jpg" alt="Vídeos" width="216" height="126">
                </a>
            </li>
		</ul>
	</div>
<?php get_footer(); ?>