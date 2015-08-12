<?php
/* Template Name: Landing Page */
get_header(); ?>

<?php if ( have_posts() ) : ?>

<div class="page-header" style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>);">
	<div class="header-filter"></div>
	<div class="wrapper">
		<h2 class="page-title"><?php the_title(); ?></h2>
	</div>
</div>

<div class="breadcrumbs sub-title" xmlns:v="http://rdf.data-vocabulary.org/#">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
</div>

<?php 

	$currentPost = 1;
while ( have_posts() ) : the_post(); ?>

	<?php 
	$parentID = $post->ID;
	$subpages = new WP_Query(array('orderby' => 'menu_order', 'order' => 'ASC', 'post_parent' => $parentID, 'post_type' => 'page'));
	$count = $subpages -> found_posts;
	if( $count % 3 == 0 ){
		$columnCount = 'three-by';
	}elseif ( $count %2 == 0){
		$columnCount = 'two-by';
	}elseif( $count % 5 == 0){
		$columnCount = 5;
	}elseif( $count %7 == 0){
		$columnCount = 7;
	}else{
		$columnCount = 'three-by';
	}

	if( $subpages -> have_posts()){

		if(get_field('featured_video') != null){
			echo '<div class="featured-video"><iframe src="//player.vimeo.com/video/'.get_field('featured_video').'" width="650" height="370" frameborder="0"></iframe></div>';
		}

		echo '<section class="tiles">';

		while ( $subpages -> have_posts() ){
			$subpages->the_post();

			if($columnCount == 5 && $currentPost < 4){
				$tileWidth = 'three-by';
			}elseif($columnCount == 5 && $currentPost > 3){
				$tileWidth = 'two-by';
			}elseif($columnCount == 7 && $currentPost < 4){
				$tileWidth = 'three-by';
			}elseif($columnCount == 7 && $currentPost < 6){
				$tileWidth = 'two-by';
			}elseif($columnCount == 7 && $currentPost > 5){
				$tileWidth = 'three-by';
			}else{
				$tileWidth = $columnCount;
			}

			echo '<a href="'.get_the_permalink().'" />';
			echo '<div class="tile '.$tileWidth.'" style="background-image: url('.wp_get_attachment_url( get_post_thumbnail_id($post->ID)).');">';
			echo '<div class="tile-filter"></div>';
			echo '<h3>'.get_the_title().'</h3>';
			echo '</div>';
			echo '</a>';

			$currentPost++;
		}

		echo '</section>';
	}else{

	}
	?>


<?php endwhile; ?>
	</div>
</section>
<?php else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>


<?php get_footer(); ?>