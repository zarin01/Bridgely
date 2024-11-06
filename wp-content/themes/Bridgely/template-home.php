<?php /* Template Name: Home */ 
/* Classes that are not Tailwind but arent accessing CSS, these classes are used for JS: 
    home-section-1
    page-animate-block




*/
?>

<?php get_header(); ?>

<main id="content" class="home">

    <?php /************************
	*
	*         Section 1
	* home-section-1 used for animation JS
	* *************************/ ?>

    <div 
        class="relative overflow-hidden bg-no-repeat bg-cover bg-top pb-64 home-section-1 page-animate-block" 
        id="home-intro-hero"
        <?php if (get_field('home_1_background_image')) { 
            echo 'style="background-image: url(' . get_field('home_1_background_image') . ');"'; 
        } ?>
    >
        <div class="relative text-text-primary_white max-w-1210 px-5 mx-auto mt-0.5 text-shadow">
            <div class="relative pt-44 pb-28">
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

        <!-- Adjusted SVG container with bottom positioning -->
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
    * home-section-2 class adds in the Text Animation, removed CSS.
    * changing ID used for JS purposes
    * *************************/ ?>

    <div id="changing" class="relative mt-36 h-128 md:mt-5 md:h-500 xl2:py-12 home-section-2">
        <div class="relative max-w-1210 mx-auto x840:flex x840:flex-row flex-col x840:items-center px-5 py-0">
            <div class="flex items-center justify-center">
                <div class="relative w-full md:w-620 max-lg:pr-14 md:pr-6 md:mb-0 pr-0 mb-6">
                    <?php if( get_field('home_2_paragraph_part') ) { ?>
                        <p class="animateRise mb-5 md:text-left max-sm:text-center"><?php echo get_field('home_2_paragraph_part'); ?></p>
                    <?php } ?>
                </div>

                <div class="relative w-full md:pl-2 mt-5 md:mt-0 md:text-left max-sm:text-center md:w-calc-100-minus-420 lg:w-calc-100-minus-820 lg:mt-5">
                    <?php if( get_field('home_2_title_line') ) { ?>
                        <h2 class="animateRise font-bold text-2xl md:text-5xl leading-9 md:leading-16"><?php echo get_field('home_2_title_line'); ?></h2>
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
    * home-section-3 used for JS css commented out
    * *************************/ ?>

      <div class="home-section-3">         
        <div class="bg-primary_gray py-0 pb-12">
            <div class="relative max-w-1210 px-5 mx-auto">
                <div class="w-4/5 mx-auto">
                    
                    <?php if (get_field('home_section_3_video_url')) { ?>
                    
                        <h3 class="text-primary_white text-center font-bold text-4xl py-6 px-0">
                            <?php echo get_field('home_section_3_video_title_2'); ?>
                        </h3>
                    
                        <div class="relative" style="padding:56.25% 0 0 0;">
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
        <div class="relative text-white max-w-1210 mx-auto primary-link px-4 md:px-0">

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

                <div class="animateRise dotted_bridge">
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

            <div class="text-wrap mx-auto max-w-[840px] mt-8">
                <?php if( get_field('partners_page_footer_section_text') ) { ?>
                    <p class="text-white footer_section_text"><?php echo get_field('partners_page_footer_section_text'); ?></p>
                <?php } ?>
            </div>
        </div>

        <div class="absolute w-full overflow-hidden bottom-[-4px] left-0">
            <svg viewBox="0 0 1658 59" xmlns="http://www.w3.org/2000/svg">
                <path d="M1680 53.115V58.1982H0V53.1003C550.124 -17.7001 1129.88 -17.7001 1680 53.1003V53.115Z" fill="#FFF7DE" />
            </svg>
        </div>
    </div>


    
    <?php /************************
    *
    *         Locally led
    * 
    * 
    * animateRise used for JS
    * *************************/ ?>
                
    <div class="relative py-12 text-primary_gray bg-text-primary_white">
        <div class="center mx-auto">
            <div class="relative flex flex-col x960:flex-row gap-8 mb-10 w-full">
                
                <div class="relative w-full pr-6p">
                    <?php if( get_field('home_3_left_title') ) { ?>
                    <h2 class="text-primary_gray animateRise"><?php echo get_field('home_3_left_title'); ?></h2>
                    <?php } ?>
                    <?php if( get_field('home_3_left_copy') ) { ?>
                    <p class="text-primary_gray animateRise"><?php echo get_field('home_3_left_copy'); ?></p>
                    <?php } ?>
                </div>
                    
                <div class="relative flex-none x960:w-1/2 x960:pl-9p">
                    <?php if( get_field('home_3_right_title') ) { ?>
                    <h2 class="text-primary_gray animateRise"><?php echo get_field('home_3_right_title'); ?></h2>
                    <?php } ?>
                    <?php if( get_field('home_3_right_copy') ) { ?>
                    <p class="text-primary_gray animateRise">text<?php echo get_field('home_3_right_copy'); ?></p>
                    <?php } ?>
                </div>
                    
            </div>
        </div>
    </div>

    <div class="bg-primary_gray py-6">
        <div class="center mx-auto">
            <div class="w-4/5 mx-auto">
                <?php if (get_field('home_section_3_video_url_2')) { ?>
                    <h3 class="text-text-primary_white text-center text-4xl font-bold py-6">
                        <?php echo get_field('home_section_3_video_title'); ?>
                    </h3>
                    <div class="relative pb-[56.25%]">
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

    <div class="relative bg-[#FFF7DE] text-primary_gray py-12">
        <div class="center">
            <?php if( get_field('bottom_title') ) { ?>
              <h2 class="text-center text-primary_gray"><?php echo get_field('bottom_title'); ?></h2>
            <?php } ?>
            
            <div class="flex fifty-fifty-fancy-split mx-auto max-w-[1170px] flex-none basis-1/2 text-primary_gray">
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
    *committed-to-text-after After Image
    *************************/ ?>

    <div class="page-animate-block">
        <div class="center py-[280px] md:py-[70px]">
            <?php if( get_field('home_4_intro_text') ) : ?>
                <h2 class="animateRise text-center mb-[86px]">
                    <?php echo get_field('home_4_intro_text'); ?>
                </h2>
            <?php endif; ?>

            <?php if( get_field('home_4_support_line') ) : ?>
                <div class="committed-to-text text-primary_orange animateRise committed-to-text-after flex justify-center items-center text-[23px] font-bold leading-[115%] mt-[40px]">
                    <?php echo get_field('home_4_support_line'); ?>
                </div>
            <?php endif; ?>

            <div class="flex flex-row mt-12">
                <div class="animateRise text-center w-[360px] mx-auto">
                    <?php if( get_field('home_4_column_1_title') ) : ?>
                        <div class="icon-wrap w-[50px] mb-[14px] mx-auto">
                            <img src="<?php bloginfo('template_directory'); ?>/library/images/Icon_Bridgely-Safety.png" style="width: 50px; height: 50px;" alt="" class="w-full h-full" />
                        </div>
                        <h3 class="font-poppins font-medium mb-[23px] text-[30px] leading-[1.15]"><?php echo get_field('home_4_column_1_title'); ?></h3>
                    <?php endif; ?>
                    <?php if( get_field('home_4_column_1_copy') ) : ?>
                        <p class="text-left"><?php echo get_field('home_4_column_1_copy'); ?></p>
                    <?php endif; ?>
                </div>

                <div class="col col2 animateRise text-center w-[360px] mx-auto">
                    <?php if( get_field('home_4_column_2_title') ) : ?>
                        <div class="flex justify-center items-center">
                            <img src="<?php bloginfo('template_directory'); ?>/library/images/Icon_Bridgely-Search.png" style="width: 50px; height: 50px;" alt="" class="w-full h-full" />
                        </div>
                        <h3 class="font-poppins font-medium mb-[23px] text-[30px] leading-[1.15]"><?php echo get_field('home_4_column_2_title'); ?></h3>
                    <?php endif; ?>
                    <?php if( get_field('home_4_column_2_copy') ) : ?>
                        <p class="text-left"><?php echo get_field('home_4_column_2_copy'); ?></p>
                    <?php endif; ?>
                </div>

                <div class="col col3 animateRise text-center w-[360px] mx-auto">
                    <?php if( get_field('home_4_column_3_title') ) : ?>
                        <div class="icon-wrap w-[50px] mb-[14px] mx-auto">
                            <img src="<?php bloginfo('template_directory'); ?>/library/images/Icon_Bridgely-Collaboration.png" style="width: 50px; height: 50px;" alt="" class="w-full h-full" />
                        </div>
                        <h3 class="font-poppins font-medium mb-[23px] text-[30px] leading-[1.15]"><?php echo get_field('home_4_column_3_title'); ?></h3>
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
    
    <div class="relative pb-[50px] bg-[#FFF7DE] overflow-hidden z-30 text-left">
        <div class="relative z-10">
          <div class="absolute top-0 left-[-10px] w-[calc(100%+20px)] overflow-hidden">
              <svg class="w-full" viewBox="0 0 1680 65" xmlns="http://www.w3.org/2000/svg">
                <path d="M1680 65V0H-3V64.9233C548.107 -8.56355 1128.89 -8.56355 1680 64.9233V65Z" fill="#FFF" />
              </svg>
          </div>
        </div>
        <div class="center">

            <div class="flex flex-col md:flex-row">

                <div class="max-w-none pr-50 w-1/2 flex justify-center items-center flex-col">
                    <?php if( get_field('home_6_title') ) { ?>
                    <h2 class="animateRise mb-[26px] leading-[1.3]"><?php echo get_field('home_6_title'); ?></h2>
                    <?php } ?>
                    <?php if( get_field('home_6_subtitle') ) { ?>
                    <p class="text-[18px] leading-[1.5] animateRise"><?php echo get_field('home_6_subtitle'); ?></p>
                    <?php } ?>
                    <?php if( have_rows('home_6_list_items') ): ?>
                    <ul class="animateRise">
                        <?php while( have_rows('home_6_list_items') ) : the_row(); ?>
                        <li><?php the_sub_field('list_item'); ?></li>
                        <?php endwhile; ?>
                    </ul>
                    <?php endif; ?>
                    <?php if( get_field('download_app') ) { ?>
                    <div class="pt-5 animateRise">
                        <?php echo get_field('download_app'); ?></div>
                    <?php } ?>
                </div>

                <div class="block z-[1000] hidden md:block">
                    <?php if( get_field('home_6_section_image') ) { ?>
                    <?php $theImage = get_field('home_6_section_image'); ?>
                    <img src="<?php echo $theImage['url']; ?>" alt="<?php echo $theImage['alt']; ?>" class="animateRise" />
                    <?php } ?>
                </div>

            </div>

        </div>

        <div class="center">

            <div class="section-7-intro-line"><?php // the_field('home_7_intro_text'); ?></div>

            <?php $blockCounter = 0; ?>

            <?php if( have_rows('home_7_content_blocks') ): ?>
            <div class="temp">
                <?php while( have_rows('home_7_content_blocks') ) : the_row(); ?>

                <?php if($blockCounter != 0) { ?>
                <div class="tan-divider animateRise"></div>
                <?php } ?>

                <div class="tan-split-section animateRise flex <?php if($blockCounter % 2 == 0) { echo 'flex-row-reverse'; } ?>">
                    <div class="col col-left">
                        <?php $theImage = get_sub_field('image'); ?>
                        <img src="<?php echo $theImage['url']; ?>" alt="<?php echo $theImage['alt']; ?>" class="w-full" />
                    </div>

                    <div class="col col-right">
                        <div class="inner-copy-wrap">
                            <?php if(get_sub_field('title')) { ?>
                            <h3 class="text-h2"><?php the_sub_field('title'); ?></h3>
                            <?php } ?>
                            <?php if(get_sub_field('bullet_no')) { ?>
                            <div class="text-point yes">
                                <p><?php the_sub_field('bullet_no'); ?></p>
                            </div>
                            <?php } ?>
                            <?php if(get_sub_field('bullet_yes')) { ?>
                            <div class="text-point no">
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
        <div class="absolute top-0 left-[-10px] w-[calc(100%+20px)] overflow-hidden">
          <svg class="w-full" viewBox="0 0 1680 65" xmlns="http://www.w3.org/2000/svg">
              <path d="M1680 65V0H-3V64.9233C548.107 -8.56355 1128.89 -8.56355 1680 64.9233V65Z" fill="#FFF7DE" />
          </svg>
        </div>
    </div>
                
    <div class="home-section-8 page-animate-block bg-primary_gray relative pt-[110px] bg-[length:160%] md:bg-[length:130%] lg:bg-[length:110%] xl:bg-[length:100%] xl:pt-32 2xl:pt-[140px] 3xl:pt-[160px] 4xl:pt-[170px] 5xl:pt-44 6xl:pt-[200px] 7xl:pt-[220px] 8xl:pt-[240px] 9xl:pt-[260px] 10xl:pt-[280px] 11xl:pt-[300px]" id="contactus">
        <div class="center">
                                
            <?php if( get_field('reach_out_title') ) { ?>
            <div class="animateRise relative text-center block font-poppins font-bold leading-[106%] text-text-primary_white mb-[32px] fontSize-responsive_heading xl:mb-[18px] xl:text-[160px]">
                <?php echo get_field('reach_out_title'); ?>
            </div>
            <?php } ?>
            <?php if( get_field('reach_out_subtitle') ) { ?>
            <div class="animateRise text-center max-w-[618px] mx-auto mb-[60px] font-poppins font-semibold text-[30px] md:text-[21px] leading-[120%] text-[#FFF7DE]">
                <?php echo get_field('reach_out_subtitle'); ?>
            </div>
            <?php } ?>
            
            <div class="relative max-w-[700px] mx-auto text-center">
                <?php if( get_field('reach_out_form_title') ) { ?>
                <p class="animateRise"><?php echo get_field('reach_out_form_title'); ?></p>
                <?php } ?>
                
                <?php if( get_field('reach_out_form_embed') ) { ?>
                <div class="max-w-[624px] mx-auto animateRise">
                    <?php echo get_field('reach_out_form_embed'); ?>
                </div>
                <?php } ?>
            </div>
                
        </div>
                
       
    </div>
                

</main>

<?php get_footer(); ?>