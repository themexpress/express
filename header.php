<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">

	<header class="banner" role="banner">
		<div class="container">
			<h1><a href="<?php echo home_url(); ?>/"><?php bloginfo('name'); ?></a></h1>
		</div>
	</header>

	<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
		<div class="container">
			<div class="searchbar collapse"><?php get_search_form() ?></div>
			<div class="navbar-header">
	      <a class="navbar-toggle" data-toggle="collapse" data-target=".mainnav">
	        <span class="sr-only">Toggle navigation</span>
	        <i class="fa fa-bars"></i>
	      </a>
	    </div>
			<ul class="nav navbar-nav navbar-right social-links">
				<?php $facebook = express_get_theme_option('facebook'); ?>
				<?php if($facebook) : ?>
				<li><a href="<?php echo $facebook; ?>"><i class="fa fa-facebook"></i></a></li>
				<?php endif; ?>
				<?php $twitter = express_get_theme_option('twitter'); ?>
				<?php if($twitter) : ?>
				<li><a href="<?php echo $twitter; ?>"><i class="fa fa-twitter"></i></a></li>
				<?php endif; ?>
				<?php $google_plus = express_get_theme_option('google-plus'); ?>
				<?php if($google_plus) : ?>
				<li><a href="<?php echo $google_plus; ?>"><i class="fa fa-google-plus"></i></a></li>
				<?php endif; ?>
				<li><a data-toggle="collapse" data-target=".searchbar"><i class="fa fa-search"></i></a></li>
			</ul>

			<?php
				if (has_nav_menu('primary')) :
					wp_nav_menu(array('theme_location' => 'primary', 'menu_class' => 'nav navbar-nav collapse navbar-collapse mainnav'));
				endif;
			?>
		</div>
	</nav>