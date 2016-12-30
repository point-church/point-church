<?php get_header(); ?>



<?php if ( have_posts() ) : ?>

<div class="page-header" style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>);">
	<div class="header-filter"></div>
	<div class="wrapper">
		<h2 class="page-title">
				<?php the_archive_title(); ?>
		</h2>
	</div>
</div>
<div class="breadcrumbs sub-title" xmlns:v="http://rdf.data-vocabulary.org/#">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
</div>

<div class="post-list blog">
<?php while ( have_posts() ) : the_post(); ?>

		<div class="post-list-item">
			<h2 class="post-title"><a href="<?php echo get_the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<?php the_excerpt(); ?>
		</div>


<?php endwhile; ?>
</div>
	</div>
</section>
<?php else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

<?php get_footer(); ?>