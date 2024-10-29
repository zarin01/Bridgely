<?php /* Template Name: Partners */ ?>
<?php get_header(); ?>

<main id="content" class="partners">

    <?php /************************
	*
	*         Section 1
	* 
	* *************************/ ?>

    <div class="blank-intro-hero" id="partners-intro-hero"
        <?php if(get_field('partners_page_1_banner_image')) { echo ' style="background:url('.get_field('partners_page_1_banner_image').') no-repeat center top; background-size:cover;"'; } ?>>
        <div class="up-curve-contain">
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

    <div class="partners-intro-content partners-animate-section-1">
        <div class="center">

            <div class="col col1 animateRise">
                <?php if( get_field('partners_page_1_intro_title') ) { ?>
                <h1 class="text-h1-special special blue"><?php echo get_field('partners_page_1_intro_title'); ?></h1>
                <?php } ?>
                <?php if( get_field('partners_page_1_intro_title') ) { ?>
                <h1 class="text-h1-special extra-special blue"><?php echo get_field('partners_page_intro_subtitle_title'); ?>
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

    <div class="partners-who-we-work-with partners-animate-section-2">
        <div class="center">

            <?php if( get_field('partners_page_2_title') ) { ?>
            <h2 class="text-h1 white animateRise"><?php echo get_field('partners_page_2_title'); ?></h2>
            <?php } ?>

            <div class="icon-wrap-section">
                <div class="inner-block animateRise">
                    <?php if( get_field('partners_page_2_column_1_title') ) { ?>
                    <div class="text-wrap"><?php echo get_field('partners_page_2_column_1_title'); ?></div>
                    <?php } ?>
                </div>

                <div class="inner-block animateRise dotted_bridge">
                    <?php if( get_field('partners_page_2_column_2_title') ) { ?>
                    <div class="text-wrap"><?php echo get_field('partners_page_2_column_2_title'); ?></div>
                    <?php } ?>
                </div>

                <div class="inner-block animateRise">
                    <?php if( get_field('partners_page_2_column_3_title') ) { ?>
                    <div class="text-wrap"><?php echo get_field('partners_page_2_column_3_title'); ?></div>
                    <?php } ?>
                </div>
            </div>

            <div>
                <?php if( get_field('partners_page_footer_section_text') ) { ?>
                <div class="text-wrap">
                    <p class="white footer_section_text"><?php echo get_field('partners_page_footer_section_text'); ?></p>
                </div>
                <?php } ?>
            </div>
        </div>
		<div style="position: absolute; display: block; overflow: hidden;width: 100%;bottom: -4px;left: 0;">
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

    <div class="why-join-bridgely-section partners-animate-section-3">
        <div class="center">

            <?php if( get_field('partners_page_3_title') ) { ?>
            <h2 class="text-h1 blue animateRise"><?php echo get_field('partners_page_3_title'); ?></h2>
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
	 * *************************/ ?>


	<?php get_template_part('sections/section', 'endorsements-slides'); ?>
        

    <?php /************************
	*
	*         Section 5
	* 
	* *************************/ ?>

    <div class="how-to-become-section partners-animate-section-4">
        <div class="center">

            <?php if( get_field('partners_page_4_title') ) { ?>
            <h2 class="text-h1 blue animateRise"><?php echo get_field('partners_page_4_title'); ?></h2>
            <?php } ?>
            <?php if( get_field('partners_page_4_content') ) { ?>
            <p class="how-to-become-intro-p animateRise"><?php echo get_field('partners_page_4_content'); ?></p>
            <?php } ?>

            <?php if( get_field('partners_page_4_diagram_image') ) { ?>
            <?php $theImage = get_field('partners_page_4_diagram_image'); ?>
            <div class="how-to-become-diagram-wrap">
                <img src="<?php echo $theImage['url']; ?>" alt="<?php echo $theImage['alt']; ?>" class="animateRise" />
                <a href="/declaration" class="diagram-link" id="diagram-link-1"></a>
                <a href="/apply" class="diagram-link" id="diagram-link-2"></a>
                <a href="#diagram-text-3" class="diagram-link" id="diagram-link-3" data-fancybox></a>
                <a href="#diagram-text-4" class="diagram-link" id="diagram-link-4" data-fancybox></a>
                <a href="#diagram-text-5" class="diagram-link" id="diagram-link-5" data-fancybox></a>
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
    <div class="cta-section-vision"
        style="background:url(<?php echo get_field('cta_background_image'); ?>) no-repeat 60% top; background-size:cover;">
        <?php } ?>
        <div class="center">

            <div class="cta-wrap">
                <?php if( get_field('cta_content') ) { ?>
                <h2 class="white text-h1"><?php echo get_field('cta_content', false, false); ?></h2>
                <?php } ?>
                <div class="cta_button_wrap">
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