<?php get_header(); ?>

<?php if ( have_posts() ) : ?>

<div class="page-header" style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>);">
	<div class="header-filter"></div>
	<div class="wrapper">
		<h2 class="page-title"><?php the_title(); ?></h2>
	</div>
</div>
<div class="breadcrumbs sub-title" xmlns:v="http://rdf.data-vocabulary.org/#">
  	
</div>


<?php while ( have_posts() ) : the_post(); ?>

	<section>

		<div class="wrapper">
		
			<div class="details">

					<?php //print_r(get_fields()); ?>

					<?php foreach(get_field('event_dates') as $date){
						//print_r($date);
						echo '<dl>';
						echo '<dt class="date">'.$date['event_date'].'</dt>';
						echo '<dd class="time">'.$date['event_time'].'</dd>';
						echo '<dd class="address">'.$date['event_address'].'</dd>';
						echo '</dl>';
					} ?>
					

			</div>

			<div class="content">

				<?php the_field('event_content'); ?>

				<p class="event-contact"><span>Have questions about this event?</span><br/> Contact <?php the_field('event_contact_name'); ?> at <a href="mailto:<?php the_field('event_contact_email'); ?>"><?php the_field('event_contact_email'); ?></a>.</p>

			</div>

		</div>

	</section>

<?php endwhile; endif; ?>

<?php get_footer(); ?>