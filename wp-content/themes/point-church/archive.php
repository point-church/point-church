<?php get_header(); ?>



<?php if ( have_posts() ) : ?>

<?php include('page-header.php'); ?>
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