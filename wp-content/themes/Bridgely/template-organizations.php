<?php /* Template Name: Organizations */ ?>
<?php get_header(); ?>

<main id="content" class="church-leaders">

    <?php /************************
	*
	*         Section 1
	* 
	* *************************/ ?>

    <div class="x840:pt-47p relative overflow-hidden pt-67p " id="church-leaders-intro-hero"
        <?php if(get_field('hero_banner_image')) { echo ' style="background:url('.get_field('hero_banner_image').') no-repeat center top; background-size:cover;"'; } ?>>
        <div class="absolute w-full overflow-hidden -bottom-4 left-0">
            <svg viewBox="0 0 1658 59" xmlns="http://www.w3.org/2000/svg">
                <path d="M1680 53.115V58.1982H0V53.1003C550.124 -17.7001 1129.88 -17.7001 1680 53.1003V53.115Z" fill="#FFF"></path>
            </svg>
        </div>
    </div>

    <div class="church-leaders-intro-content church-leaders-animate-section-1    mt-12 ">
        <div class="relative max-w-1210 mx-auto px-5 py-0">

            <div class="col col1">
                <?php if( get_field('hero_intro_title') ) { ?>
                <h1 class="text-blue text-center x960:text-68 relative block mb-5 font-poppins text-calc-100-minus-320"><?php echo get_field('hero_intro_title'); ?></h1>
                <?php } ?>
                <?php if( get_field('hero_intro_subtitle_title') ) { ?>
                <h3 class="text-blue text-center mt-5 text-40"><?php echo get_field('hero_intro_subtitle_title'); ?>
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

    <div class="py-12 px-12 mt-12"
        <?php if(get_field('background_image')) { echo ' style="background:url('.get_field('background_image').') no-repeat center top; background-size:cover;"'; } ?>>
        <div class="relative max-w-1210 mx-auto px-5 py-0  flex items-center justify-center">

            <?php if( get_field('general_wysiwyg_content') ) { ?>
            <div class="text-wrap text-white">
                <p class=""><?php echo get_field('general_wysiwyg_content'); ?></p>
            </div>
            <?php } ?>
            
        </div>
    </div>
    <div class="bg-primary_gray py-10 px-2.5 text-center flex items-center justify-center">
        <div class="relative max-w-1210 mx-auto px-5 py-0 flex items-center justify-center">

            <?php if( get_field('general_bottom_content') ) { ?>
            <div class="text-wrap text-white w-70p">
                <p class="text-white w-9/12 my-0 mx-auto relative font-poppins"><?php echo get_field('general_bottom_content'); ?></p>
            </div>
            <?php } ?>
            
        </div>
    </div>


	<?php /************************
	 *
	 *         Testimony Section
	 * 
	 * *************************/ ?>


    <?php  echo do_shortcode('[leaders-behind-movement]');?>


    <div class="default">
        <div class="relative max-w-1210 mx-auto px-5 py-0">

            <?php if( get_field('general_dark_text_wysiwyg_content') ) { ?>
            <div class="text-center">
                <p class="text-center mb-9"><?php echo get_field('general_dark_text_wysiwyg_content'); ?></p>
            </div>
            <?php } ?>
        </div>
    </div>

    
    <?php /************************
	*
	*         First 3 column icon section
	* 
	* *************************/ ?>

    <div class="three-column-icon-section page-animate-block  relative py-12 z-10"
        style="background-color: <?php echo get_field('3_col_column_backgound_color'); ?>">
        <div class="relative max-w-1210 mx-auto px-5 py-0">
            <?php if( get_field('3_col_intro_text') ) { ?>
            <h2 class="text-blue"><?php echo get_field('3_col_intro_text'); ?></h2>
            <?php } ?>
            <?php if( get_field('3_col_sub_title') ) { ?>
            <h3 class="text-blue"><?php echo get_field('3_col_sub_title'); ?></h3>
            <?php } ?>
            <?php if( get_field('3_col_support_line') ) { ?>
            <div class="relative committed-to-text overflow-hidden mb-3.5 text-center h-20 uppercase tracking-wider font-bold text-2xl text-custom_gold">
                <?php echo get_field('3_col_support_line'); ?></div>
            <?php } ?>

            <div class="three-col-layout grid grid-cols-1 gap-10 sm:grid-cols-1 md:grid-cols-3">
                <div class="col col1 relative block mx-auto mb-10 max-w-[600px] x960:border-r x960:border-solid x960:border-custom_gold x960:rounded-sm x960:px-5">
                    <?php if( get_field('3_col_select_icon') ) { ?>
                    <div class="icon-wrap relative mx-auto mb-4">
                        <img src="<?php bloginfo('template_directory'); ?><?php echo get_field('3_col_select_icon'); ?>" alt=""
                            class="block h-auto w-70 mx-auto" />
                    </div>
                    <?php } ?>
                    <?php if( get_field('3_col_column_1_copy') ) { ?>
                    <p><?php echo get_field('3_col_column_1_copy'); ?></p>
                    <?php } ?>
                </div>
                    
                <div class="col col2 relative block mx-auto mb-10 max-w-[600px]">
                    <?php if( get_field('3_col_select_icon_2') ) { ?>
                    <div class="icon-wrap relative mx-auto mb-4">
                        <img src="<?php bloginfo('template_directory'); ?><?php echo get_field('3_col_select_icon_2'); ?>" alt=""
                            class="block h-auto w-70 mx-auto" />
                    </div>
                    <?php } ?>
                    <?php if( get_field('3_col_column_2_copy') ) { ?>
                    <p><?php echo get_field('3_col_column_2_copy'); ?></p>
                    <?php } ?>
                </div>
                    
                <div class="col col3 relative block mx-auto mb-10 max-w-[600px] x960:border-l x960:border-solid x960:border-custom_gold md:rounded-sm md:px-5">
                    <?php if( get_field('3_col_select_icon_3') ) { ?>
                    <div class="icon-wrap relative mx-auto mb-4">
                        <img src="<?php bloginfo('template_directory'); ?><?php echo get_field('3_col_select_icon_3'); ?>" alt=""
                            class="block h-auto w-70 mx-auto" />
                    </div>
                    <?php } ?>
                    <?php if( get_field('3_col_column_3_copy') ) { ?>
                    <p><?php echo get_field('3_col_column_3_copy'); ?></p>
                    <?php } ?>
                </div>
            </div>


            <?php if( get_field('3_col_column_bottom_copy') ) { ?>
            <div class="bottom_copy py-12 text-center">
                <?php echo get_field('3_col_column_bottom_copy'); ?>
            </div>
            <?php } ?>


        </div>
        
        <?php // if 3_col_column_top_arc equals "Yes" then display the arc
        if( get_field('3_col_column_top_arc') == "Yes" ) { ?>
        <div class="absolute w-full overflow-hidden -bottom-4 left-0">
            <svg viewBox="0 0 1658 59" xmlns="http://www.w3.org/2000/svg">
                <path d="M1680 53.115V58.1982H0V53.1003C550.124 -17.7001 1129.88 -17.7001 1680 53.1003V53.115Z" fill="#FFF"></path>
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
<?php
if( get_field('second_3_col_column_top_arc') == "Yes" ) { ?>
    <div class="absolute w-calc-100-plus-20 block overflow-hidden">
    	<svg viewBox="0 0 1680 65" xmlns="http://www.w3.org/2000/svg">
    		<path d="M1680 65V0H-3V64.9233C548.107 -8.56355 1128.89 -8.56355 1680 64.9233V65Z" fill="#FFF"></path>
    	</svg>
    </div>
<?php } ?>
<div class="three-column-icon-section second page-animate-block mb-0 x960:py-12 z-10" 
     style="background-color: <?php echo get_field('second_3_col_column_backgound_color'); ?>;">
    <div class="relative max-w-1210 mx-auto px-5 py-12">
        <?php if( get_field('second_3_col_intro_text') ) { ?>
        <h2 class="text-blue text-center my-2 text-responsive">
            <?php echo get_field('second_3_col_intro_text'); ?>
        </h2>
        <?php } ?>

        <?php if( get_field('second_3_sub_title') ) { ?>
        <h3 class="text-blue text-center my-4 text-calc-32-plus-18">
            <?php echo get_field('second_3_sub_title'); ?>
        </h3>
        <?php } ?>

        <?php if( get_field('second_3_col_support_line') ) { ?>
        <div class="committed-to-text text-h4 text-orange opacity-100 transform-matrix">
            <?php echo get_field('second_3_col_support_line'); ?>
        </div>
        <?php } ?>

        <div class="committed-to-columns three-col-layout grid gap-11 sm:grid-cols-1 md:grid-cols-3">
            <div class="col col1 relative block mx-auto mb-10 max-w-610 md:border-r md:border-custom_gold md:px-5">
                <?php if( get_field('second_3_col_select_icon') ) { ?>
                <div class="icon-wrap relative mx-auto mb-4">
                    <img src="<?php bloginfo('template_directory'); ?><?php echo get_field('second_3_col_select_icon'); ?>" 
                         alt="" 
                         class="block h-auto w-70 mx-auto" />
                </div>
                        <?php } ?>
                        <?php if( get_field('second_3_col_column_1_copy') ) { ?>
                        <p class="mb-5"><?php echo get_field('second_3_col_column_1_copy'); ?></p>
                        <?php } ?>
                    </div>
                        
                    <div class="col col2 relative block mx-auto mb-10 max-w-[600px] md:border-r md:border-custom_gold md:px-5">
                        <?php if( get_field('second_3_col_select_icon_2') ) { ?>
                        <div class="icon-wrap relative mx-auto mb-4">
                            <img src="<?php bloginfo('template_directory'); ?><?php echo get_field('second_3_col_select_icon_2'); ?>" 
                                 alt="" 
                                 class="block h-auto w-70 mx-auto" />
                        </div>
                        <?php } ?>
                        <?php if( get_field('second_3_col_column_2_copy') ) { ?>
                        <p class="mb-5"><?php echo get_field('second_3_col_column_2_copy'); ?></p>
                        <?php } ?>
                    </div>
                        
                    <div class="col col3 relative block mx-auto mb-10 max-w-[600px]">
                        <?php if( get_field('second_3_col_select_icon_3') ) { ?>
                        <div class="icon-wrap relative mx-auto mb-4">
                            <img src="<?php bloginfo('template_directory'); ?><?php echo get_field('second_3_col_select_icon_3'); ?>" 
                                 alt="" 
                                 class="block h-auto w-70 mx-auto" />
                        </div>
                        <?php } ?>
                        <?php if( get_field('second_3_col_column_3_copy') ) { ?>
                        <p class="mb-5"><?php echo get_field('second_3_col_column_3_copy'); ?></p>
                        <?php } ?>
                    </div>
                </div>
                        
                <?php if( get_field('second_3_col_column_bottom_copy') ) { ?>
                <div class="bottom_copy py-12 text-center">
                    <?php echo get_field('second_3_col_column_bottom_copy'); ?>
                </div>
                <?php } ?>
            </div>

                
                
                <?php // if second_3_col_column_bottom_arc equals "Yes" then display the arc
                if( get_field('second_3_col_column_bottom_arc') == "Yes" ) { ?>
                    <div class="absolute w-calc-100-plus-20 block overflow-hidden">
                        <svg viewBox="0 0 1658 59" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1680 53.115V58.1982H0V53.1003C550.124 -17.7001 1129.88 -17.7001 1680 53.1003V53.115Z"
                                fill="#FFF" />
                        </svg>
                    </div>
                <?php } ?>

        </div>
            


    <?php if( get_field('cta_background_image') ) { ?>
    <div class="cta-section-vision relative py-120 px-0"
        style="background:url(<?php echo get_field('cta_background_image'); ?>) no-repeat 20% top; background-size:cover;">
        <?php } ?>
        <div class="relative max-w-1210 mx-auto px-5 py-0">

            <div class="relative max-w-lg pt-10 mt-3.5">
                <?php if( get_field('cta_content') ) { ?>
                <h2 class="text-white mb-5 mt-0 text-responsive"><?php echo get_field('cta_content', false, false); ?></h2>
                <?php } ?>
                <div class="cta_button_wrap  w-6/12 items-center flex mx-auto my-0 pt-5">
                    <?php if( get_field('cta_button_text') ) { ?>
                    <a class="mr-2.5 text-center py-3 px-4 font-poppins text-white bg-custom_gold w-full rounded font-bold"
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