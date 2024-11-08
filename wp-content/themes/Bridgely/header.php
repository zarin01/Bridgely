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

<div class="m-0 p-0 border-0 text-base align-baseline">

	<header class="absolute block w-full x840:h-60 h-32 left-0 top-0 bg-gradiant-image bg-repeat-x bg-left-bottom bg-4px-244px z-[9999]" data-size="big">
		<div class="relative max-w-1210 mx-auto px-5 pt-14">
		
			<a href="<?php echo get_option('siteurl'); ?>" class="relative block float-left w-175">
				<img src="<?php bloginfo('template_directory'); ?>/library/images/main-logo.svg" alt="Dream Centers" />
			</a>

			<nav class="x840:relative x840:block x840:float-right x840:top-auto x840:left-auto x840:p-0 x840:w-auto x840:bg-transparent
			 absolute hidden top-[calc(100%-10px)] left-0 p-[30px_20px] w-full bg-white">
				<div>
					<?php wp_nav_menu(array(
						'theme_location' => 'main-nav',
						'container' => '',
						'menu_class' => 'flex gap-x-1 relative list-none font-bold m-0 p-0 text-white font-poppins'
					)); ?>
				</div>
			</nav>

			<div id="mobile-nav-trigger" class="absolute x840:hidden block w-11 h-11 top-7 right-5 cursor-pointer outline-none bg-none">
				<!-- Line Class Styles Stripped other then .open Transform for Mobile Animation  -->
				<span class="line relative line1 top-3.5"></span>
				<span class="line relative line2 top-21"></span>
				<span class="line relative line3 top-28"></span>
			</div>

			<div class="clear"></div>

		</div>
	</header>