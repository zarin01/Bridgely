<?php /* Template Name: Donate Page */ ?>
<?php get_header(); ?>

<main id="content" class="bg-white">

    <?php /************************
    *        Hero Section
    *************************/ ?>

    <div class="relative overflow-hidden bg-no-repeat bg-cover bg-top x840:pt-245 x840:pb-130 pb-96" 
         style="background-image: url(<?php echo esc_url(get_field('general_page_1_banner_image')); ?>);">
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

    <div class="py-12 bg-white">
        <div class="max-w-screen-lg mx-auto px-6 text-center">
            <?php if (get_field('general_page_1_intro_title')) { ?>
                <h1>
                    <?php echo get_field('general_page_1_intro_title'); ?>
                </h1>
            <?php } ?>
            <div class="mt-8 grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="text-left">
                    <p>Bridgely is proudly a non-profit, non-corporate organization. To keep costs low for our partners, Bridgely is fundraising for the cost of development. Help us reform the intercultural giving sector. A contribution to Bridgely is an investment in extraordinary impact.</p>
                </div>
                <div>
                    <div class="flex flex-col items-center space-y-4">
                        <div class="flex">
                            <button id="once_button" class="px-4 py-3 bg-white border-blue border-2 border-solid text-blue uppercase text-lg font-bold">One-time Donation</button>
                            <button id="monthly_button" class="px-4 py-3 bg-blue border-blue border-2 border-solid text-white uppercase text-lg font-bold">Monthly Donation</button>
                        </div>
                        <div id="give_once" class="grid grid-cols-2 x960:grid-cols-4 x840:grid-cols-2 gap-4">
                            <a href="https://donate.stripe.com/bIY9Bz3RybQM1mU007" class="block py-2 px-4 bg-primary_orange text-white text-center rounded-lg">$100</a>
                            <a href="https://buy.stripe.com/9AQ4hf9bSf2Yc1y28g" class="block py-2 px-4 bg-primary_orange text-white text-center rounded-lg">$500</a>
                            <a href="https://buy.stripe.com/3cscNLewc9IEghObIR" class="block py-2 px-4 bg-primary_orange text-white text-center rounded-lg">$1000</a>
                            <a href="https://donate.stripe.com/fZebJH2Nu1c87LieV0" class="block py-2 px-4 bg-primary_orange text-white text-center rounded-lg">Other</a>
                            <div class="mt-4 col-span-full text-sm text-left text-gray-400">Select your One-time Donation</div>
                        </div>
                        <div id="give_monthly" class="grid grid-cols-2 x960:grid-cols-4 x840:grid-cols-2 gap-4 hidden">
                            <a href="https://buy.stripe.com/6oEbJHewcaMI8PmfZ1" class="block py-2 px-4 bg-primary_orange text-white text-center rounded-lg">$100</a>
                            <a href="https://buy.stripe.com/eVaeVT87O2gc3v2aEI" class="block py-2 px-4 bg-primary_orange text-white text-center rounded-lg">$500</a>
                            <a href="https://buy.stripe.com/14k9Bz4VC4okaXuaEJ" class="block py-2 px-4 bg-primary_orange text-white text-center rounded-lg">$1000</a>
                            <div class="mt-4 col-span-full text-sm text-left text-gray-400">Select your Monthly Donation</p>
                        </div>
                    </div>

                </div>
            </div>

            <p class="mt-8 col-span-full text-sm text-center text-gray-400">Bridgely is a dba of OneChild Global. All donations are tax-deductible. EIN: 84-1087689</p>
        </div>
    </div>

</main>

<?php get_footer(); ?>
