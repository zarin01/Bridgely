<?php /* Template Name: Contact */ ?>
<?php get_header(); ?>

<main id="content" class="bg-white">

	<?php /************************
    *        Hero Section
    *************************/ ?>

	<div class="relative overflow-hidden bg-no-repeat bg-cover bg-top x840:pt-245 x840:pb-130 pb-80"
        style="background-image: url(<?php echo esc_url(get_field('contact_page_1_banner_image')); ?>);">
        <div class="absolute w-full overflow-hidden -bottom-4 left-0">
            <svg viewBox="0 0 1658 59" xmlns="http://www.w3.org/2000/svg" class="w-full h-auto">
                <path d="M1680 53.115V58.1982H0V53.1003C550.124 -17.7001 1129.88 -17.7001 1680 53.1003V53.115Z"
                    fill="#FFF" />
            </svg>
        </div>
    </div>

	<?php /************************
    *        Intro Section
    *************************/ ?>	

    <div class="py-4">
        <div class=" max-w-screen-x840 mx-auto text-center">
            <?php if (get_field('contact_page_1_intro_title')) { ?>
                <h1 class="fontSize-responsive_heading text-center">
                    <?php echo esc_html(get_field('contact_page_1_intro_title')); ?>
                </h1>
            <?php } ?>
            <?php if (get_field('contact_page_1_intro_content')) { ?>
                <div class="text-lg text-center">
                    <?php echo get_field('contact_page_1_intro_content'); ?>
                </div>
            <?php } ?>
        </div>
    </div>

	<?php /************************
    *        Form Section
    *************************/ ?>	

    <div class="py-12 bg-white">
        <div class="max-w-screen-lg mx-auto  px-4">
            <?php if (get_field('contact_page_2_form_embed')) { ?>
                <div class="p-6 bg-tan2 shadow-md rounded-lg">
                    <?php echo get_field('contact_page_2_form_embed'); ?>
                </div>
            <?php } ?>
        </div>
        <div class="bg-primary_gray mt-8 absolute block h-80 w-full"></div>
    </div>

	<?php /************************
    *        Additional Details Section
    *************************/ ?>	

    <div class="py-16">
        <div class="max-w-screen-lg mx-auto text-center relative">
            <?php if (get_field('contact_page_2_address_title')) { ?>
                <h2 class="text-primary_white2 mb-4 relative">
                    <?php echo get_field('contact_page_2_address_title'); ?>
                </h2>
            <?php } ?>
            <?php if (get_field('contact_page_2_address_content')) { ?>
                <p class="text-lg text-white relative">
                    <?php echo get_field('contact_page_2_address_content'); ?>
                </p>
            <?php } ?>
        </div>
    </div>

</main>

<?php get_footer(); ?>