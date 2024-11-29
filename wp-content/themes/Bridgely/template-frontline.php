<?php /* Template Name: Frontline Audience */ ?>
<?php get_header(); ?>

<main id="content" class="bg-white">

    <?php /************************
	*
	*         Hero Banner
	* 
	* *************************/ ?>

    <div class="relative overflow-hidden bg-no-repeat bg-cover bg-top x840:pt-245 x840:pb-130 pb-80" id="church-leaders-intro-hero"
        <?php if(get_field('hero_banner_image')) { echo 'style="background-image: url('.get_field('hero_banner_image').');"'; } ?>>
        <div class="absolute w-full overflow-hidden -bottom-4 left-0">
            <svg viewBox="0 0 1658 59" xmlns="http://www.w3.org/2000/svg" class="w-full h-auto">
                <path d="M1680 53.115V58.1982H0V53.1003C550.124 -17.7001 1129.88 -17.7001 1680 53.1003V53.115Z"
                    fill="#FFF" />
            </svg>
        </div>
    </div>

    <!-- Intro Content -->
    <div class="animate-fade-in py-12 px-4">
        <div class="max-w-screen-lg mx-auto text-left">
            <?php if( get_field('hero_intro_title') ) { ?>
            <h1 class="text-center"><?php echo get_field('hero_intro_title'); ?></h1>
            <?php } ?>
            <?php if( get_field('hero_intro_subtitle_title') ) { ?>
            <h3 class="text-center"><?php echo get_field('hero_intro_subtitle_title'); ?></h3>
            <?php } ?>
            <?php if( get_field('hero_intro_content') ) { ?>
            <div class="text-lg"><?php echo get_field('hero_intro_content'); ?></div>
            <?php } ?>
        </div>
    </div>

    <?php /************************
	*
	*         Background with image and text
	* 
	* *************************/ ?>

    <div class="relative bg-cover bg-center-top"
        <?php if(get_field('background_image')) { echo 'style="background-image: url('.get_field('background_image').');"'; } ?>>
        <div class="max-w-screen-lg mx-auto py-12 px-4">
            <?php if( get_field('general_wysiwyg_content') ) { ?>
            <div class="text-white text-center mx-auto"><?php echo get_field('general_wysiwyg_content'); ?></div>
            <?php } ?>
        </div>
    </div>

    <div class="bg-primary_gray py-12 px-4">
        <div class="max-w-screen-lg mx-auto">
            <?php if( get_field('general_bottom_content') ) { ?>
            <div class="text-wrap text-white">
                <?php echo get_field('general_bottom_content'); ?>
            </div>
            <?php } ?>
        </div>
    </div>

    <!-- Default Section -->
    <div class="pt-12">
        <div class="mx-auto px-12">
            <?php if( get_field('general_dark_text_wysiwyg_content') ) { ?>
            <p><?php echo get_field('general_dark_text_wysiwyg_content'); ?></p>
            <?php } ?>
        </div>
    </div>

    <?php /************************
	*
	*       First 3 column icon section
	* 
	* *************************/ ?>

    <div class="down-curve-contain">
        <svg viewBox="0 0 1680 65" xmlns="http://www.w3.org/2000/svg">
            <path d="M1680 65V0H-3V64.9233C548.107 -8.56355 1128.89 -8.56355 1680 64.9233V65Z" fill="#FFF"></path>
        </svg>
    </div>
    <div class="three-column-icon-section bg-primary_white py-16">
        <div class="max-w-screen-lg mx-auto text-center">
            <?php if( get_field('3_col_intro_text') ) { ?>
            <h2 class="text-4xl font-bold text-blue"><?php echo get_field('3_col_intro_text'); ?></h2>
            <?php } ?>
            <?php if( get_field('3_col_sub_title') ) { ?>
            <h3 class="text-xl text-blue"><?php echo get_field('3_col_sub_title'); ?></h3>
            <?php } ?>
            <?php if( get_field('3_col_support_line') ) { ?>
            <div class="committed-to-text relative text-primary_orange mb-4 h-77 x840:committed-to-text-after flex justify-center items-center font-bold leading-normal uppercase">
            <span class="z-10 px-2"><h4><?php echo get_field('3_col_support_line'); ?></h4></span>
            </div>
            <?php } ?>
            <div class="grid grid-cols-1 x840:grid-cols-3 gap-8">
                <!-- Column 1 -->
                <div>
                    <?php if( get_field('3_col_select_icon') ) { ?>
                    <img class="mx-auto" src="<?php bloginfo('template_directory'); ?><?php echo get_field('3_col_select_icon'); ?>" alt="" />
                    <?php } ?>
                    <?php if( get_field('3_col_column_1_copy') ) { ?>
                    <p><?php echo get_field('3_col_column_1_copy'); ?></p>
                    <?php } ?>
                </div>

                <!-- Column 2 -->
                <div>
                    <?php if( get_field('3_col_select_icon_2') ) { ?>
                    <img class="mx-auto" src="<?php bloginfo('template_directory'); ?><?php echo get_field('3_col_select_icon_2'); ?>" alt="" />
                    <?php } ?>
                    <?php if( get_field('3_col_column_2_copy') ) { ?>
                    <p><?php echo get_field('3_col_column_2_copy'); ?></p>
                    <?php } ?>
                </div>

                <!-- Column 3 -->
                <div>
                    <?php if( get_field('3_col_select_icon_3') ) { ?>
                    <img class="mx-auto" src="<?php bloginfo('template_directory'); ?><?php echo get_field('3_col_select_icon_3'); ?>" alt="" />
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
	 *         Testimony Section
	 * 
	 * *************************/ ?>

    <?php  echo do_shortcode('[leaders-behind-movement]');?>

    <?php /************************
	*
	*         Swap image/content section
	* 
	* *************************/ ?>

<div class="page-animate-block" style="background-color:<?php echo get_field('background_color'); ?>">
    <div class="max-w-screen-lg mx-auto px-12 py-12">
        <?php if( get_field('swap_intro_text') ) { ?>
        <h3 class="text-center"><?php echo get_field('swap_intro_text'); ?></h3>
        <?php } ?>

        <?php $blockCounter = 0; ?>
        <?php if( have_rows('swap_content_blocks') ): ?>
        <div class="space-y-8">
            <?php while( have_rows('swap_content_blocks') ) : the_row(); ?>
            <div class="border-primary_orange border-solid border-b-2 pb-10 items-center block x12:flex x840:flex <?php echo $blockCounter % 2 === 0 ? 'flex-row-reverse' : 'flex-row'; ?>">
                <div class="w-full x12:w-1/2 x840:w-1/2 px-4">
                    <?php $theImage = get_sub_field('image'); ?>
                    <img class="w-full h-auto" src="<?php echo $theImage['url']; ?>" alt="<?php echo $theImage['alt']; ?>" />
                </div>
                <div class="w-full x12:w-1/2 x840:w-1/2 px-4">
                    <div>
                        <?php if(get_sub_field('title')) { ?>
                        <h3 class="pt-4"><?php the_sub_field('title'); ?></h3>
                        <?php } ?>
                        <?php if(get_sub_field('content')) { ?>
                        <p><?php the_sub_field('content'); ?></p>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <?php $blockCounter++; ?>
            <?php endwhile; ?>
        </div>
        <?php endif; ?>
    </div>

</div>

    <?php /************************
	*
	*         Second 3 column icon section
	* 
	* *************************/ ?>

<?php if( get_field('second_3_col_column_top_arc') == "Yes" ) { ?>
    <div class="down-curve-contain">
    <svg viewBox="0 0 1680 65" xmlns="http://www.w3.org/2000/svg">
        <path d="M1680 65V0H-3V64.9233C548.107 -8.56355 1128.89 -8.56355 1680 64.9233V65Z" fill="#FFF"></path>
    </svg>
</div>
<?php } ?>


<div class="py-16" style="background-color: <?php echo get_field('second_3_col_column_backgound_color'); ?>">
    <div class="max-w-screen-lg mx-auto text-center space-y-6">
        <?php if( get_field('second_3_col_intro_text') ) { ?>
        <h1><?php echo get_field('second_3_col_intro_text'); ?></h1>
        <?php } ?>
        <?php if( get_field('second_3_sub_title') ) { ?>
        <h3><?php echo get_field('second_3_sub_title'); ?></h3>
        <?php } ?>
        <?php if( get_field('second_3_col_support_line') ) { ?>
        <p class="text-lg text-orange"><?php echo get_field('second_3_col_support_line'); ?></p>
        <?php } ?>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="border-r-2 border-solid border-primary_orange px-4 h-3/4 relative mt-10 items-center block text-left">
                <?php if( get_field('second_3_col_select_icon') ) { ?>
                <img class="mx-auto w-70" src="<?php bloginfo('template_directory'); ?><?php echo get_field('second_3_col_select_icon'); ?>" alt="" />
                <?php } ?>
                <?php if( get_field('second_3_col_column_1_copy') ) { ?>
                <p><?php echo get_field('second_3_col_column_1_copy'); ?></p>
                <?php } ?>
            </div>
            <div class="border-r-2 border-solid border-primary_orange px-4 h-3/4 relative mt-10 items-center block text-left">
                <?php if( get_field('second_3_col_select_icon_2') ) { ?>
                <img class="mx-auto w-70" src="<?php bloginfo('template_directory'); ?><?php echo get_field('second_3_col_select_icon_2'); ?>" alt="" />
                <?php } ?>
                <?php if( get_field('second_3_col_column_2_copy') ) { ?>
                <p><?php echo get_field('second_3_col_column_2_copy'); ?></p>
                <?php } ?>
            </div>
            <div class="h-3/4 relative mt-10 items-center block text-left px-4">
                <?php if( get_field('second_3_col_select_icon_3') ) { ?>
                <img class="mx-auto w-70" src="<?php bloginfo('template_directory'); ?><?php echo get_field('second_3_col_select_icon_3'); ?>" alt="" />
                <?php } ?>
                <?php if( get_field('second_3_col_column_3_copy') ) { ?>
                <p><?php echo get_field('second_3_col_column_3_copy'); ?></p>
                <?php } ?>
            </div>
        </div>

        <?php if( get_field('second_3_col_column_bottom_copy') ) { ?>
        <div>
            <p><?php echo get_field('second_3_col_column_bottom_copy'); ?></p>
        </div>
        <?php } ?>
    </div>



    <?php if( get_field('second_3_col_column_bottom_arc') == "Yes" ) { ?>
    <div class="w-full relative overflow-hidden">
        <svg class="w-full" viewBox="0 0 1658 59" xmlns="http://www.w3.org/2000/svg">
            <path d="M1680 53.115V58.1982H0V53.1003C550.124 -17.7001 1129.88 -17.7001 1680 53.1003V53.115Z" fill="#FFF" />
        </svg>
    </div>
    <?php } ?>
</div>

<?php /************************
    *         CTA Section
    *************************/ ?>
    
    <?php if (get_field('cta_background_image')) { ?>
        <div class="relative bg-cover bg-center-top py-80 text-white" style="background-image: url(<?php echo esc_url(get_field('cta_background_image')); ?>);">
            <div class="max-w-screen-lg mx-auto text-left">
                <?php if (get_field('cta_content')) { ?>
                    <h2 class="w-3/6 mx-4 text-white">
                        <?php echo esc_html(get_field('cta_content', false, false)); ?>
                    </h2>
                <?php } ?>
                <?php if (get_field('cta_button_text')) { ?>
                    <a class="btn bg-primary_orange text-white py-2 px-6 mx-4 rounded" href="<?php echo esc_url(get_field('cta_button_link')); ?>">
                        <?php echo esc_html(get_field('cta_button_text')); ?>
                    </a>
                <?php } ?>
            </div>
        </div>
    <?php } ?>


</main>

<?php get_footer(); ?>
