<?php /* Template Name: Organizations */ ?>
<?php get_header(); ?>

<main id="content" class="church-leaders">

    <?php /************************
	*
	*         Section 1
	* 
	* *************************/ ?>

    <div class="blank-intro-hero" id="church-leaders-intro-hero"
        <?php if(get_field('hero_banner_image')) { echo ' style="background:url('.get_field('hero_banner_image').') no-repeat center top; background-size:cover;"'; } ?>>
        <div class="up-curve-contain">
            <svg viewBox="0 0 1658 59" xmlns="http://www.w3.org/2000/svg">
                <path d="M1680 53.115V58.1982H0V53.1003C550.124 -17.7001 1129.88 -17.7001 1680 53.1003V53.115Z"
                    fill="#FFF" />
            </svg>
        </div>
    </div>

    <div class="church-leaders-intro-content church-leaders-animate-section-1">
        <div class="center">

            <div class="col col1">
                <?php if( get_field('hero_intro_title') ) { ?>
                <h1 class="text-h1-special special blue"><?php echo get_field('hero_intro_title'); ?></h1>
                <?php } ?>
                <?php if( get_field('hero_intro_subtitle_title') ) { ?>
                <h3 class="blue text-center"><?php echo get_field('hero_intro_subtitle_title'); ?>
                </h3>
                <?php } ?>
                <?php if( get_field('hero_intro_content') ) { ?>
                <?php echo get_field('hero_intro_content'); ?>
                <?php } ?>
            </div>

        </div>
    </div>



    <?php /************************
	*
	*         Section 3
	* 
	* *************************/ ?>

    <div class="with_background"
        <?php if(get_field('background_image')) { echo ' style="background:url('.get_field('background_image').') no-repeat center top; background-size:cover;"'; } ?>>
        <div class="center">

            <?php if( get_field('general_wysiwyg_content') ) { ?>
            <div class="text-wrap text-white">
                <p class=""><?php echo get_field('general_wysiwyg_content'); ?></p>
            </div>
            <?php } ?>
            
        </div>
    </div>
    <div class="general_bottom_content">
        <div class="center">

            <?php if( get_field('general_bottom_content') ) { ?>
            <div class="text-wrap text-white">
                <p class=""><?php echo get_field('general_bottom_content'); ?></p>
            </div>
            <?php } ?>
            
        </div>
    </div>


	<?php /************************
	 *
	 *         Testimony Section
	 * 
	 * *************************/ ?>


	<?php get_template_part('sections/section', 'endorsements-slides'); ?>


    <div class="default">
        <div class="center">

            <?php if( get_field('general_dark_text_wysiwyg_content') ) { ?>
            <div class="text-wrap">
                <p class=""><?php echo get_field('general_dark_text_wysiwyg_content'); ?></p>
            </div>
            <?php } ?>
        </div>
    </div>

    
    <?php /************************
	*
	*         First 3 column icon section
	* 
	* *************************/ ?>

    <div class="three-column-icon-section page-animate-block"
        style="background-color: <?php echo get_field('3_col_column_backgound_color'); ?>">
        <div class="center">
            <?php if( get_field('3_col_intro_text') ) { ?>
            <h2 class="blue"><?php echo get_field('3_col_intro_text'); ?></h2>
            <?php } ?>
            <?php if( get_field('3_col_sub_title') ) { ?>
            <h3 class="blue"><?php echo get_field('3_col_sub_title'); ?></h3>
            <?php } ?>
            <?php if( get_field('3_col_support_line') ) { ?>
            <div class="committed-to-text text-h4 orange" style="opacity: 1;transform: matrix(1, 0, 0, 1, 0, 0);">
                <?php echo get_field('3_col_support_line'); ?></div>
            <?php } ?>

            <div class="committed-to-columns three-col-layout">
                <div class="col col1">
                    <?php if( get_field('3_col_select_icon') ) { ?>
                    <div class="icon-wrap"><img
                            src="<?php bloginfo('template_directory'); ?><?php echo get_field('3_col_select_icon'); ?>"
                            alt="" />
                    </div>
                    <?php } ?>
                    <?php if( get_field('3_col_column_1_copy') ) { ?>
                    <p><?php echo get_field('3_col_column_1_copy'); ?></p>
                    <?php } ?>
                </div>

                <div class="col col2">
                    <?php if( get_field('3_col_select_icon_2') ) { ?>
                    <div class="icon-wrap"><img
                            src="<?php bloginfo('template_directory'); ?><?php echo get_field('3_col_select_icon_2'); ?>"
                            alt="" /></div>
                    <?php } ?>
                    <?php if( get_field('3_col_column_2_copy') ) { ?>
                    <p><?php echo get_field('3_col_column_2_copy'); ?></p>
                    <?php } ?>
                </div>

                <div class="col col3">
                    <?php if( get_field('3_col_select_icon_3') ) { ?>
                    <div class="icon-wrap"><img
                            src="<?php bloginfo('template_directory'); ?><?php echo get_field('3_col_select_icon_3'); ?>"
                            alt="" />
                    </div>
                    <?php } ?>
                    <?php if( get_field('3_col_column_3_copy') ) { ?>
                    <p><?php echo get_field('3_col_column_3_copy'); ?></p>
                    <?php } ?>
                </div>
            </div>

            <?php if( get_field('3_col_column_bottom_copy') ) { ?>
            <div class="bottom_copy">
                <?php echo get_field('3_col_column_bottom_copy'); ?></div>
            <?php } ?>

        </div>
        
        <?php // if 3_col_column_top_arc equals "Yes" then display the arc
        if( get_field('3_col_column_top_arc') == "Yes" ) { ?>
        <div class="down-curve-contain">
			<svg viewBox="0 0 1680 65" xmlns="http://www.w3.org/2000/svg">
				<path d="M1680 65V0H-3V64.9233C548.107 -8.56355 1128.89 -8.56355 1680 64.9233V65Z" fill="#FFF"></path>
			</svg>
		</div>
        <?php } ?>

        <?php // if 3_col_column_bottom_arc equals "Yes" then display the arc
        if( get_field('3_col_column_bottom_arc') == "Yes" ) { ?>
        <div style="position: absolute; display: block; overflow: hidden;width: 100%;bottom: -4px;left: 0;">
            <svg viewBox="0 0 1658 59" xmlns="http://www.w3.org/2000/svg">
                <path d="M1680 53.115V58.1982H0V53.1003C550.124 -17.7001 1129.88 -17.7001 1680 53.1003V53.115Z"
                    fill="#FFF" />
            </svg>
        </div>
        <?php } ?>

    </div>


    <?php /************************
	*
	*         Second 3 column icon section
	* 
	* *************************/ ?>

