<?php /* Template Name: Launch Template */ ?>

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

<section id="campus-sermon" class="photo teaching" style="background-image: url('<?php the_field('this_weeks_sermon_image'); ?>');">
	<div class="image-filter"></div>
	<div class="wrapper">
		<h3 class="section-head">Teaching</h3>
		<?php
			if( get_field('sermon_link') != null){
				$sermonURL = get_field('sermon_link');
			}else{
				$sermonURL = 'http://pointchurchsermons.com';
			}
		?>
		<?php the_field('this_weeks_sermon_text'); ?>	
		<div class="buttons">
			<a href="<?php echo esc_url( $sermonURL ); ?>" class="button">Listen to Sermons</a>
		</div>
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