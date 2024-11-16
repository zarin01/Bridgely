<?php if(is_page()) : ?>

<?php $modulecount = 0; ?>

<!-- Full Width Component -->
<?php if( have_rows('template_modules') ):
    while ( have_rows('template_modules') ) : the_row();
        $modulecount++;
        $moduletype = get_sub_field('module_type');
        if( $moduletype == 'moduletypeFullWidthText' ) { ?>

<div class="main-page-template-content full-width-component">
    <div class="relative mx-auto px-5 max-w-1210">
        <div class="content-inner" id="<?php $titleanchor = get_sub_field('section_title'); $noSpaces = str_replace(' ', '', $titleanchor); echo $noSpaces; ?>">
            <?php if(get_sub_field('section_title')) { ?>
                <h2 class="font-medium mb-8 mt-10 text-center"><?php echo get_sub_field('section_title'); ?></h2>
            <?php } ?>
            <?php if(get_sub_field('section_image')) { ?>
                <div class="flex justify-center">
                    <img class="block h-auto object-contain" src="<?php echo get_sub_field('section_image'); ?>" />
                </div>
            <?php } ?>
            <?php if(get_sub_field('section_content')) { echo get_sub_field('section_content'); } ?>
        </div>
    </div>
</div>








<!-- 30/70 Component -->
<?php  } else if( $moduletype == 'moduletypTwoCol3070' ) { ?>

<div class="default-section-3070 x840:flexx840:item-start x840:items-center x840:justify-center" id="changing">
    <div class="relative mx-auto px-5 max-w-1210">
        <div class="relative split-content-wrap-large-text flex x840:flex-row flex-col">
            <?php while (have_rows('content_blocks')) : the_row(); ?>

            <div
                class="part part-<?php if (get_sub_field('right_or_left')) { ?><?php echo get_sub_field('right_or_left'); ?><?php } ?>">
                <?php if (get_sub_field('block_title')) { ?>
                <h2 class="animateRise" style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">
                    <?php echo get_sub_field('block_title'); ?></h2><?php } ?>

                <?php if (get_sub_field('block_content')) { ?>
                <?php echo get_sub_field('block_content'); ?><?php } ?>
            </div>
            <?php endwhile; ?>
        </div>
    </div>
</div>





<!-- Pverty Stat Component -->
<?php } else if( $moduletype == 'moduletypePovertyStat' ) { ?>

<div class="main-page-template-content py-5">
    <div class="relative mx-auto px-5 max-w-1050 border-b pb-10 poverty-stat" id="poverty-stat">

        <div class="content-inner">

            <ul>
                <?php $counter = 1; ?>
                <?php while (have_rows('poverty_stats')) : the_row(); ?>
                <?php if (get_sub_field('poverty_stat')) { ?>
                <li id="stat-<?php echo $counter; ?>" class="list-square ml-12 font-light mb-2 text-xl">
                <?php echo get_sub_field('poverty_stat');
                    $sharetext = get_sub_field('poverty_stat'); ?>
                        <style>
                        amp-social-share[type='twitter'], amp-social-share[type='linkedin'],  amp-social-share[type='facebook'] {
                        background-color: #d1a129;
                        }
                        </style>
                        <div class="flex space-x-4">
                            <amp-social-share
                                type="twitter"
                                class="w-8 h-8"
                                aria-label="Share on Twitter"
                                data-param-text="<?php echo strip_tags($sharetext); ?>">
                            </amp-social-share>
                            <amp-social-share
                                type="linkedin"
                                class="w-8 h-8"
                                data-param-text="<?php echo strip_tags($sharetext); ?>"
                                data-param-url="<?php echo urlencode(get_permalink()); ?>"
                                aria-label="Share on LinkedIn">
                            </amp-social-share>
                            <amp-social-share
                                type="facebook"
                                class="w-8 h-8"
                                data-param-quote="<?php echo strip_tags($sharetext); ?>"
                                data-param-url="<?php echo urlencode(get_permalink()); ?>"
                                aria-label="Share on Facebook">
                            </amp-social-share>
                        </div>

                </li>
                <?php } ?>
                <?php $counter++; // add one per row ?>
                <?php endwhile; ?>
            </ul>


        </div>
    </div>
</div>




<!-- Poverty Menu Component -->
<?php } else if( $moduletype == 'moduletypePovertyMenu' ) { ?>

<div class="statmenu page-animate-block bg-primary_white py-12 px-12 my-12 mx-auto" id="changing">
    <div class="relative mx-auto px-5 max-w-1210">

        <?php if(get_sub_field('section_title')) { ?><h2 class="text-center"><?php echo get_sub_field('section_title'); ?></h2>
        <?php } ?>
        <?php if(get_sub_field('section_content')) { echo get_sub_field('section_content'); } ?>

        <div class=" relative mb-12 mt-10 grid grid-cols-1 gap-4 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
            <?php while (have_rows('poverty_stats_menu')) : the_row(); ?>
            <div class="statmenu-item flex items-center">
               <?php if (get_sub_field('icons')) { ?>
                   <img class="icon block h-auto object-contain align-middle h-50 w-70 max-w-20" src="<?php echo get_sub_field('icons'); ?>"><?php } ?>
               <?php if (get_sub_field('menu_item')) { ?>
                   <a class="text-primary_gray pl-10px" href="#<?php $anchor = get_sub_field('menu_item'); $noSpaces = str_replace(' ', '', $anchor); echo $noSpaces; ?>
                   "><?php echo get_sub_field('menu_item'); ?></a><?php } ?>
            </div>
            <?php endwhile; ?>
        </div>
    </div>
</div>


<?php } ?>

<?php endwhile; ?>

<?php endif; ?>
<?php endif; ?>

