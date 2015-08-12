<?php get_header(); ?>


<section id="campus-intro" class="standard-header" data-photo="<?php bloginfo('stylesheet_directory');?>/images/home-intro-bg.jpg">
	<div class="wrapper">

	<h2 class="campus-title"><?php the_title(); ?></h2>
	</div>
	<p class="tagline"><?php the_field('tagline'); ?></p>
</section>
<section class="list">
	<div class="wrapper">
	</div>
</section>


<?php get_footer(); ?>