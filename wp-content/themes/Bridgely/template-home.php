<?php /* Template Name: Home */ 
/* Classes that are not Tailwind but arent accessing CSS, these classes are used for JS: 
    * home-section-1
    * page-animate-block
    * animateRise

    Section 2:
    * home-section-2 class adds in the Text Animation, removed CSS.
    * changing ID used for JS purposes

    Section 3:
    * home-section-3 used for JS css commented out
    * animateRise used for JS
    * fifty-fifty-fancy-split Added to tailwind config file as plugin

    Section 4
    * committed-to-text-after added to config
    * Reused ID download_app

    Section 8
    * home-section-8
*/
?>

<?php get_header(); ?>

<main id="content" class="home">

    <?php /************************
	*
	*         Section 1
	* 
	* *************************/ ?>

    <div 
        class="relative overflow-hidden bg-no-repeat bg-cover bg-top pb-64 home-section-1 page-animate-block" 
        id="home-intro-hero"
        <?php if (get_field('home_1_background_image')) { 
            echo 'style="background-image: url(' . get_field('home_1_background_image') . ');"'; 
        } ?>
    >
        <div class="relative text-primary_white max-w-1210 px-5 mx-auto mt-0.5 text-shadow">
            <div class="relative x840:pt-245 x840:pb-130 pt-44 pb-28">
                <div class="relative text-primary_white max-w-610 text-left ml-0">
                    <?php if( get_field('home_1_main_title') ) { ?>
                        <h1 class="animateRise text-primary_white font-bold text-shadow-lg"><?php echo get_field('home_1_main_title'); ?></h1>
                    <?php } ?>
                    <?php if( get_field('home_1_support_title') ) { ?>
                        <p class="text-shadow-sm max-w-610 font-bold text-lg animateRise">
                            <?php echo get_field('home_1_support_title'); ?>
                        </p>
                    <?php } ?>
                </div>
            </div>
        </div>

        <div class="absolute w-full overflow-hidden -bottom-4 left-0">
            <svg viewBox="0 0 1658 59" xmlns="http://www.w3.org/2000/svg">
                <path d="M1680 53.115V58.1982H0V53.1003C550.124 -17.7001 1129.88 -17.7001 1680 53.1003V53.115Z" fill="#FFF" />
            </svg>
        </div>
    </div>


    <?php /************************
    *
    *         Section 2
    * 
    * *************************/ ?>

    <div id="changing" class="home-section-2 relative x860:mt-36 mt-20 x840:mt-5 x840:pt-10 x840:pb-24">
        <div class="relative max-w-1210 mx-auto px-5 py-0">
            <div class="flex flex-col-reverse x840:flex-row x840:items-start x840:justify-center">
                <!-- First section: Paragraph -->
                <div class="relative w-full lg:w-620 max-lg:pr-14 md:pr-6 md:mb-0 pr-0 mb-6">
                    <?php if( get_field('home_2_paragraph_part') ) { ?>
                        <p class="animateRise mb-5 md:text-left max-sm:text-center"><?php echo get_field('home_2_paragraph_part'); ?></p>
                    <?php } ?>
                </div>
                    
                <!-- Second section: Title and Button -->
                <div class="relative w-full md:pl-2 mt-5 md:mt-0 md:text-left lg:w-calc-100-minus-820 lg:mt-5">
                    <?php if( get_field('home_2_title_line') ) { ?>
                        <h2 class="animateRise font-bold text-calc-32-plus-18 md:text-5xl leading-9 md:leading-16"><?php echo get_field('home_2_title_line'); ?></h2>
                    <?php } ?>
                    
                    <?php if( get_field('home_2_button_text') ) { ?>
                        <p class="mt-4 md:mt-6">
                            <a href="<?php echo get_field('home_2_button_link'); ?>"
                            class="animateRise relative inline-block px-4 py-3 font-poppins font-semibold text-base leading-4 uppercase tracking-tight text-center text-white bg-primary_orange rounded-4"><?php echo get_field('home_2_button_text'); ?></a>
                        </p>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>







    <?php /************************
    *
    *         Section 3
    * 
    * *************************/ ?>

      <div class="home-section-3">         
        <div class="bg-primary_gray pt-10 pb-12">
            <div class="relative max-w-1210 px-5 mx-auto">
                <div class="w-4/5 mx-auto">
                    
                    <?php if (get_field('home_section_3_video_url')) { ?>
                    
                        <h3 class="text-primary_white text-center font-bold text-4xl py-6 px-0 mb-6">
                            <?php echo get_field('home_section_3_video_title_2'); ?>
                        </h3>
                    
                        <div class="relative pt-56p">
                            <iframe src="<?php echo get_field('home_section_3_video_url'); ?>" 
                                class="absolute top-0 left-0 w-full h-full"
                                frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen>
                            </iframe>
                        </div>
                        <script src="https://player.vimeo.com/api/player.js"></script>
                    <?php } ?>
                </div>
            </div>
        </div>

                    
    <?php /************************
    *
    *         Choose Your Start
    * 
    * *************************/ ?>
    
    <div class="relative bg-choose-your-start pt-32 pb-44 text-center bg-cover bg-no-repeat bg-center">
        <div class="relative text-white max-w-1210 mx-auto primary-link px-4 px-5">

            <?php if( get_field('partners_page_2_title') ) { ?>
                <h2 class="text-custom pb-10 text-responsive"><?php echo get_field('partners_page_2_title'); ?></h2>
            <?php } ?>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-12 mx-auto">
                <div class="animateRise primary-link">
                    <?php if( get_field('partners_page_2_column_1_title') ) { ?>
                        <div class="text-wrap text-white text-xl leading-6 font-medium font-sans">
                            <?php echo get_field('partners_page_2_column_1_title'); ?>
                        </div>
                    <?php } ?>
                </div>

                <div class="animateRise">
                    <?php if( get_field('partners_page_2_column_2_title') ) { ?>
                        <div class="text-wrap text-white text-xl leading-6 font-medium font-sans">
                            <?php echo get_field('partners_page_2_column_2_title'); ?>
                        </div>
                    <?php } ?>
                </div>

                <div class="animateRise">
                    <?php if( get_field('partners_page_2_column_3_title') ) { ?>
                        <div class="text-wrap text-white text-xl leading-6 font-medium font-sans">
                            <?php echo get_field('partners_page_2_column_3_title'); ?>
                        </div>
                    <?php } ?>
                </div>
            </div>

            <div class="text-wrap mx-auto max-w-840 mt-8">
                <?php if( get_field('partners_page_footer_section_text') ) { ?>
                    <p class="text-white footer_section_text"><?php echo get_field('partners_page_footer_section_text'); ?></p>
                <?php } ?>
            </div>
        </div>

        <div class="absolute w-full overflow-hidden -bottom-4 left-0">
            <svg viewBox="0 0 1658 59" xmlns="http://www.w3.org/2000/svg">
                <path d="M1680 53.115V58.1982H0V53.1003C550.124 -17.7001 1129.88 -17.7001 1680 53.1003V53.115Z" fill="#FFF7DE" />
            </svg>
        </div>
    </div>


    
    <?php /************************
    *
    *         Locally led
    * 
    * *************************/ ?>
                
    <div class="relative py-12 text-dark_blue bg-primary_white">
        <div class="relative max-w-1210 px-5 mx-auto">
            <div class="relative flex flex-col x960:flex-row gap-8 mb-10 w-full">
                
                <div class="relative w-full pr-6p">
                    <?php if( get_field('home_3_left_title') ) { ?>
                    <h2 class="text-dark_blue x960:text-5xl x960:max-w-380 animateRise"><?php echo get_field('home_3_left_title'); ?></h2>
                    <?php } ?>
                    <?php if( get_field('home_3_left_copy') ) { ?>
                    <p class="text-dark_blue animateRise"><?php echo get_field('home_3_left_copy'); ?></p>
                    <?php } ?>
                </div>
                    
                <div class="relative flex-none x960:w-1/2 x960:pl-9p">
                    <?php if( get_field('home_3_right_title') ) { ?>
                    <h2 class="text-dark_blue animateRise"><?php echo get_field('home_3_right_title'); ?></h2>
                    <?php } ?>
                    <?php if( get_field('home_3_right_copy') ) { ?>
                    <p class="text-dark_blue animateRise"><?php echo get_field('home_3_right_copy'); ?></p>
                    <?php } ?>
                </div>
                    
            </div>
        </div>
    </div>

    <div class="bg-primary_gray py-6">
        <div class="relative max-w-1210 px-5 mx-auto">
            <div class="w-4/5 mx-auto">
                <?php if (get_field('home_section_3_video_url_2')) { ?>
                    <h3 class="text-primary_white text-center text-4xl font-bold py-6">
                        <?php echo get_field('home_section_3_video_title'); ?>
                    </h3>
                    <div class="relative pb-56p">
                        <iframe src="<?php echo get_field('home_section_3_video_url_2'); ?>" 
                            class="absolute top-0 left-0 w-full h-full"
                            frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen>
                        </iframe>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>


    <?php /************************
    *
    * Break Boundaries
    * 
    * 
    * *************************/ ?>

    <div class="relative bg-primary_white text-dark_blue py-12">
        <div class="relative max-w-1210 px-5 mx-auto">
            <?php if( get_field('bottom_title') ) { ?>
              <h2 class="text-center text-dark_blue"><?php echo get_field('bottom_title'); ?></h2>
            <?php } ?>
            
            <div class="flex fifty-fifty-fancy-split mx-auto max-w-screen-xl flex-col x960:flex-row x960:flex-none x960:basis-1/2 text-dark_blue">
                <?php if( get_field('bottom_copy') ) { ?>
                <?php echo get_field('bottom_copy'); ?>
                <?php } ?>
            </div>
                
        </div>
    </div>
                


    <?php /************************
    *
    *         Section 4
    *
    *************************/ ?>

    <div class="page-animate-block x960:pt-140 x960:pb-140">
        <div class="relative max-w-1210 px-5 mx-auto">
            <?php if( get_field('home_4_intro_text') ) : ?>
                <h2 class="animateRise text-center mb-20 x960:mt-0 mt-8">
                    <?php echo get_field('home_4_intro_text'); ?>
                </h2>
            <?php endif; ?>

            <?php if( get_field('home_4_support_line') ) : ?>
                <div class="committed-to-text relative text-custom_goldhover mb-4 h-77 animateRise committed-to-text-after flex justify-center items-start text-23 font-bold leading-normal uppercase">
                    <?php echo get_field('home_4_support_line'); ?>
                </div>
            <?php endif; ?>

            <div class="flex x840:flex-row flex-col mt-12">
                <div class="animateRise text-center x960:w-360 max-w-500 w-auto mx-auto x906:px-2.5 px-1">
                    <?php if( get_field('home_4_column_1_title') ) : ?>
                        <div class="w-12 mb-4 mx-auto">
                            <img src="<?php bloginfo('template_directory'); ?>/library/images/Icon_Bridgely-Safety.png" class="w-12 h-12" alt="" />
                        </div>
                        <h3 class="font-poppins font-medium mb-6 text-3xl "><?php echo get_field('home_4_column_1_title'); ?></h3>
                    <?php endif; ?>
                    <?php if( get_field('home_4_column_1_copy') ) : ?>
                        <p class="text-left"><?php echo get_field('home_4_column_1_copy'); ?></p>
                    <?php endif; ?>
                </div>

                <div class="animateRise text-center x960:w-360 max-w-500 w-auto mx-auto x906:px-2.5 px-1">
                    <?php if( get_field('home_4_column_2_title') ) : ?>
                        <div class="flex justify-center items-center">
                            <img src="<?php bloginfo('template_directory'); ?>/library/images/Icon_Bridgely-Search.png" class="w-12 h-12" alt="" />
                        </div>
                        <h3 class="font-poppins font-medium mb-6 text-3xl "><?php echo get_field('home_4_column_2_title'); ?></h3>
                    <?php endif; ?>
                    <?php if( get_field('home_4_column_2_copy') ) : ?>
                        <p class="text-left"><?php echo get_field('home_4_column_2_copy'); ?></p>
                    <?php endif; ?>
                </div>

                <div class="animateRise text-center x960:w-360 max-w-500 w-auto mx-auto x906:px-2.5 px-1">
                    <?php if( get_field('home_4_column_3_title') ) : ?>
                        <div class="w-12 mb-4 mx-auto">
                            <img src="<?php bloginfo('template_directory'); ?>/library/images/Icon_Bridgely-Collaboration.png" class="w-12 h-12" alt="" />
                        </div>
                        <h3 class="font-poppins font-medium mb-6 text-3xl "><?php echo get_field('home_4_column_3_title'); ?></h3>
                    <?php endif; ?>
                    <?php if( get_field('home_4_column_3_copy') ) : ?>
                        <p class="text-left"><?php echo get_field('home_4_column_3_copy'); ?></p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>



    <?php /************************
    *
    *         Section 5, 6, 7
    * 
    *************************/ ?>

    <div id="download_app"> </div>
    
    <div class="relative pb-12 bg-primary_white overflow-hidden z-30 text-left">
        <div class="relative z-10">
          <div class="absolute top-0 -left-10 w-calc-100-plus-20 overflow-hidden">
              <svg class="w-full" viewBox="0 0 1680 65" xmlns="http://www.w3.org/2000/svg">
                <path d="M1680 65V0H-3V64.9233C548.107 -8.56355 1128.89 -8.56355 1680 64.9233V65Z" fill="#FFF" />
              </svg>
          </div>
        </div>
        <div class="a-home-section home-section-5 relative max-w-1210 px-5 mx-auto">

            <div class="flex flex-col md:flex-row">

                <div class="pr-50 x960:pt-0 pt-20 x960:w-1/2 max-w-710 flex justify-center items-center flex-col">
                    <?php if( get_field('home_6_title') ) { ?>
                    <h2 class="animateRise mb-7 leading-snug"><?php echo get_field('home_6_title'); ?></h2>
                    <?php } ?>
                    <?php if( get_field('home_6_subtitle') ) { ?>
                    <p class="text-lg leading-relaxed animateRise"><?php echo get_field('home_6_subtitle'); ?></p>
                    <?php } ?>
                    <?php if( have_rows('home_6_list_items') ): ?>
                    <ul class="animateRise">
                        <?php while( have_rows('home_6_list_items') ) : the_row(); ?>
                        <li><?php the_sub_field('list_item'); ?></li>
                        <?php endwhile; ?>
                    </ul>
                    <?php endif; ?>
                    <?php if( get_field('download_app') ) { ?>
                    <div class="x960:pt-5 animateRise">
                        <?php echo get_field('download_app'); ?></div>
                    <?php } ?>
                </div>

                <div class="z-10 col col2 imagecol x960:block hidden">
                    <?php if( get_field('home_6_section_image') ) { ?>
                    <?php $theImage = get_field('home_6_section_image'); ?>
                    <img src="<?php echo $theImage['url']; ?>" alt="<?php echo $theImage['alt']; ?>" class="animateRise" />
                    <?php } ?>
                </div>

            </div>

        </div>

        <div class="relative max-w-1210 px-5 mx-auto">

            <div class="mb-10 font-poppins font-bold text-center text-custom_gold text-3xl leading-tight md:mb-16"><?php // the_field('home_7_intro_text'); ?></div>

            <?php $blockCounter = 0; ?>

            <?php if( have_rows('home_7_content_blocks') ): ?>
            <div class="m-0 p-0 border-0">
                <?php while( have_rows('home_7_content_blocks') ) : the_row(); ?>

                <?php if($blockCounter != 0) { ?>
                <div class="relative block h-px mb-9 bg-primary_orange animateRise"></div>
                <?php } ?>

                <div class="relative mb-9 animateRise flex flex-col x840:flex-row <?php if($blockCounter % 2 == 0) { echo 'x840:flex-row-reverse'; } ?>">
                    <div class="max-w-400 lg:pl-12 x840:pl-10 sm:pl-7.5 lg:pr-12 x840:pr-10 sm:pr-7.5 lg:w-auto md:w-1/2 sm:max-w-none mb-0">
                        <?php $theImage = get_sub_field('image'); ?>
                        <img src="<?php echo $theImage['url']; ?>" alt="<?php echo $theImage['alt']; ?>" class="w-full pb-3" />
                    </div>

                    <div class="pr-11 xl2:pr-12 x840:w-1/2 x960:pr-10 x840:pl-0 x840:pr-8">
                        <div>
                            <?php if(get_sub_field('title')) { ?>
                                <h3 class="mb-6 text-calc-32-plus-18"><?php the_sub_field('title'); ?></h3>
                            <?php } ?>
                            <?php if(get_sub_field('bullet_no')) { ?>
                                <div class="relative pl-12 text-point yes">
                                    <p><?php the_sub_field('bullet_no'); ?></p>
                                </div>
                            <?php } ?>
                            <?php if(get_sub_field('bullet_yes')) { ?>
                                <div class="relative pl-12 text-point no">
                                    <p><?php the_sub_field('bullet_yes'); ?></p>
                                </div>
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
	*         Section 6
	* 
	* *************************/ ?>


    <?php /************************
	*
	*         Section 7
	* 
	* *************************/ ?>


    <?php /************************
	*
	*         Section 8
	* home-section-8 JS used class
	* *************************/ ?>
    <div class="relative z-10">
        <div class="absolute top-0 -left-10 w-calc-100-plus-20 overflow-hidden">
          <svg class="w-full" viewBox="0 0 1680 65" xmlns="http://www.w3.org/2000/svg">
              <path d="M1680 65V0H-3V64.9233C548.107 -8.56355 1128.89 -8.56355 1680 64.9233V65Z" fill="#FFF7DE" />
          </svg>
        </div>
    </div>
                
    <div class="home-section-8 page-animate-block bg-primary_gray relative x840:p-28 p-14 bg-160 md:bg-130 lg:bg-110 xl:bg-100 xl:p-32 2xl:p-36" id="contactus">
        <div class="relative max-w-1210 px-5 mx-auto">
                                
            <?php if( get_field('reach_out_title') ) { ?>
            <div class="animateRise relative text-center block font-poppins font-bold leading-tight text-primary_white mb-8 fontSize-responsive_heading xl:mb-4.5 xl:160">
                <?php echo get_field('reach_out_title'); ?>
            </div>
            <?php } ?>
            <?php if( get_field('reach_out_subtitle') ) { ?>
            <div class="animateRise text-center max-w-610 mx-auto mb-16 font-poppins font-semibold x840:text-3xl text-23 leading-relaxed text-primary_white">
                <?php echo get_field('reach_out_subtitle'); ?>
            </div>
            <?php } ?>
            
            <div class="relative max-w-[700px] mx-auto text-center">
                <?php if( get_field('reach_out_form_title') ) { ?>
                <p class="animateRise"><?php echo get_field('reach_out_form_title'); ?></p>
                <?php } ?>
                
                <?php if( get_field('reach_out_form_embed') ) { ?>
                <div class="max-w-700 mx-auto animateRise">
                    <?php echo get_field('reach_out_form_embed'); ?>
                </div>
                <?php } ?>
            </div>
                
        </div>
                
       
    </div>
                

</main>

<?php get_footer(); ?>