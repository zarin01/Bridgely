<!DOCTYPE html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

<head>
	<meta charset="utf-8">
	
	<title><?php wp_title('', true, 'right'); ?></title>
	
	<?php //mobile meta (hooray!) ?>
	<meta name="HandheldFriendly" content="True">
	<meta name="MobileOptimized" content="320">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0"/>

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Yellowtail&display=swap" rel="stylesheet">

	<?php if(is_page_template('template-about.php') || is_page_template('template-partners.php') || is_page_template('template-manifesto.php')) { ?>
		<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/library/js/fancy/jquery.fancybox.min.css" type="text/css" media="screen" />
	<?php } ?>
	
	<?php //hide iOS browser bar ?>
	<meta name="apple-mobile-web-app-capable" content="yes" />

	<link rel="icon" href="<?php bloginfo('template_directory'); ?>/favicon.png">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-4J5BRZ5Q3N"></script>
	<script>
	 window.dataLayer = window.dataLayer || [];
	 function gtag(){dataLayer.push(arguments);}
	 gtag('js', new Date());
	 gtag('config', 'G-4J5BRZ5Q3N');
	</script>
	
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="wrap">

	<header id="main-header" data-size="big">
		<div class="center">
		
			<a href="<?php echo get_option('siteurl'); ?>" id="main-logo">
				<img src="<?php bloginfo('template_directory'); ?>/library/images/main-logo.svg" alt="Dream Centers" />
			</a>

			<nav id="primary-navigation-wrapper">
				<div class="inner">
					<?php wp_nav_menu(array(
						'theme_location' => 'main-nav',
						'container' => ''
					)); ?>
				</div>
			</nav>

			<div id="mobile-nav-trigger">
				<span class="line line1"></span>
				<span class="line line2"></span>
				<span class="line line3"></span>
			</div>

			<div class="clear"></div>

		</div>
	</header>