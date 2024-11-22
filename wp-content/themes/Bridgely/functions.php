<?php

//disable wp-admin file editor
define('DISALLOW_FILE_EDIT', true);

if(!defined('THEME_URL'))
	define('THEME_URL', get_bloginfo('template_directory'));

//	fix db after server move
//require_once( TEMPLATEPATH.'/library/includes/mysql-replace.php' );
//MySQL_Replace::replace('old', 'new');

require_once get_template_directory() . '/sections/slider-carousels.php';

//	dependicies
require_once( TEMPLATEPATH.'/library/includes/wp-header-remove.php' );

//	menus
register_nav_menus(array(
	'main-nav' => 'Main Navigation',
	'footer-nav' => 'Footer Navigation',
	'social-nav' => 'Social Navigation',
));

//	post thumbnails
add_theme_support( 'post-thumbnails' );


function enqueue_tailwind(){
	wp_enqueue_style('tailwind-css', get_template_directory_uri() . '/src/output.css');
}

add_action('wp_enqueue_scripts', 'enqueue_tailwind');


/**
 *	Add Scripts
 *	Utilizes wp_enqueue_scripts to add
 *	required scripts
 *
 *	@return void
 */
add_action( 'wp_enqueue_scripts', 'magneti_enqueue_scripts' );

function magneti_enqueue_scripts() {
	
	if( is_admin() )
		return false;
	
		$style_ver = filemtime(get_stylesheet_directory() . '/library/css/style.css');
		
	//register
    wp_register_style( 'template-stylesheet', get_theme_file_uri() . '/library/css/style.css', array(), $style_ver, 'all' );
	wp_register_script( 'lib', THEME_URL.'/library/js/lib.js', array( 'jquery' ), $style_ver );
	wp_register_script( 'fancybox', THEME_URL.'/library/js/fancy/jquery.fancybox.min.js', array( 'jquery' ), '' );

	//these are the scripts for scroll magic and greensock to support it, for animations
	wp_register_script( 'sm1', THEME_URL.'/library/js/scrollmagic/ScrollMagic.min.js', array( 'jquery' ), '' );
	wp_register_script( 'sm2', THEME_URL.'/library/js/greensock/TweenMax.min.js', array( 'jquery' ), '' );
	wp_register_script( 'sm3', THEME_URL.'/library/js/greensock/easing/EasePack.min.js', array( 'jquery' ), '' );
	wp_register_script( 'sm4', THEME_URL.'/library/js/scrollmagic/plugins/animation.gsap.min.js', array( 'jquery' ), '' );
	wp_register_script( 'sm5', THEME_URL.'/library/js/greensock/plugins/ScrollToPlugin.min.js', array( 'jquery' ), '' );
	wp_register_script( 'sm6', THEME_URL.'/library/js/scrollmagic/plugins/debug.addIndicators.min.js', array( 'jquery' ), '' );

	//enqueue
	wp_enqueue_style( 'template-stylesheet' );
	wp_enqueue_script( 'jquery' );


	if(is_page_template('template-about.php') || is_page_template('template-partners.php') || is_page_template('template-manifesto.php')) {
		wp_enqueue_script( 'fancybox' );
	}
	
	wp_enqueue_script( 'sm1' );
	wp_enqueue_script( 'sm2' );
	wp_enqueue_script( 'sm3' );
	wp_enqueue_script( 'sm4' );
	wp_enqueue_script( 'sm5' );
	wp_enqueue_script( 'sm6' );
	wp_enqueue_script( 'lib' );

	
	
	//localize
	/*
	wp_localize_script('lib', 'MAGNETI', array(
		'ajaxurl' => admin_url('admin-ajax.php'),
		'siteurl' => get_option('siteurl')
	));
	*/
	wp_localize_script('lib', 'MAGNETI', array(
		'siteurl' => get_option('siteurl')
	));
}

// shortcode function for hubspot apply form
function embed_hubspot_form($atts) {
    // Set default attributes
    $atts = shortcode_atts(array(
        'region' => 'na1',
        'portal_id' => '4760869',
        'form_id' => 'a00947c6-b08c-491f-b96d-8ace1ec14f7b'
    ), $atts);

    // Get attributes
    $region = $atts['region'];
    $portal_id = $atts['portal_id'];
    $form_id = $atts['form_id'];

    ob_start(); ?>
		<script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/embed/v2.js"></script>
		<script>
		hbspt.forms.create({
			region: "<?php echo esc_attr($region); ?>",
			portalId: "<?php echo esc_attr($portal_id); ?>",
			formId: "<?php echo esc_attr($form_id); ?>"
		});
		</script>
<?php
    return ob_get_clean();
}
add_shortcode('hubspot_form', 'embed_hubspot_form');

// Custom Bridgely patterns
function three_six_pattern() {
    register_block_pattern(
        'my-theme/my-custom-pattern',
        array(
            'title'       => __( '33/66 Bridglely Pattern', 'Bridgely' ),
            'description' => _x( 'Bridgely custom pattern', 'Block pattern description', 'textdomain' ),
            'content'     => '<!-- wp:group {"layout":{"type":"constrained"}} -->
			<div class="wp-block-group a-home-section home-section-2 page-animate-block"><!-- wp:columns -->
			<div class="wp-block-columns center"><!-- wp:column {"width":"33.33%"} -->
			<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:paragraph -->
			<p><strong>Bridgely’s partners work to alleviate global poverty and provide sustainable development in the communities they serve.&nbsp;</strong></p>
			<!-- /wp:paragraph -->
			
			<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center","flexWrap":"wrap"}} -->
			<div class="wp-block-buttons"><!-- wp:button {"textAlign":"center","width":75,"style":{"border":{"radius":"10px"}},"className":"is-style-fill"} -->
			<div class="wp-block-button has-custom-width wp-block-button__width-75 is-style-fill"><a class="btn wp-block-button__link has-text-align-center wp-element-button" style="border-radius:10px">Button</a></div>
			<!-- /wp:button --></div>
			<!-- /wp:buttons --></div>
			<!-- /wp:column -->
			
			<!-- wp:column -->
			<div class="wp-block-column"><!-- wp:separator {"className":"is-style-default"} -->
			<hr class="wp-block-separator has-alpha-channel-opacity is-style-default"/>
			<!-- /wp:separator --></div>
			<!-- /wp:column -->
			
			<!-- wp:column {"width":"66.66%"} -->
			<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:heading {"level":4} -->
			<h4 class="wp-block-heading">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit. Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit. Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit. Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</h4>
			<!-- /wp:heading -->
			
			<!-- wp:paragraph -->
			<p>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit. Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</p>
			<!-- /wp:paragraph --></div>
			<!-- /wp:column --></div>
			<!-- /wp:columns --></div>
			<!-- /wp:group -->'
			,
			'categories'  => array( 'featured', 'columns' ),
            'keywords'    => array( 'custom', 'pattern', 'example' ),
        )
    );
}
add_action( 'init', 'three_six_pattern' );
