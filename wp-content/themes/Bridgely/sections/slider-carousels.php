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

                    $output = '<div class="slider-container bg-blue relative overflow-hidden w-full max-w-7xl mx-auto">';
                    $output .= '<div class="slider-wrapper flex transition-transform duration-500 ease-in-out" id="sliderWrapper">';

                    foreach ($slider_repeater as $slide) {
                        $image_url = $slide['slider_image']['url'] ?? '';
                        $description = $slide['slider_description'] ?? '';
                        $giver_details = $slide['testimony_giver_details'] ?? '';
                        $testimony_users_information = $slide['testimony_users_information'] ?? [];

                        $output .= '<div class="slider-item flex flex-col md:flex-row items-center justify-center w-full md:w-1/2 p-4">';
                        $output .= '<div class="slider-image w-full md:w-1/2"><img src="' . esc_url($image_url) . '" alt="" class="rounded shadow-lg"></div>';
                        $output .= '<div class="slider-content w-full md:w-1/2 p-4">';
                        $output .= '<p class="slider-description text-xl font-semibold mb-4">' . esc_html($description) . '</p>';
                        $output .= '<div class="giver-details text-gray-500 mb-4">' . esc_html($giver_details) . '</div>';
                        $output .= '<ul class="testimony-details list-disc pl-4">';
                        
                        foreach ($testimony_users_information as $info) {
                            $output .= '<li class="text-gray-600">' . esc_html($info) . '</li>';
                        }

                        $output .= '</ul>';
                        $output .= '</div>'; // slider-content
                        $output .= '</div>'; // slider-item
                    }

                    $output .= '</div>'; // slider-wrapper

                    // Slider navigation buttons
                    $output .= '<button class="slider-prev absolute top-1/2 left-4 transform -translate-y-1/2 bg-gray-700 text-white rounded-full p-2" id="sliderPrev">&lt;</button>';
                    $output .= '<button class="slider-next absolute top-1/2 right-4 transform -translate-y-1/2 bg-gray-700 text-white rounded-full p-2" id="sliderNext">&gt;</button>';

                    $output .= '</div>'; // slider-container

                    return $output;
                });
            }
        }
    }
}
add_action('init', 'register_slider_carousel_shortcode');
