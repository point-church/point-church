<?php get_header(); ?>



<?php if ( have_posts() ) : ?>

	<section id="campus-intro" class="standard-header" data-photo="<?php bloginfo('stylesheet_directory');?>/images/home-intro-bg.jpg">
	<div class="wrapper">
		<h2 class="campus-title"><?php echo post_type_archive_title(); ?></h2>

	</div>
	<p class="tagline">A Movement in Many Locations.</p>
</section>
<section>
	<div class="wrapper">
<?php while ( have_posts() ) : the_post(); ?>

		<div class="list-item">
			<h3 class="post-title"><a href="<?php echo get_the_permalink(); ?>"><?php the_title(); ?></a></h3>
			<?php the_excerpt(); ?>
		</div>


<?php endwhile; ?>
	</div>
</section>
<?php else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

<?php get_footer(); ?>