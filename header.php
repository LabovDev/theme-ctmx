<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width" />
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
	<?php wp_head(); ?>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('url'); ?>/wp-content/themes/ctmx/css/reset.css" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('url'); ?>/wp-content/themes/ctmx/css/styles.css" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bungee|Open+Sans:400,700">
	<script type="text/javascript" src="<?php bloginfo('url'); ?>/wp-content/themes/ctmx/js/doubletaptogo.min.js"></script>
</head>

<body <?php body_class(); ?>>
	<div id="wrapper" class="hfeed">
	<header id="header" role="banner">
		<nav id="menu" role="navigation">
			<a href="#menu" class="burger" title="Show Navigation">Menu</a>
    	<a href="#" class="burger" title="Hide Navigation">Menu</a>
			<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
		</nav>
		<section id="branding">
			<a href="/"><img src="<?php bloginfo('url'); ?>/wp-content/themes/ctmx/img/continental-mixer-logo.png" alt="Continental Mixer"></a>
		</section>
		<div class="csthLink">
			<a href="/csth/"><img class="csthLink__img" src="<?php bloginfo('url'); ?>/wp-content/themes/ctmx/img/csth_pgTrn.jpg" alt="CSTH Company"></a>
		</div>
	</header>
	
	<div id="container">