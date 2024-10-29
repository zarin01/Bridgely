<?php /* Template Name: Contact */ ?>
<?php get_header(); ?>

<main id="content" class="contact">

	<div class="blank-intro-hero" id="contact-intro-hero"<?php if(get_field('contact_page_1_banner_image')) { echo ' style="background:url('.get_field('contact_page_1_banner_image').') no-repeat center top; background-size:cover;"'; } ?>>
		<div class="up-curve-contain">
			<svg viewBox="0 0 1658 59" xmlns="http://www.w3.org/2000/svg"><path d="M1680 53.115V58.1982H0V53.1003C550.124 -17.7001 1129.88 -17.7001 1680 53.1003V53.115Z" fill="#FFF"/></svg>
		</div>
	</div>

	<div class="reach-out-main-top contact-animate-section-1">
		<div class="center">

			<div class="contact-intro-copy-wrap animateRise">
				<?php if( get_field('contact_page_1_intro_title') ) { ?>
					<h1 class="text-h1-special blue"><?php echo get_field('contact_page_1_intro_title'); ?></h1>
				<?php } ?>
				<?php if( get_field('contact_page_1_intro_content') ) { ?>
					<?php echo get_field('contact_page_1_intro_content'); ?>
				<?php } ?>
			</div>

		</div>
	</div>

	<div class="reach-out-main-middle contact-animate-section-2">
		<div class="center">

			<div class="contact-form-wrapper edit animateRise">
				<?php if( get_field('contact_page_2_form_embed') ) { ?>
					<?php echo get_field('contact_page_2_form_embed'); ?>
				<?php } ?>
			</div>				

		</div>

		<div class="bottom-stripe"></div>
	</div>

	<div class="reach-out-main-bottom contact-animate-section-3">
		<div class="center">

			<?php /* this was before removing the email and phone 
			<div class="additional-contact-details">
				<div class="part part-left animateRise">
					<?php if( get_field('contact_page_2_address_title') ) { ?>
						<div class="line1 text-h2"><?php echo get_field('contact_page_2_address_title'); ?></div>
					<?php } ?>
					<?php if( get_field('contact_page_2_address_content') ) { ?>
						<p class="additional address white"><?php echo get_field('contact_page_2_address_content'); ?></p>
					<?php } ?>
				</div>

				<div class="part part-right animateRise">
					<?php if( get_field('contact_page_2_phone_title') ) { ?>
						<div class="line1 text-h2"><?php echo get_field('contact_page_2_phone_title'); ?></div>
					<?php } ?>
					<p class="additional phoneemail white"><?php if( get_field('contact_page_2_phone_number') ) { ?><?php echo get_field('contact_page_2_phone_number'); ?><br><?php } ?><?php if( get_field('contact_page_2_email') ) { ?><a href="mailto:<?php echo get_field('contact_page_2_email'); ?>"><?php echo get_field('contact_page_2_email'); ?></a><?php } ?></p>
				</div>
			</div>
			*/ ?>

			<div class="additional-contact-details-single">
				<?php if( get_field('contact_page_2_address_title') ) { ?>
					<div class="line1 text-h2"><?php echo get_field('contact_page_2_address_title'); ?></div>
				<?php } ?>
				<?php if( get_field('contact_page_2_address_content') ) { ?>
					<p class="additional address white"><?php echo get_field('contact_page_2_address_content'); ?></p>
				<?php } ?>
			</div>			

		</div>
	</div>

</main>

<?php get_footer(); ?>