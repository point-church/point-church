<?php 
/*Template Name: Campus Template */

get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<section id="campus-intro" class="photo promo" data-photo="<?php bloginfo('stylesheet_directory');?>/images/home-intro-bg.jpg">
	<div class="wrapper">
		<h2 class="campus-title"><?php the_title(); ?></h2>
	</div>
</section>

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

<section id="campus-sermon" class="photo">
	<div class="wrapper">
		<h3 class="section-head">This Week's Sermon</h3>
		<?php the_field('this_weeks_sermon_text'); ?>		
		<?php /*<div class="audio"></div>
	<!--	<audio controls>
			<source src="<?php echo bloginfo('stylesheet_directory'); ?>/audio/20150531.mp3" type="audio/mpeg">

  Your browser does not support the audio tag.
		</audio>-->*/?>
		<div class="buttons">
			<a href="#" class="button">Listen to More Sermons</a>
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
			<a class="button" href="#">More questions? Contact us at info@pointchurch.com</a>
		</div>
	</div>
</section>

<section id="campus-events" class="photo">
	<div class="wrapper">
		<h3 class="section-head">Upcoming Events</h3>

		<? $events = new WP_Query( array( 'post_type' => 'events' ));

		if ( $events->have_posts() ) : ?>

		

		<?php while ( $events->have_posts() ) : $events->the_post(); ?>
			
		<div class="event">
			<a class="event-image" style="background-image: url('<?php the_field('event_thumbnail'); ?>');" href="<?php echo get_the_permalink(); ?>" />
				<span class="short-description"><?php the_field('short_description'); ?></span>
			</a>
			<dl>
				<dt class="event-title"><a href="<?php echo get_the_permalink(); ?>"><?php the_title(); ?></a></dt>
				<dd class="event-date"><?php the_field('event_date'); ?></dd>
				<dd class="event-time"><?php the_field('event_time'); ?></dd>
			</dl>
		</div>
		<?php endwhile; ?>
	<!-- end of the loop -->

	<!-- pagination here -->

	<?php wp_reset_postdata(); ?>

<?php else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
		<div class="buttons">
			<a href="<?php echo bloginfo('url'); ?>/events" class="button">See more events at <?php the_title(); ?></a>
		</div>
	</div>
</section>

<section id="campus-staff">
	<div class="wrapper">
		<h3 class="section-head">The Staff @ <?php the_title(); ?></h3>
		<ul class="staff-list">
			<li class="chris-hankins">
				<dl>
					<img src="<?php echo bloginfo('stylesheet_directory'); ?>/images/staff/chris-hankins.jpg" />
					<dt>Chris Hankins</dt>
					<dd>Lead Pastor</dd>
				</dl>
			</li>
			<li class="sam-loveall">
				<dl>
					<img src="<?php echo bloginfo('stylesheet_directory'); ?>/images/staff/sam-loveall.jpg" />
					<dt>Sam Loveall</dt>
					<dd>Campus Pastor</dd>
				</dl>
			</li>
			<li class="jay-cook">
				<dl>
					<img src="<?php echo bloginfo('stylesheet_directory'); ?>/images/staff/jay-cook.jpg" />
					<dt>Jay Cook</dt>
					<dd>Assistant Campus Pastor</dd>
				</dl>
			</li>
			<li class="micah-brown">
				<dl>
					<img src="<?php echo bloginfo('stylesheet_directory'); ?>/images/staff/chris-hankins.jpg" />
					<dt>Micah Brown</dt>
					<dd>Worship Pastor</dd>
				</dl>
			</li>	
		</ul>
	</div>
</section>

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
</section>


<?php endwhile; else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>


<?php get_footer(); ?>