<div class="three-column-icon-section second page-animate-block"
        style="background-color: <?php echo get_field('second_3_col_column_backgound_color'); ?>">
        <div class="center">
            <?php if( get_field('second_3_col_intro_text') ) { ?>
            <h2 class="blue"><?php echo get_field('second_3_col_intro_text'); ?></h2>
            <?php } ?>
            <?php if( get_field('second_3_sub_title') ) { ?>
            <h3 class="blue"><?php echo get_field('second_3_sub_title'); ?></h3>
            <?php } ?>
            <?php if( get_field('second_3_col_support_line') ) { ?>
            <div class="committed-to-text text-h4 orange" style="opacity: 1;transform: matrix(1, 0, 0, 1, 0, 0);">
                <?php echo get_field('second_3_col_support_line'); ?></div>
            <?php } ?>

            <div class="committed-to-columns three-col-layout">
                <div class="col col1">
                    <?php if( get_field('second_3_col_select_icon') ) { ?>
                    <div class="icon-wrap"><img
                            src="<?php bloginfo('template_directory'); ?><?php echo get_field('second_3_col_select_icon'); ?>"
                            alt="" />
                    </div>
                    <?php } ?>
                    <?php if( get_field('second_3_col_column_1_copy') ) { ?>
                    <p><?php echo get_field('second_3_col_column_1_copy'); ?></p>
                    <?php } ?>
                </div>

                <div class="col col2">
                    <?php if( get_field('second_3_col_select_icon_2') ) { ?>
                    <div class="icon-wrap"><img
                            src="<?php bloginfo('template_directory'); ?><?php echo get_field('second_3_col_select_icon_2'); ?>"
                            alt="" /></div>
                    <?php } ?>
                    <?php if( get_field('second_3_col_column_2_copy') ) { ?>
                    <p><?php echo get_field('second_3_col_column_2_copy'); ?></p>
                    <?php } ?>
                </div>

                <div class="col col3">
                    <?php if( get_field('second_3_col_select_icon_3') ) { ?>
                    <div class="icon-wrap"><img
                            src="<?php bloginfo('template_directory'); ?><?php echo get_field('second_3_col_select_icon_3'); ?>"
                            alt="" />
                    </div>
                    <?php } ?>
                    <?php if( get_field('second_3_col_column_3_copy') ) { ?>
                    <p><?php echo get_field('second_3_col_column_3_copy'); ?></p>
                    <?php } ?>
                </div>
            </div>

            <?php if( get_field('second_3_col_column_bottom_copy') ) { ?>
            <div class="bottom_copy">
                <?php echo get_field('second_3_col_column_bottom_copy'); ?></div>
            <?php } ?>

        </div>
        
        <?php // if second_3_col_column_top_arc equals "Yes" then display the arc
        if( get_field('second_3_col_column_top_arc') == "Yes" ) { ?>
        <div class="down-curve-contain">
			<svg viewBox="0 0 1680 65" xmlns="http://www.w3.org/2000/svg">
				<path d="M1680 65V0H-3V64.9233C548.107 -8.56355 1128.89 -8.56355 1680 64.9233V65Z" fill="#FFF"></path>
			</svg>
		</div>
        <?php } ?>

        <?php // if second_3_col_column_bottom_arc equals "Yes" then display the arc
        if( get_field('second_3_col_column_bottom_arc') == "Yes" ) { ?>
        <div style="position: absolute; display: block; overflow: hidden;width: 100%;bottom: -4px;left: 0;">
            <svg viewBox="0 0 1658 59" xmlns="http://www.w3.org/2000/svg">
                <path d="M1680 53.115V58.1982H0V53.1003C550.124 -17.7001 1129.88 -17.7001 1680 53.1003V53.115Z"
                    fill="#FFF" />
            </svg>
        </div>
        <?php } ?>

    </div>


    <?php if( get_field('cta_background_image') ) { ?>
    <div class="cta-section-vision"
        style="background:url(<?php echo get_field('cta_background_image'); ?>) no-repeat 20% top; background-size:cover;">
        <?php } ?>
        <div class="center">

            <div class="cta-wrap">
                <?php if( get_field('cta_content') ) { ?>
                <h2 class="white text-h1"><?php echo get_field('cta_content', false, false); ?></h2>
                <?php } ?>
                <div class="cta_button_wrap">
                    <?php if( get_field('cta_button_text') ) { ?>
                    <a class="cta_button"
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