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
<section id="campus-events" class="photo">
	<div class="wrapper">
		<h3 class="section-head">Upcoming Events</h3>

		<?php
		$events = new WP_Query( array( 'post_type' => 'events', 'order' => 'ASC'));

		if ( $events->have_posts() ) : ?>

		

		<?php while ( $events->have_posts() ) : $events->the_post(); ?>


		<?php if( in_array('college', get_field('campus_involvment'))): ?>
			
		<div class="event">
			<a class="event-image" style="background-image: url('<?php the_field('event_thumbnail'); ?>');" href="<?php echo get_the_permalink(); ?>" />
				<span class="short-description"><?php the_field('short_description'); ?></span>
			</a>
		</div>
	<?php else: ?>

		<?php endif; ?>
		<?php endwhile; ?>
	<!-- end of the loop -->

	<!-- pagination here -->

	<?php wp_reset_postdata(); ?>
<?php endif; ?>
	</div>
</section>
<?php else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>




<?php get_footer(); ?>