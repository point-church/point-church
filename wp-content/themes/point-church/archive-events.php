<?php get_header(); ?>



<?php if ( have_posts() ) : ?>

<div class="page-header" style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>);">
	<div class="header-filter"></div>
	<div class="wrapper">
		<h2 class="page-title">Events</h2>
	</div>
</div>
<div class="breadcrumbs sub-title" xmlns:v="http://rdf.data-vocabulary.org/#">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
</div>


<?php while ( have_posts() ) : the_post(); ?>


		<?php
		
		$campuses = '';

		foreach( get_field('campus_involvment') as $campus ){
			$campuses .= ucwords($campus . '<br/> ');
		}
		?>

		<div class="events-archive list-item">
			<a href="<?php echo esc_url( get_the_permalink() ); ?>">
				<img src="<?php echo esc_url( get_field('event_thumbnail')); ?>" alt="<?php esc_html( the_title() ); ?>"/>
				<span><?php echo esc_html( get_field('short_description') ); ?><strong class="event-header">Campus:</strong><?php echo $campuses; ?></span>
			</a>
			
		</div>


<?php endwhile; ?>
	</div>
</section>
<?php else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

<?php get_footer(); ?>