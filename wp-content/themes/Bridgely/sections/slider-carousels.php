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
            $shortcode_field = get_field('shortcode', $post->ID); 
            
            if (!empty($shortcode_field)) {
                // Register a shortcode dynamically
                add_shortcode($shortcode_field, function() use ($post) {
                    $slider_repeater = get_field('slider', $post->ID); // Fetch the repeater field
                    
                    if (!$slider_repeater) {
                        return '<p>No slides available.</p>';
                    }

                    $output = '<div class="relative w-full max-w-7xl mx-auto overflow-hidden">';
                    $output .= '<div class="flex transition-transform duration-500 ease-in-out" id="sliderWrapper" style="width: ' . (count($slider_repeater) * 100) . '%;">';

                    foreach ($slider_repeater as $slide) {
                        $image_url = $slide['slider_image']['url'] ?? '';
                        $description = $slide['slider_description'] ?? '';
                        $giver_details = $slide['testimony_giver_details'] ?? '';
                        $testimony_users_information = $slide['testimony_users_information'] ?? [];

                        $output .= '<div class="flex-none w-full" style="width: 100%;">';
                        $output .= '<div class="p-4 flex flex-col items-center">';
                        $output .= '<img src="' . esc_url($image_url) . '" alt="" class="rounded shadow-lg mb-4">';
                        $output .= '<p class="text-xl font-semibold text-center">' . esc_html($description) . '</p>';
                        $output .= '<div class="text-gray-500 mt-2 text-center">' . esc_html($giver_details) . '</div>';
                        $output .= '<ul class="list-disc text-gray-600 text-left mt-4">';
                        
                        foreach ($testimony_users_information as $info) {
                            $output .= '<li>' . esc_html($info) . '</li>';
                        }

                        $output .= '</ul>';
                        $output .= '</div>'; // Inner content
                        $output .= '</div>'; // Slider item
                    }

                    $output .= '</div>'; // slider-wrapper

                    // Slider navigation buttons
                    $output .= '<button class="absolute top-1/2 left-4 transform -translate-y-1/2 bg-gray-700 text-white rounded-full p-2 z-10" id="sliderPrev">&lt;</button>';
                    $output .= '<button class="absolute top-1/2 right-4 transform -translate-y-1/2 bg-gray-700 text-white rounded-full p-2 z-10" id="sliderNext">&gt;</button>';

                    $output .= '</div>'; // slider-container

                    return $output;
                });
            }
        }
    }
}
add_action('init', 'register_slider_carousel_shortcode');

