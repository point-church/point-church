<?php get_header(); ?>

<?php

    $eventsArgs = array(
        'post_type' => 'events',
        'posts_per_page' => 10
    );

    $eventsQuery = new WP_Query($eventsArgs);

    $churchesArgs = array(
        'post_type' => 'locations',
        'posts_per_page' => -1
    );

    $churchesQuery = new WP_Query($churchesArgs);
    $churchesArr = [];

     if ( $churchesQuery->have_posts() ) {
    	while ( $churchesQuery->have_posts() ) {
    		$churchesQuery->the_post();
            $church = [
                'name' => get_the_title()
            ];
            array_push($churchesArr, $church);
    	}
    	/* Restore original Post Data */
    	wp_reset_postdata();
    } else {
    	
    }
?>

<div class="page-header" style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>);">
	<div class="header-filter"></div>
	<div class="wrapper">
		<h2 class="page-title"><?php the_title(); ?></h2>
	</div>
</div>

<section>
    <div class="wrapper">
        <?php 
            $featuredArr = [];

            if ( $eventsQuery->have_posts() ) {
            	while ( $eventsQuery->have_posts() ) {
            		$eventsQuery->the_post();
                    $event = [
                        'title' => get_the_title(),
                        'url' => get_the_permalink(),
                    ];
                    array_push($featuredArr, $event);
            	}
            	/* Restore original Post Data */
            	wp_reset_postdata();
            } else {
            	// no posts found
            } 
        ?>
        <div id="events-app">
            <router-view></router-view>
        </div>
    </div>
</section>
    
    <?php include('includes/ccb-api.php'); ?>
    <script src="https://unpkg.com/vue@2.1.10/dist/vue.js"></script>
    <script src="https://unpkg.com/vue-router/dist/vue-router.js"></script>
    <script>var churches = <?php echo json_encode($churchesArr); ?>;</script>
    <script>var featuredEvents = <?php echo json_encode($featuredArr); ?>;</script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/events.js"></script>



<?php get_footer(); ?>