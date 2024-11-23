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

                    // Slider container
                    $output  = '<div class="relative bg-primary_gray h-850 overflow-hidden pt-16 pb-20">';
                    $output .= '<div class="relative bg-primary_gray w-full mx-auto overflow-hidden max-w-1210 px-5 py-0">';
                    $output .= '<h2 class="text-custom_gold text-5xl text-center w-full capitalize font-bold mb-6 mt-10">' . esc_html($slider_title) . '</h2>';
                    $output .= '<div class="relative flex transition-transform duration-500 ease-in-out pt-16 pb-20 h-850" id="sliderWrapper">';

                    // Slides
                    foreach ($slider_repeater as $slide) {
                        $image_url    = $slide['slider_image'] ?? '';
                        $description  = $slide['slider_description'] ?? 'No description available';
                        $giver_details = $slide['testimony_giver_details'] ?? [];

                        $output .= '<div class="flex-none w-full">';
                        $output .= '<div class="p-4 pb-10 flex flex-row items-start relative max-w-880 px-5 mx-auto justify-center split-content-with-image">';

                        // Slide image
                        if (!empty($image_url)) {
                            $output .= '<img src="' . esc_url($image_url) . '" alt="Slide Image" class="rounded shadow-lg mb-4 max-w-290">';
                        } else {
                            $output .= '<p class="text-center text-white w-4/12"></p>';
                        }

                        // Slide description and details
                        $output .= '<div class="relative flex flex-col x840:block x840:w-45p x960:w-6/12 w-fit pl-9p items-end testimony-slider">';
                        $output .= '<p class="relative text-xl text-white italic testimony-before">'
                                     // <span class="text-5xl leading-none text-gold align-top mr-2 text-poppins text-250 text-custom_gold">&ldquo;</span> 
                                        . esc_html($description) . 
                                    '</p>';




                        if (!empty($giver_details)) {
                            $output .= '<div class="text-white mt-2 text-left">';
                            foreach ($giver_details as $detail) {
                                $user_info = $detail['testimony_users_information'] ?? '';
                                if (!empty($user_info)) {
                                    $output .= '<p class="font-bold mb-0">' . esc_html($user_info) . '</p>';
                                }
                            }
                            $output .= '</div>';
                        } else {
                            $output .= '<p class="text-center text-white"></p>';
                        }

                        $output .= '</div>'; // End slide details
                        $output .= '</div>'; // End slide content
                        $output .= '</div>'; // End slide
                    }

                    $output .= '</div>'; // End slider wrapper

                    // Navigation buttons
                    $output .= '<button class="absolute top-1/4 left-4 transform -translate-y-1/2 bg-none text-white rounded-full p-2 z-10" id="sliderPrev">';
                    $output .= '<svg xmlns="http://www.w3.org/2000/svg" fill="#FFF" viewBox="0 0 320 512" width="40" height="35">';
                    $output .= '<path fill="#FFF" d="M41.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 256 246.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z"></path>';
                    $output .= '</svg>';
                    $output .= '</button>';

                    $output .= '<button class="absolute top-1/4 right-4 transform -translate-y-1/2 bg-none text-white rounded-full p-2 z-10" id="sliderNext">';
                    $output .= '<svg xmlns="http://www.w3.org/2000/svg" fill="#FFF" viewBox="0 0 320 512" width="35" height="35">';
                    $output .= '<path fill="#FFF" d="M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5 12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z"></path>';
                    $output .= '</svg>';
                    $output .= '</button>';

                    $output .= '</div>'; // End slider container
                    $output .= '</div>'; // End outer container

                    return $output;
                });
            }
        }
    }
}
add_action('init', 'register_slider_carousel_shortcode');
?>
