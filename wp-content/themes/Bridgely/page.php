<?php get_header(); ?>

<main id="content" class="default-page-template">


    <?php /* Page Header Banner */ ?>
    <?php if(get_field('general_page_1_banner_image')) { ?>
        <div id="general-intro-hero" 
            class="blank-intro-hero relative h-700 bg-no-repeat bg-top bg-cover" 
            style="background-image: url('<?php echo get_field('general_page_1_banner_image'); ?>');">

        <div class="absolute block overflow-hidden -bottom-10 -left-20p w-140p sm:w-120p sm:-left-10p md:w-106p md:-left-5p">
            <svg viewBox="0 0 1658 59" xmlns="http://www.w3.org/2000/svg">
                <path d="M1680 53.115V58.1982H0V53.1003C550.124 -17.7001 1129.88 -17.7001 1680 53.1003V53.115Z"
                    fill="#FFF" />
            </svg>
        </div>
    </div>
    <?php } ?>

    <?php /* Page Title */ ?>
    <?php if( get_field('general_page_1_intro_title') ) { ?>
        <div class="default-animate-title flex items-center justify-center">
            <div class="relative mx-auto px-5 max-w-1210">
                <div class="intro-copy-wrap text-center">
                    <h1 class="x960:text-6xl text-blue"><?php echo get_field('general_page_1_intro_title'); ?></h1>
                </div>
            </div>
        </div>

        <?php } ?>
        <?php if( get_field('general_page_1_intro_content') ) { ?>
        <div class="inner animateRise">
            <?php echo get_field('general_page_1_intro_content'); ?>
        </div>
    </div>

    <?php } ?>

	<?php get_template_part('sections/module', 'blockcontent'); ?>

	<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
	<div class="main-page-template-content default-section-3070 page-animate-block" id="changing">
		<div class="default-page-template-content">
			<div class="relative mx-auto px-5 max-w-1210">

				<?php the_content(); ?>

			</div>
		</div>
	</div>

	<?php endwhile; endif; ?>

</main>
<?php //end content ?>

<?php get_footer(); ?>