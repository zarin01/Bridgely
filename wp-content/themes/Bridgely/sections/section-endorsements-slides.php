<?php
// Query the custom post type 'endorsements'
$args = array(
    'post_type' => 'endorsement',
    'posts_per_page' => -1,
    'orderby' => 'rand',
);

$endorsements = new WP_Query($args);

if ($endorsements->have_posts()) : ?>
<div class="bg-dark_blue py-12 testimony">
    <div class="max-w-6xl mx-auto text-center">
        <h2 class="text-3xl font-bold text-orange mb-6">Leaders Behind the Movement</h2>

        <amp-carousel id="bridgely_carousel" layout="fill" type="slides" role="region"
            aria-label="Go to next testimony" loop autoplay delay="10000"
            class="relative w-full h-auto">
            <?php while ($endorsements->have_posts()) : $endorsements->the_post(); ?>
            <div class="flex flex-col items-start bg-gray-900 text-white p-6 rounded-lg space-y-4">
                <?php if (has_post_thumbnail()) : ?>
                    <div class="w-full mb-4">
                        <?php the_post_thumbnail('medium', ['class' => 'rounded-lg object-cover w-full']); ?>
                    </div>
                <?php endif; ?>

                <div class="space-y-2">
                    <p class="text-lg leading-relaxed"><?php the_content(); ?></p>
                    <cite class="text-sm font-light text-gray-400">
                        <?php the_title(); ?><br>
                        <?php the_field('title'); ?><br>
                        <?php the_field('organization'); ?><br>
                        <?php the_field('country'); ?>
                    </cite>
                </div>
            </div>
            <?php endwhile; ?>
        </amp-carousel>
    </div>
</div>
<?php
endif;
wp_reset_postdata();
?>
