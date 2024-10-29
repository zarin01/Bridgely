<?php /* Template Name: Donate Page */ ?>
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

	<div class="reach-out-main-top vision">
		<div class="center">

			<div class="vision-intro-copy-wrap">
				<?php if( get_field('general_page_1_intro_title') ) { ?>
					<h1 class="text-h1-special special blue"><?php echo get_field('general_page_1_intro_title'); ?></h1>
				<?php } ?>
				<?php // if( get_field('general_page_1_intro_content') ) { ?>
					<div class="inner">

					<div class="split-content-with-image">
				<div class="col1" style="text-align: left;">
				<p>Bridgely is proudly a non-profit, non-corporate organization. To keep costs low for our partners, Bridgely is fundraising for the cost of development. Help us reform the intercultural giving sector. A contribution to Bridgely is an investment in extraordinary impact.</p>
				</div>
				<div class="bridgely-donate col2">
				<div class="button-container">
				<a id="once_button" class="button active">One-time Donation</a>
				<a id="monthly_button" class="button">Monthly Donation</a>

				</div>

				<div id="give_once" class="give_wrap give_once active">
				<a class="give_button" href="https://donate.stripe.com/bIY9Bz3RybQM1mU007">$100</a>
				<a class="give_button" href="https://buy.stripe.com/9AQ4hf9bSf2Yc1y28g">$500</a>
				<a class="give_button" href="https://buy.stripe.com/3cscNLewc9IEghObIR">$1000</a>
				<a class="give_button" href="https://donate.stripe.com/fZebJH2Nu1c87LieV0">Other</a>

				</div>

				<div id="give_monthly" class="give_wrap give_monthly" style="display:none">
				<a class="give_button" href="https://buy.stripe.com/6oEbJHewcaMI8PmfZ1">$100</a>
				<a class="give_button" href="https://buy.stripe.com/eVaeVT87O2gc3v2aEI">$500</a>
				<a class="give_button" href="https://buy.stripe.com/14k9Bz4VC4okaXuaEJ">$1000</a>
				</div>


				</div>
				</div>
				<p style="text-align: center; font-size: 14px; padding-top: 50px;">Bridgely is a dba of OneChild Global. All donations are tax-deductible. EIN: 84-1087689</p>
					</div>
				<?php // } ?>
			</div>

		</div>
	</div>

    <?php /************************
	*
	*         Section 3
	* 
	* *************************/ ?>

	<div class="general-section-vision"<?php if(get_field('general_page_2_background_image')) { echo ' style="background:url('.get_field('general_page_2_background_image').') no-repeat center top; background-size:cover;"'; } ?>>
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


</main>

<?php get_footer(); ?>
