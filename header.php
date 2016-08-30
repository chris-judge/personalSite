<!DOCTYPE html>

<!--[if lt IE 7 ]> <html class="ie ie6 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 9]><!--><html ng-app='app' class="no-js" <?php language_attributes(); ?>><!--<![endif]-->

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	
	<?php // Force latest IE rendering engine and chrome fram ?>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	
	<?php if (is_search()) { ?><meta name="robots" content="noindex, nofollow" /> <?php } ?>

	<base href="<?php echo get_home_url(); ?>">
	
	<title>Christopher Judge // Web Developer</title>

	<link rel="apple-touch-icon" sizes="57x57" href="fav/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="fav/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="fav/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="fav/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="fav/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="fav/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="fav/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="fav/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="fav/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="fav/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="fav/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="fav/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="fav/favicon-16x16.png">
	<link rel="manifest" href="fav/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="fav/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
	
	<?php // Meta SEO Information ?>

	<?php if( have_rows('seo_default', 'option') ): ?>
    <?php while( have_rows('seo_default', 'option') ): the_row(); ?>
    	<meta name="fragment" content="!">
		<meta name="title" content="<?php the_sub_field('seo_title'); ?>">
		<meta name="description" content="<?php the_sub_field('seo_description'); ?>">
		<meta name="author" content="<?php the_sub_field('seo_author'); ?>">
	<?php endwhile; ?>
	<?php endif; ?>
	
	<?php // Mobile Friendly ?>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="HandheldFriendly" content="True">
	<meta name="MobileOptimized" content="320">

	<?php // More Meta ?>
	<?php if( have_rows('seo_default', 'option') ): ?>
    <?php while( have_rows('seo_default', 'option') ): the_row(); ?>
		<meta property="og:locale" content="en_US">
		<meta property="og:type" content="website">
		<meta property="og:title" content="<?php the_sub_field('seo_title'); ?>">
		<meta property="og:url" content="<?php echo get_the_permalink(); ?>">
		<meta property="og:site_name" content="<?php the_sub_field('seo_author'); ?>">
		<meta property="og:image" content="<?php the_sub_field('seo_image'); ?>">
		<meta name="twitter:card" content="summary">
		<meta name="twitter:title" content="<?php the_sub_field('seo_title'); ?>">
		<meta name="twitter:image" content="<?php the_sub_field('seo_image'); ?>">
	<?php endwhile; ?>
	<?php endif; ?>
	
	
	<?php // Pingback URL ?>
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<?php //Google Analytics Code here ?>
	<script>
	</script>

	<?php //Enqueue GF Scripts ?>
	<?php gravity_form_enqueue_scripts(2, true); ?>

	<?php //Font Awesome ?>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

	<?php //Bootstrap ?>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	
	<?php wp_head(); ?>
	
</head>

<body <?php body_class(); ?>>
	<div class="side-bar">
		<header>
			<div class="logo-wrap">
				<a href="<?php echo get_home_url(); ?>">
					<?php include('_/img/pro/logo.svg'); ?>
				</a>
			</div>
			<nav class="tar">
				<a href="<?php echo get_home_url(); ?>/work">Work</a>
				<a href="<?php echo get_home_url(); ?>/contact">Contact</a>
			</nav>
		</header>
		<footer>
			<div class="social-wrap">
				<a target="blank" href="<?php the_field('twitter','options'); ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a>
				<a target="blank" href="<?php the_field('instagram','options'); ?>"><i class="fa fa-instagram" aria-hidden="true"></i></a>
				<a target="blank" href="<?php the_field('github','options'); ?>"><i class="fa fa-github" aria-hidden="true"></i></a>
				<a href="mailto:<?php the_field('email','options'); ?>"><i class="fa fa-envelope" aria-hidden="true"></i></a>
			</div>
		</footer>
	</div>
	<div class="loader-wrap">
		<?php include('_/img/pro/loading.svg'); ?>
	</div>