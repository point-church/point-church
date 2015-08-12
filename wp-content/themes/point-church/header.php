<!DOCTYPE html>
<html>
<head>
	<!--testing git-->
	<script src="//use.typekit.net/wjo1hsm.js"></script>
	<script>try{Typekit.load({ async: true });}catch(e){}</script>
	<title><?php bloginfo('name'); ?></title>
	<link type="text/css" rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/style.css" />
	<link type="text/css" rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/stylesheets/screen.css" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--[if lt IE 9]>
    <script src="<?php echo get_template_directory_uri(); ?>/js/html5-shiv.min.js"></script>
	<![endif]-->
</head>
<?php

?>
<?php if(is_home()){ $type = 'home'; }elseif( is_page('mission-vision-values') || is_page('beliefs-baptism') || is_page('staff')){ $type = 'styled-page'; }elseif( $post->post_parent == '4'){ $type = 'locations'; }else{ $type = get_post_type(); } ?>

<body class="<?php echo $type; ?>">
	<!-- GA TRACKING -->
	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-66191935-1', 'auto');
  ga('send', 'pageview');

</script>
<!-- end GA -->

	<header>
		<a href="<?php bloginfo('url'); ?>"><h1><?php bloginfo('name'); ?></h1></a>

		

		<nav>
			<?php wp_nav_menu(array('menu' => 'global_nav' )); ?>
		</nav>
	</header>

