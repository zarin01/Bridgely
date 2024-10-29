    <?php /* Template Name: Church Leaders */ ?>
<?php get_header(); ?>

<main id="content" class="church-leaders">

    <?php /************************
	*
	*         Section 1
	* 
	* *************************/ ?>

    <div class="blank-intro-hero" id="church-leaders-intro-hero"
        <?php if(get_field('church_leaders_page_1_banner_image')) { echo ' style="background:url('.get_field('church_leaders_page_1_banner_image').') no-repeat center top; background-size:cover;"'; } ?>>
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

    <div class="church-leaders-intro-content church-leaders-animate-section-1">
        <div class="center">

            <div class="col col1">
                <?php if( get_field('church_leaders_page_1_intro_title') ) { ?>
                <h1 class="text-h1-special special blue"><?php echo get_field('church_leaders_page_1_intro_title'); ?></h1>
                <?php } ?>
                <?php if( get_field('church_leaders_page_intro_subtitle_title') ) { ?>
                <h3 class="blue text-center"><?php echo get_field('church_leaders_page_intro_subtitle_title'); ?>
                </h3>
                <?php } ?>
                <?php if( get_field('church_leaders_page_1_intro_content') ) { ?>
                <?php echo get_field('church_leaders_page_1_intro_content'); ?>
                <?php } ?>
            </div>


            <div class="church-leaders-3-mid-middle">
                <div class="center">
                    <div class="fifty-fifty-fancy-split">

                        <div class="part part-left">
                            <?php if( get_field('church_leaders_left_column_title') ) { ?>
                            <h2><?php echo get_field('church_leaders_left_column_title'); ?></h2>
                            <?php } ?>
                            <?php if( get_field('church_leaders_left_column_bullet') ) { ?>
                            <div class="text-point yes">
                                <p><?php echo get_field('church_leaders_left_column_bullet'); ?></p>
                            </div>
                            <?php } ?>

                            <?php if( get_field('church_leaders_left_column_bullet_2') ) { ?>
                            <div class="text-point yes">
                                <p><?php echo get_field('church_leaders_left_column_bullet_2'); ?></p>
                            </div>
                            <?php } ?>

                        </div>

                        <div class="part part-right">
                            <?php if( get_field('church_leaders_right_column_content') ) { ?>
                            <p><?php echo get_field('church_leaders_right_column_content'); ?></p>
                            <?php } ?>
                        </div>
                    </div>

                </div>
            </div>


        </div>
    </div>



    <?php /************************
	*
	*         Section 3
	* 
	* *************************/ ?>

    <div class="church-leaders-global-missions church-leaders-animate-section-2">
        <div class="center">


            <div class="col col1">
                <?php if( get_field('church_missions_intro_title') ) { ?>
                <h1 class="text-h1-special special blue"><?php echo get_field('church_missions_intro_title'); ?></h1>
                <?php } ?>
            </div>

            <div class="church-missions-3-mid-middle">
                <div class="center">
                    <div class="fifty-fifty-fancy-split">

                        <div class="part part-left">
                            <?php if( get_field('church_missions_highlight_image') ) { ?>
                            <img src="<?php echo get_field('church_missions_highlight_image'); ?>">
                            <?php } ?>
                        </div>

                        <div class="part part-right">
                            <?php if( get_field('church_missions_content_box') ) { ?>
                            <?php echo get_field('church_missions_content_box'); ?>
                            <?php } ?>
                        </div>
                    </div>

                </div>
            </div>


            <div class="col col1">
                <?php if( get_field('church_missions_subsection_title') ) { ?>
                <h3><?php echo get_field('church_missions_subsection_title'); ?></h3>
                <?php } ?>

                <?php if( get_field('church_missions_subsection_content') ) { ?>
                <p><?php echo get_field('church_missions_subsection_content'); ?></p>
                <?php } ?>
            </div>

        </div>
    </div>

    <?php /************************
	*
	*         First 3 column icon section
	* 
	* *************************/ ?>

    <div class="three-column-icon-section page-animate-block">
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

        </div>
    </div>
    

    <?php /************************
	*
	*         Section 5
	* 
	* *************************/ ?>

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