<?php /* Template Name: About Us */ ?>
<?php get_header(); ?>

<main id="content" class="about">

	<?php /************************
	 *
	 *         Section 1
	 * 
	 * *************************/ ?>

	<div class="relative overflow-hidden x14:p-0 x14:h-700 x840:pt-47p" id="about-intro-hero" <?php if (get_field('about_page_1_banner_image')) {
			echo ' style="background:url(' . get_field('about_page_1_banner_image') . ') no-repeat center top; background-size:cover;"';} ?>>
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

	<div class="reach-out-main-top vision about-animate-section-1   relative mx-auto text-center py-20 x12:pb-32 max-w-5xl x960:pb-24">
		<div class="relative max-w-1210 px-5 mx-auto">

			<div class="vision-intro-copy-wrap">
				<?php if (get_field('about_page_1_intro_title')) { ?>
					<h1 class="text-blue mb-12 x960:text-7xl animateRise"><?php echo get_field('about_page_1_intro_title'); ?></h1>
				<?php } ?>
				<?php if (get_field('about_page_1_intro_content')) { ?>
					<div class="inner animateRise">
						<?php echo get_field('about_page_1_intro_content'); ?>
					</div>
				<?php } ?>
			</div>

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
	 *         Section 3
	 * 
	 * *************************/ ?>

	<div 
	    class="about-section-vision about-animate-section-2 x12:py-36 x960:py-32 x840:py-24 bg-auto bg-no-repeat bg-center" 
	    <?php if (get_field('about_page_2_background_image')) {
	        echo 'style="background-image: url(' . esc_url(get_field('about_page_2_background_image')) . '); background-repeat: no-repeat; background-position: center; background-size: cover;"';
	    } ?>>
		<div class="relative max-w-1210 px-5 mx-auto">

			<div class="copy-wrap-part  relative max-w-500 pt-11 mt-3.5">

				<?php if (get_field('about_page_mission_title')) { ?>
					<h2 class="text-white animateRise"><?php echo get_field('about_page_mission_title'); ?></h2>
				<?php } ?>
				<?php if (get_field('about_page_mission_content')) { ?>
					<div class="relative text-white animateRise">
						<?php echo get_field('about_page_mission_content'); ?>
					</div>
				<?php } ?>


				<?php if (get_field('about_page_2_title')) { ?>
					<h2 class="text-white animateRise"><?php echo get_field('about_page_2_title'); ?></h2>
				<?php } ?>
				<?php if (get_field('about_page_2_content')) { ?>
					<div class="relative text-white animateRise">
						<?php echo get_field('about_page_2_content'); ?>
					</div>
				<?php } ?>
			</div>

		</div>
	</div>


	<?php /************************
	 *
	 *         Video Section
	 * 
	 * *************************/ ?>

	<div class="about-animate-section-3 why-join-bridgely-about-section   relative text-center py-20">
		<div class="relative max-w-1210 px-5 mx-auto">

			<?php if (get_field('partners_page_3_title')) { ?>
				<h2 class="text-blue text-responsive animateRise"><?php echo get_field('partners_page_3_title'); ?></h2>
			<?php } ?>

			<?php if (get_field('partners_page_3_video_url')) { ?>
				<amp-vimeo data-videoid="<?php echo get_field('partners_page_3_video_url'); ?>" layout="responsive" width="16" height="9"></amp-vimeo>
			<?php } ?>
		</div>
	</div>

	<?php /************************
	 *
	 *         Section Pillars
	 * 
	 * *************************/ ?>

	<div class="our-pillars-section about-animate-section-4 bg-our-pillars  relative overflow-hidden text-left">
		<div class="relative max-w-1210 px-5 mx-auto">
			<?php if (get_field('about_page_4_title')) { ?>
				<h1 class="text-h1-special blue animateRise"><?php echo get_field('about_page_4_title'); ?></h1>
			<?php } ?>
			<?php if (get_field('about_page_4_extra_text')) { ?>
				<p style="max-width: 740px; margin: 0 auto; font-weight: 500;"><?php echo get_field('about_page_4_extra_text'); ?></p>
			<?php } ?>

			<?php $pillarCount = 0; ?>

			<?php if (have_rows('about_page_4_pillar_list')) : ?>
				<div class="pillar-contain-wrap">
					<?php while (have_rows('about_page_4_pillar_list')) : the_row(); ?>

					<span class="a-pillar animateRise">
							<div class="inside">
								<div class="label"><span><?php the_sub_field('name'); ?></span>
								<?php the_sub_field('description'); ?></div>
								<div style="display:none !important;">
									<div class="text-h3 blue"><?php the_sub_field('title'); ?></div>
								</div>
							</div>
					</span>

						<?php $pillarCount++; ?>

					<?php endwhile; ?>
				</div>
			<?php endif; ?>

			<?php if (get_field('about_page_4_additional_text')) { ?>
				<div class="additional-copy-line">
					<p class="white"><?php echo get_field('about_page_4_additional_text'); ?></p>
				</div>
			<?php } ?>
		</div>

		<div class="down-curve-contain">
			<svg viewBox="0 0 1680 65" xmlns="http://www.w3.org/2000/svg">
				<path d="M1680 65V0H-3V64.9233C548.107 -8.56355 1128.89 -8.56355 1680 64.9233V65Z" fill="#FFF" />
			</svg>
		</div>
	</div>


	<?php /************************
	 *
	 *         Section Leadership
	 * 
	 * *************************/ ?>

	<div class="about-section-why about-animate-section-3">
		<div class="relative max-w-1210 px-5 mx-auto">

			<?php if (get_field('about_page_3_title')) { ?>
				<h2 class="text-h1 blue animateRise"><?php echo get_field('about_page_3_title'); ?></h2>
			<?php } ?>

			<?php if (have_rows('about_page_3_team_list')) : ?>
				<div class="team-member-outer-wrap">
					<?php while (have_rows('about_page_3_team_list')) : the_row(); ?>

						<div class="a-team-member animateRise">
							<?php $teamImage = get_sub_field('image'); ?>
							<?php if ($teamImage['url']) { ?>
								<div class="image-wrap">
									<img src="<?php echo $teamImage['url']; ?>" alt="<?php echo $teamImage['alt']; ?>" />
								</div>
							<?php } ?>
							<?php if (get_sub_field('name')) { ?>
								<div class="name"><?php the_sub_field('name'); ?></div>
							<?php } ?>
							<?php if (get_sub_field('title')) { ?>
								<div class="position"><?php the_sub_field('title'); ?></div>
							<?php } ?>
							<?php if (get_sub_field('description')) { ?>
								<p><?php the_sub_field('description'); ?></p>
							<?php } ?>
						</div>

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
	 *      Section Reach Out
	 * 
	 * *************************/ ?>

	<div class="reach-out-simple about-animate-section-5">
		<div class="relative max-w-1210 px-5 mx-auto">

			<?php if (get_field('about_page_5_title')) { ?>
				<h1 class="text-h1-special white text-center animateRise"><?php echo get_field('about_page_5_title'); ?></h1>
			<?php } ?>

			<div class="form-wrap-outer">
				<?php if (get_field('about_page_5_form_title')) { ?>
					<p class="white animateRise"><?php echo get_field('about_page_5_form_title'); ?></p>
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