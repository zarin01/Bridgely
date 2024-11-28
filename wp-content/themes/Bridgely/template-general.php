<?php /* Template Name: General Page Use */ ?>
<?php get_header(); ?>

<main id="content" class="general">

    <?php /************************
    *
    *         Section 1
    * 
    * *************************/ ?>
	<div 
        class=" x14:py-0 x14:px-0 x14:h-700 x840:pt-47p pt-67p  relative overflow-hidden bg-no-repeat bg-cover bg-top pb-64 home-section-1 page-animate-block" 
        id="home-intro-hero"
        <?php if (get_field('general_page_1_banner_image')) { 
            echo 'style="background-image: url(' . get_field('general_page_1_banner_image') . ');"'; 
        } ?>
    >

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

	<div class="reach-out-main-top vision general-animate-section-1 pt-20 relative text-center my-0 mx-auto x12:pb-120 max-w-5xl">
		<div class="relative max-w-1210 mx-auto px-5 py-0">

			<div class="vision-intro-copy-wrap text-center text-poppins mb-12 x960:text-7xl text-blue">
				<?php if( get_field('general_page_1_intro_title') ) { ?>
					<h1 class="text-blue animateRise"><?php echo get_field('general_page_1_intro_title'); ?></h1>
				<?php } ?>
				<?php if( get_field('general_page_1_intro_content') ) { ?>
					<div class="inner animateRise text-black">
						<?php echo get_field('general_page_1_intro_content'); ?>
					</div>
				<?php } ?>
			</div>

		</div>
	</div>

    <?php /************************
	*
	*         Section 3
	* 
	* *************************/ ?>

	<div class="general-section-vision general-animate-section-2"<?php if(get_field('general_page_2_background_image')) { echo ' style="background:url('.get_field('general_page_2_background_image').') no-repeat center top; background-size:cover;"'; } ?>>
		<div class="center">

			<div class="copy-wrap-part">
				<?php if( get_field('general_page_2_title') ) { ?>
					<h2 class="white text-h1 animateRise"><?php echo get_field('general_page_2_title'); ?></h2>
				<?php } ?>
				<?php if( get_field('general_page_2_content') ) { ?>
					<div class="animateRise" style="position: relative;">
						<?php echo get_field('general_page_2_content'); ?>
					</div>
				<?php } ?>
			</div>

		</div>
	</div>   

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php if (get_the_content()) : ?>
            <?php the_content(); ?>
        <?php endif; ?>
    <?php endwhile; endif; ?>


</main>

<?php get_footer(); ?>
