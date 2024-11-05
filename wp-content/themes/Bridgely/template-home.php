<?php /* Template Name: Home */ 
/* Classes that are not Tailwind but arent accessing CSS, these classes are used for JS: 
    home-section-1
    page-animate-block



 Classes that use CSS but are too customized for Tailwind:
    up-curve-contain



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
        class="relative overflow-hidden bg-no-repeat bg-cover bg-top pb-[250px] home-section-1 page-animate-block" 
        id="home-intro-hero"
        <?php if (get_field('home_1_background_image')) { 
            echo 'style="background-image: url(' . get_field('home_1_background_image') . ');"'; 
        } ?>>

        <div class="relative text-secondary_white max-w-[1210px] px-5 mx-auto mt-0.5 text-shadow">
            <div class="relative py-[245px] pb-[120px]">
                <div class="relative secondary_white max-w-[610px] text-left ml-0">
                    <?php if( get_field('home_1_main_title') ) { ?>
                        <h1 class="animateRise secondary_white font-bold text-shadow-lg"><?php echo get_field('home_1_main_title'); ?></h1>
                    <?php } ?>
                    <?php if( get_field('home_1_support_title') ) { ?>
                        <p class="text-shadow-sm max-w-[612px] font-bold text-lg animateRise">
                            <?php echo get_field('home_1_support_title'); ?>
                        </p>
                    <?php } ?>
                </div>
            </div>
        </div>

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
    * home-section-2 class adds in the Text Animation, removed CSS.
    * changing ID used for JS purposes
    * *************************/ ?>

    <div class="relative mt-[20px] max-w-[1700px] h-[500px] py-[20px] home-section-2" id="changing">
        <div class="max-w-[1170px] mx-auto flex items-center h-full">
            <div class="flex items-center justify-center">
                <div class="relative w-[620px] pr-[55px]">
                    <?php if( get_field('home_2_paragraph_part') ) { ?>
                        <p class="animateRise mb-5"><?php echo get_field('home_2_paragraph_part'); ?></p>
                    <?php } ?>
                </div>

                <div class="relative pl-[10px] w-calc-100-minus-820 mt-[20px] mr-0 mb-auto ml-0">
                    <?php if( get_field('home_2_title_line') ) { ?>
                        <h2 class="animateRise font-bold text-2xl text-5xl leading-[62.4px]"><?php echo get_field('home_2_title_line'); ?></h2>
                    <?php } ?>
                    
                    <?php if( get_field('home_2_button_text') ) { ?>
                        <p>
                            <a href="<?php echo get_field('home_2_button_link'); ?>" class="btn animateRise bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600 transition"><?php echo get_field('home_2_button_text'); ?></a>
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
        <div class="bg-[#141C29] py-0 pb-[50px]">
            <div class="relative max-w-[1210px] px-[20px] mx-auto">
                <div class="w-[80%] mx-auto">
                    
                    <?php if (get_field('home_section_3_video_url')) { ?>
                    
                        <h3 class="text-[#FFF7DE] text-center font-bold text-[35px] py-[25px] px-0">
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
    
    <div class="relative bg-choose-your-start pt-[120px] pb-[180px] text-center bg-cover bg-no-repeat bg-center" >
        <div class="relative text-white max-w-screen-xl mx-auto primary-link">

            <?php if( get_field('partners_page_2_title') ) { ?>
            <h2 class="text-custom pb-[40px] text-responsive"><?php echo get_field('partners_page_2_title'); ?></h2>
            <?php } ?>

            <div class="icon-wrap-section grid grid-cols-3 gap-[45px] mt-[45px] mx-auto">
                <div class="animateRise primary-link">
                    <?php if( get_field('partners_page_2_column_1_title') ) { ?>
                    <div class="text-wrap text-white text-[19px] leading-[24px] font-medium font-sans"><?php echo get_field('partners_page_2_column_1_title'); ?></div>
                    <?php } ?>
                </div>

                <div class="animateRise dotted_bridge">
                    <?php if( get_field('partners_page_2_column_2_title') ) { ?>
                    <div class="text-wrap text-white text-[19px] leading-[24px] font-medium font-sans"><?php echo get_field('partners_page_2_column_2_title'); ?></div>
                    <?php } ?>
                </div>

                <div class="animateRise">
                    <?php if( get_field('partners_page_2_column_3_title') ) { ?>
                    <div class="text-wrap text-white text-[19px] leading-[24px] font-medium font-sans"><?php echo get_field('partners_page_2_column_3_title'); ?></div>
                    <?php } ?>
                </div>
            </div>

            <div class="text-wrap mx-auto max-w-[840px]">
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
                
    <div class="relative py-[50px] text-darkgray bg-secondary_white">
        <div class="center mx-auto">
            <div class="relative flex flex-col sm:flex-row gap-8 mb-10 w-full">
                
                <div class="relative w-full pr-6p">
                    <?php if( get_field('home_3_left_title') ) { ?>
                    <h2 class="text-darkgray animateRise"><?php echo get_field('home_3_left_title'); ?></h2>
                    <?php } ?>
                    <?php if( get_field('home_3_left_copy') ) { ?>
                    <p class="text-darkgray animateRise"><?php echo get_field('home_3_left_copy'); ?></p>
                    <?php } ?>
                </div>
                    
                <div class="relative flex-none w-1/2 pl-9p">
                    <?php if( get_field('home_3_right_title') ) { ?>
                    <h2 class="text-darkgray animateRise"><?php echo get_field('home_3_right_title'); ?></h2>
                    <?php } ?>
                    <?php if( get_field('home_3_right_copy') ) { ?>
                    <p class="text-darkgray animateRise">text<?php echo get_field('home_3_right_copy'); ?></p>
                    <?php } ?>
                </div>
                    
            </div>
        </div>
    </div>

    <div class="bg-darkgray py-[25px]">
        <div class="center mx-auto">
            <div class="w-4/5 mx-auto">
                <?php if (get_field('home_section_3_video_url_2')) { ?>
                    <h3 class="text-secondary_white text-center text-[35px] font-bold py-[25px]">
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

    <div class="relative bg-[#FFF7DE] text-darkgray py-12">
        <div class="center">
            <?php if( get_field('bottom_title') ) { ?>
              <h2 class="text-center text-darkgray"><?php echo get_field('bottom_title'); ?></h2>
            <?php } ?>
            
            <div class="flex fifty-fifty-fancy-split mx-auto max-w-[1170px] flex-none basis-1/2 text-darkgray">
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

<div class="page-animate-block">
    <div class="center">
        <?php if( get_field('home_4_intro_text') ) : ?>
            <h2 class="section-4-intro animateRise text-center mb-[86px]">
                <?php echo get_field('home_4_intro_text'); ?>
            </h2>
        <?php endif; ?>

        <?php if( get_field('home_4_support_line') ) : ?>
            <div class="committed-to-text text-h4 text-primary animateRise committed-to-text-after">
                <?php echo get_field('home_4_support_line'); ?>
            </div>
        <?php endif; ?>

        <div class=" flex flex-row">
            <div class="animateRise text-center max-w-[600px] mx-auto">
                <?php if( get_field('home_4_column_1_title') ) : ?>
                    <div class="icon-wrap w-[50px] mb-[14px] mx-auto">
                        <img src="<?php bloginfo('template_directory'); ?>/library/images/Icon_Bridgely-Safety.png" style="width: 50px; height: 50px;" alt="" class="w-full h-full" />
                    </div>
                    <h3 class="text-h3"><?php echo get_field('home_4_column_1_title'); ?></h3>
                <?php endif; ?>
                <?php if( get_field('home_4_column_1_copy') ) : ?>
                    <p><?php echo get_field('home_4_column_1_copy'); ?></p>
                <?php endif; ?>
            </div>

            <div class="col col2 animateRise text-center max-w-[600px] mx-auto">
                <?php if( get_field('home_4_column_2_title') ) : ?>
                    <div class="icon-wrap w-[50px] h-[50px] mb-4 mx-auto">
                        <img src="<?php bloginfo('template_directory'); ?>/library/images/Icon_Bridgely-Search.png" alt="" class="w-full h-full" />
                    </div>
                    <h3 class="text-h3"><?php echo get_field('home_4_column_2_title'); ?></h3>
                <?php endif; ?>
                <?php if( get_field('home_4_column_2_copy') ) : ?>
                    <p><?php echo get_field('home_4_column_2_copy'); ?></p>
                <?php endif; ?>
            </div>

            <div class="col col3 animateRise text-center max-w-[600px] mx-auto">
                <?php if( get_field('home_4_column_3_title') ) : ?>
                    <div class="icon-wrap w-[50px] mb-[14px] mx-auto">
                        <img src="<?php bloginfo('template_directory'); ?>/library/images/Icon_Bridgely-Collaboration.png" alt="" class="w-full h-full" />
                    </div>
                    <h3 class="text-h3"><?php echo get_field('home_4_column_3_title'); ?></h3>
                <?php endif; ?>
                <?php if( get_field('home_4_column_3_copy') ) : ?>
                    <p><?php echo get_field('home_4_column_3_copy'); ?></p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>



    <?php /************************
	*
	*         Section 5, 6, 7v
	* 
	* *************************/ ?>

<div id="download_app"> </div>

    <div class="a-home-section home-section-5 page-animate-block" style="background-color:#FFF7DE">
        <div class="center">

            <div class="split-content-with-image">

                <div class="col col1 contentcol">
                    <?php if( get_field('home_6_title') ) { ?>
                    <h2 class="animateRise"><?php echo get_field('home_6_title'); ?></h2>
                    <?php } ?>
                    <?php if( get_field('home_6_subtitle') ) { ?>
                    <p class="support-line animateRise"><?php echo get_field('home_6_subtitle'); ?></p>
                    <?php } ?>
                    <?php if( have_rows('home_6_list_items') ): ?>
                    <ul class="animateRise">
                        <?php while( have_rows('home_6_list_items') ) : the_row(); ?>
                        <li><?php the_sub_field('list_item'); ?></li>
                        <?php endwhile; ?>
                    </ul>
                    <?php endif; ?>
                    <?php if( get_field('download_app') ) { ?>
                    <div style="padding-top: 20px;" class="downloadapp animateRise">
                        <?php echo get_field('download_app'); ?></div>
                    <?php } ?>
                </div>

                <div class="col col2 imagecol">
                    <?php if( get_field('home_6_section_image') ) { ?>
                    <?php $theImage = get_field('home_6_section_image'); ?>
                    <img src="<?php echo $theImage['url']; ?>" alt="<?php echo $theImage['alt']; ?>"
                        class="animateRise" />
                    <?php } ?>
                </div>

            </div>

        </div>

        <div class="center">

            <?php // if( get_field('home_7_intro_text') ) { ?>
            <div class="section-7-intro-line"><?php // the_field('home_7_intro_text'); ?></div>
            <?php // } ?>

            <?php $blockCounter = 0; ?>

            <?php if( have_rows('home_7_content_blocks') ): ?>
            <div class="temp">
                <?php while( have_rows('home_7_content_blocks') ) : the_row(); ?>

                <?php if($blockCounter != 0) { ?>
                <div class="tan-divider animateRise"></div>
                <?php } ?>

                <div class="tan-split-section animateRise<?php if($blockCounter % 2 == 0) { echo ' swap'; } ?>">
                    <div class="col col-left">
                        <?php $theImage = get_sub_field('image'); ?>
                        <img src="<?php echo $theImage['url']; ?>" alt="<?php echo $theImage['alt']; ?>" />
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

        <div class="down-curve-contain">
            <svg viewBox="0 0 1680 65" xmlns="http://www.w3.org/2000/svg">
                <path d="M1680 65V0H-3V64.9233C548.107 -8.56355 1128.89 -8.56355 1680 64.9233V65Z" fill="#FFF" />
            </svg>
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
	* 
	* *************************/ ?>

    <div class="a-home-section home-section-8 reach-main-module page-animate-block" id="contactus">
        <div class="center">

            <?php if( get_field('reach_out_title') ) { ?>
            <div class="reach-out-title animateRise"><?php echo get_field('reach_out_title'); ?></div>
            <?php } ?>
            <?php if( get_field('reach_out_subtitle') ) { ?>
            <div class="reach-out-support animateRise"><?php echo get_field('reach_out_subtitle'); ?></div>
            <?php } ?>

            <div class="form-wrap-outer">
                <?php if( get_field('reach_out_form_title') ) { ?>
                <p class="white animateRise"><?php echo get_field('reach_out_form_title'); ?></p>
                <?php } ?>

                <?php if( get_field('reach_out_form_embed') ) { ?>
                <div class="form-wrap-inner animateRise">
                    <?php echo get_field('reach_out_form_embed'); ?>
                </div>
                <?php } ?>
            </div>

        </div>

        <div class="down-curve-contain">
            <svg viewBox="0 0 1680 65" xmlns="http://www.w3.org/2000/svg">
                <path d="M1680 65V0H-3V64.9233C548.107 -8.56355 1128.89 -8.56355 1680 64.9233V65Z" fill="#FFF7DE" />
            </svg>
        </div>

    </div>


</main>

<?php get_footer(); ?>