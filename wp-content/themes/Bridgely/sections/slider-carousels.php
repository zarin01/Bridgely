function create_slider_shortcode($atts) {
    $atts = shortcode_atts([
        'post_id' => get_the_ID(), // Default to current post ID if not specified
    ], $atts);

    $post_id = $atts['post_id'];
    $post_type = get_post_type($post_id); // Get the post type of the post ID

    // Check if the slider repeater field exists
    if (have_rows('slider-carousel', $post_id)) {
        ob_start(); // Start output buffering

        echo '<div class="slider-container relative overflow-hidden">';
        echo '<div class="slider-wrapper flex transition-transform duration-500">';

        // Loop through the repeater field
        while (have_rows('slider-carousel', $post_id)) {
            the_row();

            $slider_image = get_sub_field('slider_image');
            $slider_description = get_sub_field('slider_description');
            $testimony_giver_details = get_sub_field('testimony_giver_details');

            echo '<div class="slider-slide flex flex-col md:flex-row w-full">';
            if ($slider_image) {
                echo '<div class="slider-image md:w-1/2">';
                echo '<img src="' . esc_url($slider_image['url']) . '" alt="' . esc_attr($slider_image['alt']) . '" class="w-full h-auto object-cover">';
                echo '</div>';
            }
            echo '<div class="slider-content md:w-1/2 p-4">';
            if ($slider_description) {
                echo '<p class="slider-description text-lg text-gray-700 mb-2">' . esc_html($slider_description) . '</p>';
            }
            if ($testimony_giver_details) {
                echo '<div class="testimony-details text-sm text-gray-500">';
                echo esc_html($testimony_giver_details);
                echo '</div>';
            }
            echo '</div>';
            echo '</div>';
        }

        echo '</div>';

        echo '<button class="prev-btn absolute left-4 top-1/2 transform -translate-y-1/2 bg-gray-500 text-white p-2 rounded-full">❮</button>';
        echo '<button class="next-btn absolute right-4 top-1/2 transform -translate-y-1/2 bg-gray-500 text-white p-2 rounded-full">❯</button>';

        echo '</div>';

        ?>
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const sliderWrapper = document.querySelector('.slider-wrapper');
                const slides = document.querySelectorAll('.slider-slide');
                const prevBtn = document.querySelector('.prev-btn');
                const nextBtn = document.querySelector('.next-btn');

                let currentIndex = 0;

                function updateSlider() {
                    sliderWrapper.style.transform = `translateX(-${currentIndex * 100}%)`;
                }

                prevBtn.addEventListener('click', () => {
                    currentIndex = (currentIndex > 0) ? currentIndex - 1 : slides.length - 1;
                    updateSlider();
                });

                nextBtn.addEventListener('click', () => {
                    currentIndex = (currentIndex < slides.length - 1) ? currentIndex + 1 : 0;
                    updateSlider();
                });
            });
        </script>
        <?php

        return ob_get_clean();
    } else {
        return '<p>No slides found.</p>';
    }
}

// Dynamically register shortcode based on post type
function register_slider_shortcodes() {
    $post_types = get_post_types(['public' => true], 'names'); // Get all public post types

    foreach ($post_types as $post_type) {
        $shortcode_name = 'custom_slider_' . $post_type; // Create unique shortcode name
        add_shortcode($shortcode_name, 'create_slider_shortcode');
    }
}
add_action('init', 'register_slider_shortcodes');
