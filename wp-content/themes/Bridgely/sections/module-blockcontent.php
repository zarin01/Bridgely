<?php if(is_page()) : ?>

<?php $modulecount = 0; ?>
<?php if( have_rows('template_modules') ):
    while ( have_rows('template_modules') ) : the_row();
        $modulecount++;
        $moduletype = get_sub_field('module_type');
        if( $moduletype == 'moduletypeFullWidthText' ) { ?>

<div class="main-page-template-content">
    <div class="center">
        <div class="content-inner" id="<?php $titleanchor = get_sub_field('section_title'); $noSpaces = str_replace(' ', '', $titleanchor); echo $noSpaces; ?>">
            <?php if(get_sub_field('section_title')) { ?><h2><?php echo get_sub_field('section_title'); ?></h2>
            <?php } ?>
            <?php if(get_sub_field('section_image')) { ?><img src="<?php echo get_sub_field('section_image'); ?>" />
            <?php } ?>
            <?php if(get_sub_field('section_content')) { echo get_sub_field('section_content'); } ?>
        </div>

    </div>
</div>

<?php  } else if( $moduletype == 'moduletypTwoCol3070' ) { ?>

<div class="default-section-3070 page-animate-block" id="changing">
    <div class="relative mx-auto px-5 max-w-1210">
        <div class="split-content-wrap-large-text">
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


<?php } else if( $moduletype == 'moduletypePovertyStat' ) { ?>


<div class="main-page-template-content">
    <div class="center poverty-stat" id="poverty-stat">

        <div class="content-inner">

            <ul>
                <?php $counter = 1; ?>
                <?php while (have_rows('poverty_stats')) : the_row(); ?>
                <?php if (get_sub_field('poverty_stat')) { ?>
                <li id="stat-<?php echo $counter; ?>">
                <?php echo get_sub_field('poverty_stat');
                    $sharetext = get_sub_field('poverty_stat'); ?>
                        <style>
                        amp-social-share[type='twitter'], amp-social-share[type='linkedin'],  amp-social-share[type='facebook'] {
                        background-color: #d1a129;
                        }
                        </style>
                        <amp-social-share
                        type="twitter"
                        width="30"
                        height="30"
                        aria-label="Share on Twitter"
                        data-param-text="<?php echo  strip_tags($sharetext); ?>"
                        aria-label="Share on LinkedIn"
                        ></amp-social-share>
                        <amp-social-share
                        type="linkedin"
                        width="30"
                        height="30"
                        data-param-text="<?php echo  strip_tags($sharetext); ?>"
                        data-param-url="<?php echo urlencode(get_permalink()); ?>"
                        aria-label="Share on LinkedIn"
                        ></amp-social-share>
                        <amp-social-share
                        type="facebook"
                        width="30"
                        height="30"
                        data-param-quote="<?php echo  strip_tags($sharetext); ?>"
                        data-param-url="<?php echo urlencode(get_permalink()); ?>"
                        aria-label="Share on SMS"
                        ></amp-social-share>
                </li>
                <?php } ?>
                <?php $counter++; // add one per row ?>
                <?php endwhile; ?>
            </ul>


        </div>
    </div>
</div>

<?php } else if( $moduletype == 'moduletypePovertyMenu' ) { ?>

<div class="statmenu page-animate-block" id="changing">
    <div class="center">

        <?php if(get_sub_field('section_title')) { ?><h2><?php echo get_sub_field('section_title'); ?></h2>
        <?php } ?>
        <?php if(get_sub_field('section_content')) { echo get_sub_field('section_content'); } ?>

        <div class="statmenu-contain-wrap">
            <?php while (have_rows('poverty_stats_menu')) : the_row(); ?>
            <div class="statmenu-item">
                <?php if (get_sub_field('icons')) { ?>
                <img class="icon" src="<?php echo get_sub_field('icons'); ?>"><?php } ?>
                <?php if (get_sub_field('menu_item')) { ?>
                <a href="#<?php $anchor = get_sub_field('menu_item'); $noSpaces = str_replace(' ', '', $anchor); echo $noSpaces; ?>
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

