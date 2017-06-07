<?php get_header(); ?>

<?php

    $newsArgs = array(
        'post_type' => 'post',
        'posts_per_page' => 10
    );

    $eventsArgs = array(
        'post_type' => 'events',
        'posts_per_page' => 10
    );

    $eventsQuery = new WP_Query($eventsArgs);
    $newsQuery = new WP_Query($newsArgs);
?>



<div class="page-header" style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>);">
	<div class="header-filter"></div>
	<div class="wrapper">
		<h2 class="page-title"><?php the_title(); ?></h2>
	</div>
</div>

<section>

<div class="wrapper">

    <section class="news">

            <?php if ( $newsQuery->have_posts() ) : while ( $newsQuery->have_posts() ) : $newsQuery->the_post(); ?>
            <div class="news__post">
                <a href="<?php the_permalink(); ?>"><h4><strong><?php the_title(); ?></strong></h4></a>
                <p class="meta"><?php the_date(); ?></p>
                <?php the_excerpt(); ?>
            </div>

            <?php endwhile; wp_reset_postdata(); endif; ?>

    </section>

    <section class="events">

            <h4><strong>Upcoming Events</strong></h4>

            <form>
                <fieldset>
                    <select>
                        <option>All Church</option>
                        <option>Apex</option>
                        <option>Cary</option>
                        <option>Español</option>
                        <option>N. Raleigh</option>
                        <option>S. Raleigh</option>
                    </select>
                </fieldset>
            </form>

            <?php if ( $eventsQuery->have_posts() ) : while ( $eventsQuery->have_posts() ) : $eventsQuery->the_post(); ?>

                <div style="margin-bottom: 1em;">
                    <a href="<?php the_permalink(); ?>">
                        <img src="<?php the_field('event_thumbnail'); ?>" alt="<?php the_title(); ?>" />
                    </a>
                </div>

            <?php endwhile; wp_reset_postdata(); endif; ?>

    </section>

</div>
</section>

<?php get_footer(); ?>