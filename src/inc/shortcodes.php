<?php

// ACF gallery shortcode
function gallery_slider_shortcode($atts)
{
    ob_start();
    get_template_part('partials/gallery');
    return ob_get_clean();
}
add_shortcode('gallery', 'gallery_slider_shortcode');