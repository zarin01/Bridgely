<?php /* Template Name: Church Leaders */ ?>
<?php get_header(); ?>

<main id="content" class="bg-white">

    <?php /************************
    *         Section 1
    *************************/ ?>

    <div class="relative overflow-hidden bg-no-repeat bg-cover bg-top x840:pt-245 x840:pb-130 pb-96" style="background-image: url(<?php echo esc_url(get_field('church_leaders_page_1_banner_image')); ?>);">
        <div class="absolute w-full overflow-hidden -bottom-4 left-0">
            <svg viewBox="0 0 1658 59" xmlns="http://www.w3.org/2000/svg" class="w-full h-auto">
                <path d="M1680 53.115V58.1982H0V53.1003C550.124 -17.7001 1129.88 -17.7001 1680 53.1003V53.115Z"
                    fill="#FFF" />
            </svg>
        </div>
    </div>


    <?php /************************
    *         Section 2
    *************************/ ?>

    <div class="py-12 px-4">
        <div class="max-w-screen-lg mx-auto text-center">
            <?php if (get_field('church_leaders_page_1_intro_title')) { ?>
                <h1>
                    <?php echo get_field('church_leaders_page_1_intro_title'); ?>
                </h1>
            <?php } ?>
            <?php if (get_field('church_leaders_page_intro_subtitle_title')) { ?>
                <h3>
                    <?php echo get_field('church_leaders_page_intro_subtitle_title'); ?>
                </h3>
            <?php } ?>
            <?php if (get_field('church_leaders_page_1_intro_content')) { ?>
                <div class="text-left">
                    <?php echo get_field('church_leaders_page_1_intro_content'); ?>
                </div>
            <?php } ?>
        </div>

        <div class="x840:flex-none x960:flex text-center">
            <div class="bg-primary_white p-6 m-6 w-full">
                <?php if (get_field('church_leaders_left_column_title')) { ?>
                    <h2 class="text-primary_orange mb-4">
                        <?php echo get_field('church_leaders_left_column_title'); ?>
                    </h2>
                <?php } ?>
                <div class="pl-5 space-y-2 text-left">
                    <?php if (get_field('church_leaders_left_column_bullet')) { ?>
                        <img class="w-7 float-left" src="https://bridgely.org/wp-content/themes/Bridgely/library/images/Icon_Bridgely-Checkmark.png"><p class="pl-10">
                            <?php echo get_field('church_leaders_left_column_bullet'); ?></p>
                    <?php } ?>
                    <?php if (get_field('church_leaders_left_column_bullet_2')) { ?>
                        <img class="w-7 float-left" src="https://bridgely.org/wp-content/themes/Bridgely/library/images/Icon_Bridgely-Checkmark.png"><p class="pl-10">
                            <?php echo get_field('church_leaders_left_column_bullet_2'); ?></p>
                    <?php } ?>
                    </div>
            </div>
            <div class="w-auto my-auto -m-10 z-20"><img class="mx-auto" src="https://bridgely.org/wp-content/themes/Bridgely/library/images/icon-bridge2.png"></div>

            <div class="bg-primary_white p-6 m-6 text-left w-full">
                <img class="mx-auto w-14" src="/wp-content/themes/Bridgely/library/images/Bridgley-icon.png">
                <?php if (get_field('church_leaders_right_column_content')) { ?>
                    <p class="text-gray-700 text-left">
                        <?php echo get_field('church_leaders_right_column_content'); ?>
                    </p>
                <?php } ?>
            </div>
        </div>
    </div>


    <?php /************************
    *         Section 3
    *************************/ ?>

    <div class="py-16 mx-4 bg-white">
        <div class="max-w-screen-lg mx-auto text-center">
            <?php if (get_field('church_missions_intro_title')) { ?>
                <h1>
                    <?php echo esc_html(get_field('church_missions_intro_title')); ?>
                </h1>
            <?php } ?>
        </div>

        <div class="flex flex-wrap items-center justify-center">
            <div class="w-full md:w-1/2 lg:w-1/3">
                <?php if (get_field('church_missions_highlight_image')) { ?>
                    <img src="<?php echo esc_url(get_field('church_missions_highlight_image')); ?>" alt="Highlight">
                <?php } ?>
            </div>

            <div class="w-full md:w-1/2 lg:w-1/3">
                <?php if (get_field('church_missions_content_box')) { ?>
                    <div class="text-lg bg-primary_white p-10">
                        <?php echo get_field('church_missions_content_box'); ?>
                    </div>
                <?php } ?>
            </div>
        </div>

        <div class="text-left mx-auto mt-8 max-w-screen-lg">
            <?php if (get_field('church_missions_subsection_title')) { ?>
                <h3>
                    <?php echo get_field('church_missions_subsection_title'); ?>
                </h3>
            <?php } ?>
            <?php if (get_field('church_missions_subsection_content')) { ?>
                <p class="text-gray-600">
                    <?php echo get_field('church_missions_subsection_content'); ?>
                </p>
            <?php } ?>
        </div>
    </div>

    <?php /************************
    *
    *         Section 4
    *
    *************************/ ?>

            <?php if( get_field('3_col_support_line') ) : ?>
                <div class="committed-to-text relative text-primary_orange mb-4 h-77 x840:committed-to-text-after flex justify-center items-start text-23 font-bold leading-normal uppercase">
                <span class="bg-white z-10 px-2"><?php echo get_field('3_col_support_line'); ?></span>
                </div>
            <?php endif; ?>

            <div class="flex x840:flex-row flex-col mt-12 mx-4">

                <div class="x960:w-360 max-w-500 w-auto mx-auto x906:px-2.5 px-1">
                    <?php if( get_field('3_col_select_icon') ) : ?>
                        <div class="w-12 mb-4 mx-auto">
                            <img src="<?php bloginfo('template_directory'); ?><?php echo get_field('3_col_select_icon'); ?>" class="w-20 h-auto" alt="" />
                        </div>
                    <?php endif; ?>

                    <?php if( get_field('3_col_column_1_copy') ) : ?>
                        <p class="text-left"><?php echo get_field('3_col_column_1_copy'); ?></p>
                    <?php endif; ?>
                </div>

                <div class="x960:w-360 max-w-500 w-auto mx-auto x906:px-2.5 px-1">
                    <?php if( get_field('3_col_select_icon_2') ) : ?>
                        <div class="w-12 mb-4 mx-auto">
                            <img src="<?php bloginfo('template_directory'); ?><?php echo get_field('3_col_select_icon_2'); ?>" class="w-20 h-auto" alt="" />
                        </div>
                    <?php endif; ?>

                    <?php if( get_field('3_col_column_2_copy') ) : ?>
                        <p class="text-left"><?php echo get_field('3_col_column_2_copy'); ?></p>
                    <?php endif; ?>
                </div>

                <div class="x960:w-360 max-w-500 w-auto mx-auto x906:px-2.5 px-1">
                    <?php if( get_field('3_col_select_icon_3') ) : ?>
                        <div class="w-12 mb-4 mx-auto">
                            <img src="<?php bloginfo('template_directory'); ?><?php echo get_field('3_col_select_icon_3'); ?>" class="w-20 h-auto" alt="" />
                        </div>
                    <?php endif; ?>

                    <?php if( get_field('3_col_column_3_copy') ) : ?>
                        <p class="text-left"><?php echo get_field('3_col_column_3_copy'); ?></p>
                    <?php endif; ?>
                </div>

            </div>
        </div>
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
