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
                add_shortcode($shortcode_field, function() use ($post) {
                    $slider_repeater = get_field('slider', $post->ID);

                    if (!$slider_repeater) {
                        return '<p>No slides available.</p>';
                    }

                    $slider_title = get_the_title($post->ID);
                    $output = '<div class="bg-dark_blue w-full max-w-full">';
                    $output .= '<div class="relative bg-dark_blue w-full mx-auto overflow-hidden">';
                    $output .= '<h2 class="text-orange text-5xl text-center w-full capitalize font-bold mb-6 mt-10">' . esc_html($slider_title) . '</h2>';
                    $output .= '<div class="flex transition-transform duration-500 ease-in-out" id="sliderWrapper">';
                    
                    foreach ($slider_repeater as $slide) {
                        $image_url = $slide['slider_image']['url'] ?? '';
                        $description = $slide['slider_description'] ?? '';
                        $giver_details = $slide['testimony_giver_details'] ?? [];
                        $testimony_users_information = $slide['testimony_users_information'] ?? [];

                        $output .= '<div class="flex-none w-full" style="width: 100%;">';
                        $output .= '<div class="p-4 flex flex-col items-center">';
                        $output .= '<img src="' . esc_url($image_url) . '" alt="" class="rounded shadow-lg mb-4">';
                        $output .= '<p class="text-xl font-semibold text-center text-white">' . esc_html($description) . '</p>';

                        if (!empty($giver_details)) {
                            $output .= '<div class="text-white mt-2 text-center">';
                            foreach ($giver_details as $detail) {
                                $giver_name = $detail['giver_name'] ?? '';
                                $giver_title = $detail['giver_title'] ?? '';
                                if ($giver_name || $giver_title) {
                                    $output .= '<p>' . esc_html($giver_name) . ' - ' . esc_html($giver_title) . '</p>';
                                }
                            }
                            $output .= '</div>';
                        }

                        $output .= '<ul class="list-disc text-white text-left mt-4">';
                        foreach ($testimony_users_information as $info) {
                            $output .= '<li>' . esc_html($info) . '</li>';
                        }
                        $output .= '</ul>';

                        $output .= '</div>';
                        $output .= '</div>';
                    }

                    $output .= '</div>';

                    // Add slider navigation buttons
                    $output .= '<button class="absolute top-1/2 left-4 transform -translate-y-1/2 bg-gray-700 text-white rounded-full p-2 z-10" id="sliderPrev">&lt;</button>';
                    $output .= '<button class="absolute top-1/2 right-4 transform -translate-y-1/2 bg-gray-700 text-white rounded-full p-2 z-10" id="sliderNext">&gt;</button>';

                    $output .= '</div>';
                    $output .= '</div>';
                    return $output;
                });
            }
        }
    }
}
add_action('init', 'register_slider_carousel_shortcode');
