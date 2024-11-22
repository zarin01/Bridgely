<?php
function register_slider_carousel_shortcode() {
    $args = [
        'post_type'      => 'slider-carousel',
        'posts_per_page' => -1,
        'post_status'    => 'publish',
    ];
    
    $slider_posts = get_posts($args);

    if ($slider_posts) {
        foreach ($slider_posts as $post) {
            // Use ACF's get_field to retrieve the saved shortcode field
            $shortcode_field = get_field('shortcode', $post->ID); // Replace 'slider_shortcode' with your actual ACF field name
            
            if (!empty($shortcode_field)) {
                // Register a shortcode dynamically
                add_shortcode($shortcode_field, function() {
                    return 'test test';
                });
            }
        }
    }
}
add_action('init', 'register_slider_carousel_shortcode');
