<?php /* Template Name: Campus Template */ ?>

<?php get_header(); ?>

<?php if ( have_posts() ) : ?>

<?php include('template-page-header.php'); ?>

<?php while ( have_posts() ) : the_post(); ?>

<section id="campus-welcome">
	<div class="wrapper">
		<?php if(get_field('vimeo_id') != null ){
			echo '<div class="video">';
			echo '<iframe src="https://player.vimeo.com/video/'.get_field('vimeo_id').'?title=0&badge=0&byline=0&portrait=0" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen ></iframe>';
			echo '</div>';
		}
		?>
		<?php the_field('welcome_text'); ?>
	</div>
</section>

<?php
	if( get_field('sermons_link') != null){
		$sermonURL = get_field('sermons_link');
	}else{
		$sermonURL = 'http://pointchurchsermons.com';
	}
?>

<section id="campus-sermon" class="photo teaching" style="background-image: url('<?php the_field('this_weeks_sermon_image'); ?>');">
	<div class="image-filter"></div>
	<div class="wrapper">
		<h3 class="section-head">Teaching</h3>
		<?php the_field('this_weeks_sermon_text'); ?>		
		<!--<div class="audio"></div>-->
	<!--	<audio controls>
			<source src="<?php echo bloginfo('stylesheet_directory'); ?>/audio/20150531.mp3" type="audio/mpeg">

  Your browser does not support the audio tag.
		</audio>-->
		<div class="buttons">
			<a href="<?php echo esc_url( $sermonURL ); ?>" class="button">Listen to Sermons</a>
		</div>
	</div>
</section>

<section id="campus-visit">
	<div class="wrapper">
		<h3 class="section-head">Plan a Visit</h3>
		<div class="map-info">
			<div id="map-canvas" class="campus-map" data-lat="<?php the_field('latitude_for_map'); ?>" data-lng="<?php the_field('longitude_for_map'); ?>"></div>
			<div class="location-info">
				<p class="location"><?php the_field('location_address'); ?></p>
				<p class="times"><?php the_field('service_times'); ?></p>
			</div>
		</div>
		<div class="visit-questions">
			
			<div class="question">
				<h4 class="question-title when"><span></span>When do I get there?</h4>
				<?php the_field('when_do_i_get_there'); ?>	
			</div>
			<div class="question">
				<h4 class="question-title park"><span></span>Where do I park?</h4>
				<?php the_field('where_do_i_park'); ?>	
			</div>
			<div class="question">
				<h4 class="question-title wear"><span></span>What should I wear?</h4>
				<?php the_field('what_should_i_wear'); ?>	
			</div>
			<div class="question">
				<h4 class="question-title kids"><span></span>What do I do with my kids?</h4>
				<?php the_field('what_do_i_do_with_my_kids'); ?>	
			</div>
		</div>
		<div class="buttons">
			<a class="button" href="mailto:info@pointchurch.com">More questions? Contact us at info@pointchurch.com</a>
		</div>
	</div>
</section>

<section id="campus-events" class="photo">
	<div class="wrapper">
		<h3 class="section-head">Upcoming Events</h3>

		<?php

		$campusname = strtolower(get_the_title()); 

		if($campusname == 'español'){ $campusname = 'espanol'; }
		
		if(strpos ( $campusname, 'north raleigh') !== false){ $campusname  = 'north raleigh'; }

		
		$events = new WP_Query( array( 'post_type' => 'events', 'order' => 'ASC'));

		if ( $events->have_posts() ) : ?>

		

		<?php while ( $events->have_posts() ) : $events->the_post(); ?>


		<?php if( in_array($campusname, get_field('campus_involvment'))): ?>
			
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

<?php else : ?>
	<p>There are currently no events scheduled for <?php echo $campusname; ?></p>

<?php endif; ?>
		<?php /*<div class="buttons">
			<a href="<?php echo bloginfo('url'); ?>/events" class="button">See more events at <?php the_title(); ?></a>
		</div>*/ ?>
	</div>
</section>

<section id="campus-staff">
	<div class="wrapper">
		<h3 class="section-head">The Staff @ <?php the_title(); ?></h3>
		<ul class="staff-list">
		<?php

		/*$staffList = get_field('featured_staff');
		foreach( $staffList as $staff ){
			echo '<li>' .
				'<dl>' .
					'<img src="' . get_field('profile_image', $staff->ID) . '" />' .
					'<dt>' . get_the_title($staff->ID) . '</dt>' .
					'<dd>' . get_field('title', $staff->ID) . '</dd>' .
				'</dl>' .
			'</li>';
		}*/
		?>
		</ul>
		
			
			
	</div>
</section>
<?php /*
<section id="campus-social" class="photo">
	<div class="wrapper">
		<h3 class="section-head">Connect with Us</h3>
		<div class="instagram">
			<img src="http://placehold.it/300x180" />
			<img src="http://placehold.it/300x180" />
			<img src="http://placehold.it/300x180" />
			<img src="http://placehold.it/300x180" />
			<img src="http://placehold.it/300x180" />
			<img src="http://placehold.it/300x180" />
			<img src="http://placehold.it/300x180" />
			<img src="http://placehold.it/300x180" />
			<img src="http://placehold.it/300x180" />
			<img src="http://placehold.it/300x180" />
			<img src="http://placehold.it/300x180" />
			<img src="http://placehold.it/300x180" />
			<img src="http://placehold.it/300x180" />
			<img src="http://placehold.it/300x180" />
			<img src="http://placehold.it/300x180" />
			<img src="http://placehold.it/300x180" />
			<img src="http://placehold.it/300x180" />
			<img src="http://placehold.it/300x180" />
		</div>
		<div class="buttons">
			<a href="#" class="button">Facebook</a>
			<a href="#" class="button">Instagram</a>
			<a href="#" class="button">Twitter</a>
		</div>
	</div>
</section> */?>


<?php endwhile; else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>


<?php get_footer(); ?>