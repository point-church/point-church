<!DOCTYPE html>
<html>
<head>
	<title><?php bloginfo('name'); ?></title>
	<link type="text/css" rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/style.css" />
	<link type="text/css" rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/stylesheets/screen.css" />
</head>

<?php if(is_home()){ $type = 'home'; } else{ $type = get_post_type(); } ?>

<body class="<?php echo $type; ?>">
	<?php 
		if(is_home() || is_singular('locations') ){ 
			$navstate = '';
		}else{ 
			$navstate = 'opaque'; 
		} ?>
	<header class="<?php echo $navstate; ?>">
		<a href="<?php bloginfo('url'); ?>"><h1><?php bloginfo('name'); ?></h1></a>

		

		<nav>
			<?php wp_nav_menu(array('menu' => 'global_nav' )); ?>
		</nav>
	</header>

