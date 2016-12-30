<?php get_header(); ?>

<?php if ( have_posts() ) : ?>

<?php include('page-header.php'); ?>

<div class="blog post-list-item">
<?php while ( have_posts() ) : the_post(); ?>

	<p class="meta"><?php the_date(); ?>
		<?php if( strlen(get_field('byline')) > 3 ){
			echo ' - ';
			echo get_field('byline'); 
		}
		?>
	</p>

			<?php the_content(); ?>
	
			<div class="pagination">

				<?php if ( get_next_post() != '' ) { ?>
					<dl class="next-post">
						<dt>Next Post:</dt>
						<dd><?php next_post_link('%link'); ?></dd>
					</dl>
				<?php } ?>

				<?php if( get_previous_post() != '' ) { ?>
					<dl class="prev-post">
						<dt>Previous Post:</dt>
						<dd><?php previous_post_link('%link'); ?></dd>
					</dl>
				<?php } ?>
				
			</div>
<?php endwhile; ?>
</div>
	</div>
</section>
<?php else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

<?php get_footer(); ?>