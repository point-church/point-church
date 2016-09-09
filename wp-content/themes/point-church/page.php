<?php get_header(); ?>

<?php if ( have_posts() ) : ?>

<?php include('page-header.php'); ?>
	
	<?php	if(get_field('featured_video') != null){
			echo '<div class="featured-video"><iframe src="//player.vimeo.com/video/'.get_field('featured_video').'" width="650" height="370" frameborder="0"></iframe></div>';
		} ?>
		<section>
	<div class="wrapper">

<?php while ( have_posts() ) : the_post(); ?>

		<?php the_content(); ?>


<?php endwhile; ?>
	</div>
</section>
<?php else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>


<?php get_footer(); ?>