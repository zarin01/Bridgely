<?php /* Template Name: Partners */ ?>
<?php get_header(); ?>

<main id="content" class="partners">

    <?php /************************
	*
	*         Section 1
	* 
	* *************************/ ?>

    <div class="blank-intro-hero x14:h-700 x840:pt-47p" id="partners-intro-hero"
        <?php if(get_field('partners_page_1_banner_image')) { echo ' style="background:url('.get_field('partners_page_1_banner_image').') no-repeat center top; background-size:cover;"'; } ?>>
        <div class="absolute block overflow-hidden w-full left-0 bottom-26p">
            <svg viewBox="0 0 1658 59" xmlns="http://www.w3.org/2000/svg">
                <path d="M1680 53.115V58.1982H0V53.1003C550.124 -17.7001 1129.88 -17.7001 1680 53.1003V53.115Z"
                    fill="#FFF" />
            </svg>
        </div>
    </div>

    <?php /************************
	*
	*         Section 2
	* 
	* *************************/ ?>

    <div class="partners-intro-content partners-animate-section-1 relative x12:pb-120 x960:pb-24 pt-20">
        <div class="relative max-w-1210 mx-auto px-5 py-0">

            <div class="animateRise">
                <?php if( get_field('partners_page_1_intro_title') ) { ?>
                <h1 class="text-blue text-center text-7xl"><?php echo get_field('partners_page_1_intro_title'); ?></h1>
                <?php } ?>
                <?php if( get_field('partners_page_1_intro_title') ) { ?>
                <h1 class="text-blue text-center x960:text-8xl text-7xl"><?php echo get_field('partners_page_intro_subtitle_title'); ?>
                </h1>
                <?php } ?>
                <?php if( get_field('partners_page_1_intro_content') ) { ?>
                <?php echo get_field('partners_page_1_intro_content'); ?>
                <?php } ?>
            </div>

        </div>
    </div>

    <?php /************************
	*
	*         Choose Your Start
	* 
	* *************************/ ?>

    <div class="partners-who-we-work-with partners-animate-section-2  x12:pt-32 x12:mb-40 x960:py-32 x840: relative bg-choose-your-start py-24 text-center bg-cover bg-no-repeat bg-center ">
        <div class="relative max-w-1210 mx-auto px-5 py-0">

            <?php if( get_field('partners_page_2_title') ) { ?>
            <h2 class="text-white animateRise mb-6 pb-10 text-responsive"><?php echo get_field('partners_page_2_title'); ?></h2>
            <?php } ?>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-12 mx-auto">
                <div class="animateRise primary-link">
                    <?php if( get_field('partners_page_2_column_1_title') ) { ?>
                    <div class="text-wrap text-white text-xl leading-6 font-medium font-sans"><?php echo get_field('partners_page_2_column_1_title'); ?></div>
                    <?php } ?>
                </div>

                <div class="animateRise dotted_bridge">
                    <?php if( get_field('partners_page_2_column_2_title') ) { ?>
                    <div class="text-wrap text-white text-xl leading-6 font-medium font-sans"><?php echo get_field('partners_page_2_column_2_title'); ?></div>
                    <?php } ?>
                </div>

                <div class="animateRise">
                    <?php if( get_field('partners_page_2_column_3_title') ) { ?>
                    <div class="text-wrap text-white text-xl leading-6 font-medium font-sans"><?php echo get_field('partners_page_2_column_3_title'); ?></div>
                    <?php } ?>
                </div>
            </div>

            <div class="text-wrap mx-auto max-w-840 mt-8">
                <?php if( get_field('partners_page_footer_section_text') ) { ?>
                <div class="text-wrap text-white text-xl leading-6 font-medium font-sans">
                    <p class="white footer_section_text"><?php echo get_field('partners_page_footer_section_text'); ?></p>
                </div>
                <?php } ?>
            </div>
        </div>
		<div class="absolute block overflow-hidden w-full left-0 -bottom-4">
            <svg viewBox="0 0 1658 59" xmlns="http://www.w3.org/2000/svg">
                <path d="M1680 53.115V58.1982H0V53.1003C550.124 -17.7001 1129.88 -17.7001 1680 53.1003V53.115Z"
                    fill="#FFF" />
            </svg>
        </div>
    </div>

    <?php /************************
	*
	*         Section 4
	* 
	* *************************/ ?>

    <div class="why-join-bridgely-section partners-animate-section-3   bg-white relative text-center py-12 x960:pt-13 x960:pb-20 x840:pt-28 x840:pb-20">
        <div class="relative mx-auto px-10 py-0">

            <?php if( get_field('partners_page_3_title') ) { ?>
            <h2 class="text-blue animateRise x960:mb-16 mb-12 text-responsive"><?php echo get_field('partners_page_3_title'); ?></h2>
            <?php } ?>

            <?php if( get_field('partners_page_3_content') ) { ?>
            <p><?php echo get_field('partners_page_3_content'); ?></p>
            <?php } ?>

        </div>
    </div>


	<?php /************************
	 *
	 *         Testimony Section
	 * 
	 * *************************/  ?>

    <?php  echo do_shortcode('[leaders-behind-movement]');?>
    
      
     

   

    <?php /************************
	*
	*         Section 5
	* 
	* *************************/ ?>

    <div class="how-to-become-section partners-animate-section-4  x960:py-5 x840:py-24 relative text-center py-5 mb-9 flex justify-center">
        <div class="relative max-w-1210 mx-auto px-5 py-0">

            <?php if( get_field('partners_page_4_title') ) { ?>
            <h2 class="text-blue text-responsive max-w-880 mx-auto animateRise"><?php echo get_field('partners_page_4_title'); ?></h2>
            <?php } ?>
            <?php if( get_field('partners_page_4_content') ) { ?>
            <p class="how-to-become-intro-p animateRise"><?php echo get_field('partners_page_4_content'); ?></p>
            <?php } ?>

            <?php if( get_field('partners_page_4_diagram_image') ) { ?>
            <?php $theImage = get_field('partners_page_4_diagram_image'); ?>
            <div class="how-to-become-diagram-wrap x960:mx-auto x960:my-16 relative block max-w-710 pb-2">
                <img src="<?php echo $theImage['url']; ?>" alt="<?php echo $theImage['alt']; ?>" class="animateRise relative block max-w-full h-auto" />

                <a href="/declaration" class="absolute diagram-link x640:h-40 x500:w-32 x500:h-36 block w-20 h-28 left-40p top-0p" id="diagram-link-1"></a>

                <a href="/apply" class="diagram-link x640:h-42 x500:w-32 x500:h-40 absolute block w-20 h-32 right-0 top-1/4" id="diagram-link-2"></a>

                <a href="#diagram-text-3" class="diagram-link x640:h-42 x500:w-32 x500:h-36 absolute block w-20 h-28 bottom-3p right-13p" id="diagram-link-3" data-fancybox></a>

                <a href="#diagram-text-4" class="diagram-link x640:h-40 x500:w-32 x500:h-36 absolute block w-20 h-28 bottom-3p left-13p" id="diagram-link-4" data-fancybox></a>

                <a href="#diagram-text-5" class="diagram-link x640:h-40 x500:w-32 x500:h-36 absolute block w-20 h-28 top-1/4 left-0" id="diagram-link-5" data-fancybox></a>

            </div>
            <?php } ?>

            <div style="display: none !important">
                <div id="diagram-text-1" class="diagram-fancy-content">
                    <h3>Connect with Us</h3>
                    <p>We want to get to know you, to understand your work and help you decide if Bridgely is right for
                        you.</p>
                </div>
                <div id="diagram-text-2" class="diagram-fancy-content">
                    <h3>Get Set-Up</h3>
                    <p>We will develop an implementation plan that fits your timeline and unique needs, and provide
                        basic marketing assets.</p>
                </div>
                <div id="diagram-text-3" class="diagram-fancy-content">
                    <h3>Empower Your Key Community Leaders</h3>
                    <p>Access training and coach leaders for supporter mobilization and field facilitation.</p>
                </div>
                <div id="diagram-text-4" class="diagram-fancy-content">
                    <h3>Expand Your Network</h3>
                    <p>With simple techniques, you can reach beyond the boundaries of your church, organization, or
                        current sphere of influence.</p>
                </div>
                <div id="diagram-text-5" class="diagram-fancy-content">
                    <h3>Watch Your Mission Thrive</h3>
                    <p>Through effective giving methods, dynamic relationships, and expert counsel, your mission will
                        gain greater impact. You’ll see lives transformed by connecting cause communities.</p>
                </div>
            </div>

        </div>
    </div>

    <?php /************************
	*
	*         Section 6
	* 
	* *************************/ ?>

<?php if( get_field('cta_background_image') ) { ?>
    <div class="cta-section-vision relative py-32 "
        style="background:url(<?php echo get_field('cta_background_image'); ?>) no-repeat 60% top; background-size:cover;">
        <?php } ?>
        <div class="relative max-w-1210 mx-auto px-5 py-0">

            <div class="cta-wrap  relative max-w-500 pt-11 mt-4 text-responsive">
                <?php if( get_field('cta_content') ) { ?>
                <h2 class="text-white"><?php echo get_field('cta_content', false, false); ?></h2>
                <?php } ?>
                <div class="cta_button_wrap  w-3/6 text-center flex mx-auto pt-5">
                    <?php if( get_field('cta_button_text') ) { ?>
                    <a class="btn"
                        href="<?php echo get_field('cta_button_link'); ?>"><?php echo get_field('cta_button_text'); ?></a>
                    <?php } ?>
                </div>
                <div class="animateRise" style="position: relative; opacity: 0; transform: matrix(1, 0, 0, 1, 0, 20);">

                </div>

            </div>
        </div>

    </div>

</main>

<?php get_footer(); ?>