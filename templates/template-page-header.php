

	<section class="page-header" style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>);">
	
		<div class="header-filter"></div>
	<div class="wrapper">
		<h2 class="page-title"><?php the_title(); ?></h2>
	</div>
	

</section>

<div class="breadcrumbs sub-title" xmlns:v="http://rdf.data-vocabulary.org/#">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
</div>

