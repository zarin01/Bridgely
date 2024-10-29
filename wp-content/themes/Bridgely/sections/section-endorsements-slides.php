<?php
// Query the custom post type 'endorsements'
$args = array(
    'post_type' => 'endorsement',
    'posts_per_page' => -1,
    'orderby' => 'rand',
);

$endorsements = new WP_Query($args);

if ($endorsements->have_posts()) : ?>
<style amp-custom>
.slide {
    background: #141C29;
    width: 100%;
    height: fit-content;
    color: #fff;
    top: 20px;
    bottom: 10px;
    align-items: start;
}
.i-amphtml-carousel-arrows {
        align-items: start;
}
/* Position the arrows manually at the top */
.amp-carousel-button {
    position: relative;
    top: 10px; /* Move arrows to the top */
    z-index: 10;
    width: auto;
    height: 700px;
    padding: 0;
    background: transparent;
}

.amp-carousel-button-prev::before, 
.amp-carousel-button-next::before {
    font-size: 30px; /* Adjust arrow size */
    color: #fff;
    position: absolute;
    top: 0; /* Align arrows with the top of the carousel */
}

.amp-carousel-button-prev::before {
    content: "❮";
    left: 10px;
}

.amp-carousel-button-next::before {
    content: "❯";
    right: 10px;
}
.amp-carousel-button:focus {
    border: none;
    outline: none;
}

/* Ensure full-width and height adjusts naturally */
amp-carousel {
    width: 100%;
    height: auto;
    position: relative;
}

/* Responsive handling of images */
amp-img {
    max-width: 100%;
    height: auto;
    object-fit: contain;
}

</style>


<div class="about-animate-section-3 dark_blue-section testimony">
    <div class="center">
        <h2>Leaders Behind the Movement</h2>

        <amp-carousel id="bridgely_carousel" layout="fill" type="slides" role="region"
            aria-label="Go to next testimony" loop autoplay delay="10000"
            class="about-animate-section-3 dark_blue-section testimony">
            <?php while ($endorsements->have_posts()) : $endorsements->the_post(); ?>
            <div class="testimonies center">
                <div class="slide split-content-with-image">
                    <?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'medium' ); } ?>
                    <div class="col2 animateRise" style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">
                        <?php the_content(); ?>
                        <cite><?php the_title(); ?><br><?php the_field('title'); ?><br><?php the_field('organization'); ?><br><?php the_field('country'); ?></cite>
                    </div>
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