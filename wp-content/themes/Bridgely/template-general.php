<?php /* Template Name: General Page Use */ ?>
<?php get_header(); ?>

<main id="content" class="general">

    <?php /************************
    *
    *         Section 1
    * 
    * *************************/ ?>

    <div class="blank-intro-hero" id="general-intro-hero"<?php if(get_field('general_page_1_banner_image')) { echo ' style="background:url('.get_field('general_page_1_banner_image').') no-repeat center top; background-size:cover;"'; } ?>>
        <div class="up-curve-contain">
            <svg viewBox="0 0 1658 59" xmlns="http://www.w3.org/2000/svg"><path d="M1680 53.115V58.1982H0V53.1003C550.124 -17.7001 1129.88 -17.7001 1680 53.1003V53.115Z" fill="#FFF"/></svg>
        </div>
    </div>

	<?php /************************
	*
	*         Section 2
	* 
	* *************************/ ?>

	<div class="reach-out-main-top vision general-animate-section-1">
		<div class="center">

			<div class="vision-intro-copy-wrap">
				<?php if( get_field('general_page_1_intro_title') ) { ?>
					<h1 class="text-h1-special special blue animateRise"><?php echo get_field('general_page_1_intro_title'); ?></h1>
				<?php } ?>
				<?php if( get_field('general_page_1_intro_content') ) { ?>
					<div class="inner animateRise">
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
