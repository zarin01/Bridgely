<?php /* Template Name: About Us */ 
/* Classes that are not Tailwind but arent accessing CSS, these classes are used for JS: 
    * animateRise

    Section 2:
    * home-section-2 class
    * changing ID used for JS purposes

    Section 3:
    * about-animate-section-2 used for JS css commented out
    * animateRise used for JS
    * fifty-fifty-fancy-split Added to tailwind config file as plugin

    Video Section
    * about-animate-section-3
    * Reused ID download_app

    Reach out
    * about-animate-section-5
*/
?>
<?php get_header(); ?>

<main id="content" class="about">

    <?php /************************
    *         Section 1
    *************************/ ?>

    <div class="relative overflow-hidden bg-no-repeat bg-cover bg-top x840:pt-245 x840:pb-130 pb-80 about-section-1"
        <?php if (get_field('about_page_1_banner_image')) { 
            echo 'style="background-image: url(' . get_field('about_page_1_banner_image') . ');"'; 
        } ?>
    >
        <div class="absolute w-full overflow-hidden -bottom-4 left-0">
            <svg viewBox="0 0 1658 59" xmlns="http://www.w3.org/2000/svg" class="w-full h-auto">
                <path d="M1680 53.115V58.1982H0V53.1003C550.124 -17.7001 1129.88 -17.7001 1680 53.1003V53.115Z" fill="#FFF" />
            </svg>
        </div>
    </div>

    <?php /************************
    *         Section 2
    *************************/ ?>

    <div class="about-animate-section-1 py-16 bg-white">
        <div class="max-w-1210 mx-auto px-5 text-center">
            <div class="vision-intro-copy-wrap space-y-8">
                <?php if (get_field('about_page_1_intro_title')) { ?>
                    <h1 class="font-bold text-blue animateRise">
                        <?php echo get_field('about_page_1_intro_title'); ?>
                    </h1>
                <?php } ?>
                <?php if (get_field('about_page_1_intro_content')) { ?>
                    <div class="text-lg text-primary_gray animateRise">
                        <?php echo get_field('about_page_1_intro_content'); ?>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>

    <?php /************************
    *         Testimony Section
    *************************/ ?>

    <?php get_template_part('sections/section', 'endorsements-slides'); ?>

    <?php /************************
    *         Section 3
    *************************/ ?>

    <div 
        class="relative py-150 px-4 bg-primary_gray bg-cover bg-center about-section-vision about-animate-section-2 text-white"
        <?php if (get_field('about_page_2_background_image')) { 
            echo 'style="background-image: url(' . get_field('about_page_2_background_image') . ');"'; 
        } ?>
    >
        <div class="max-w-1210 mx-auto space-y-8">
            <div class="py-40 max-w-500 bg-primary_gray">
				<img class="w-70 pb-7" src="/wp-content/themes/Bridgely/library/images/icon-bridge2.png">
                <?php if (get_field('about_page_mission_title')) { ?>
                    <h2 class="animateRise"><?php echo get_field('about_page_mission_title'); ?></h2>
                <?php } ?>
                <?php if (get_field('about_page_mission_content')) { ?>
                    <div class="relative text-lg animateRise">
                        <?php echo get_field('about_page_mission_content'); ?>
                    </div>
                <?php } ?>

                <?php if (get_field('about_page_2_title')) { ?>
                    <h2 class="font-bold animateRise"><?php echo get_field('about_page_2_title'); ?></h2>
                <?php } ?>
                <?php if (get_field('about_page_2_content')) { ?>
                    <div class="relative text-lg animateRise">
                        <?php echo get_field('about_page_2_content'); ?>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>

    <?php /************************
    *         Video Section
    *************************/ ?>

    <div class="about-animate-section-3 py-16 bg-gray-100 text-center">
        <div class="max-w-1210 mx-auto">
            <?php if (get_field('partners_page_3_title')) { ?>
                <h2 class="text-blue animateRise"><?php echo get_field('partners_page_3_title'); ?></h2>
            <?php } ?>

            <?php if (get_field('partners_page_3_video_url')) { ?>

				<div class="relative" style="padding-top: 56.25%">
				<iframe src="https://player.vimeo.com/video/<?php echo get_field('partners_page_3_video_url'); ?>" class="absolute inset-0 w-full h-full" frameborder="0"></iframe>
				</div>

            <?php } ?>
        </div>
    </div>

    <?php /************************
    *         Section Pillars
    *************************/ ?>

    <div class="relative overflow-hidden bg-no-repeat bg-cover bg-top bg-our-pillars-section about-animate-section-4">
		
	<div class="relative overflow-hidden">
		<svg viewBox="0 0 1680 65" xmlns="http://www.w3.org/2000/svg" class="w-full h-auto">
			<path d="M1680 65V0H-3V64.9233C548.107 -8.56355 1128.89 -8.56355 1680 64.9233V65Z" fill="rgb(243 244 246)" />
		</svg>
	</div>

        <div class="max-w-1210 mx-auto text-center space-y-4">
            <?php if (get_field('about_page_4_title')) { ?>
                <h2 class="font-bold text-blue animateRise"><?php echo get_field('about_page_4_title'); ?></h2>
            <?php } ?>
            <?php if (get_field('about_page_4_extra_text')) { ?>
                <p class="max-w-2xl mx-auto font-medium"><?php echo get_field('about_page_4_extra_text'); ?></p>
            <?php } ?>

            <?php $pillarCount = 0; ?>
            <?php if (have_rows('about_page_4_pillar_list')) : ?>
                <div class="flex flex-wrap justify-center gap-8 px-4">
                    <?php while (have_rows('about_page_4_pillar_list')) : the_row(); ?>
                        <span class="w-full p-10 bg-white opacity-85 rounded">
                            <div class="space-y-2 text-left">
                                <h3 class="text-primary_orange font-bold tracking-wide"><?php the_sub_field('name'); ?></h3>
                                <p class="text-primary_gray"><?php the_sub_field('description'); ?></p>
                            </div>
                        </span>
                        <?php $pillarCount++; ?>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>

            <?php if (get_field('about_page_4_additional_text')) { ?>
                <div class="mt-4">
                    <p class="text-white text-center md:px-40 px-4 pt-10 font-medium"><?php echo get_field('about_page_4_additional_text'); ?></p>
                </div>
            <?php } ?>
        </div>

    </div>

    <?php /************************
    *         Section Leadership
    *************************/ ?>

    <div class="about-animate-section-3 py-16 bg-white text-center">
        <div class="max-w-1210 mx-auto">
            <?php if (get_field('about_page_3_title')) { ?>
                <h2 class="font-bold text-blue animateRise"><?php echo get_field('about_page_3_title'); ?></h2>
            <?php } ?>

            <?php if (have_rows('about_page_3_team_list')) : ?>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-8">
                    <?php while (have_rows('about_page_3_team_list')) : the_row(); ?>
                        <div class="bg-white rounded p-4 animateRise">
                            <?php $teamImage = get_sub_field('image'); ?>
                            <?php if ($teamImage['url']) { ?>
                                <div class="mb-4">
                                    <img src="<?php echo $teamImage['url']; ?>" alt="<?php echo $teamImage['alt']; ?>" class="w-full h-auto">
                                </div>
                            <?php } ?>
                            <?php if (get_sub_field('name')) { ?>
                                <h3><?php the_sub_field('name'); ?></h3>
                            <?php } ?>
                            <?php if (get_sub_field('title')) { ?>
                                <h4 class="text-primary_orange text-lg uppercase"><?php the_sub_field('title'); ?></h4>
                            <?php } ?>
                            <?php if (get_sub_field('description')) { ?>
                                <p class="text-primary_gray"><?php the_sub_field('description'); ?></p>
                            <?php } ?>
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
        </div>
        <div class="mt-8">
            <svg viewBox="0 0 1680 65" xmlns="http://www.w3.org/2000/svg" class="w-full h-auto">
                <path d="M1680 65V0H-3V64.9233C548.107 -8.56355 1128.89 -8.56355 1680 64.9233V65Z" fill="#FFF" />
            </svg>
        </div>
    </div>

    <?php /************************
    *         Section Reach Out
    *************************/ ?>

    <div class="about-animate-section-5 py-16 bg-primary_gray text-white text-center">
        <div class="max-w-1210 mx-auto space-y-4 px-4">
            <?php if (get_field('about_page_5_title')) { ?>
                <h1 class="fontSize-responsive_heading font-bold animateRise"><?php echo get_field('about_page_5_title'); ?></h1>
            <?php } ?>
            <div class="space-y-4">
                <?php if (get_field('about_page_5_form_title')) { ?>
                    <p class="text-lg animateRise"><?php echo get_field('about_page_5_form_title'); ?></p>
                <?php } ?>
                <?php if (get_field('about_page_5_form_embed')) { ?>
                    <div class="form-wrap-inner animateRise">
                        <?php echo get_field('about_page_5_form_embed'); ?>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>

</main>

<?php get_footer(); ?>