<?php

if (! function_exists('patter_post_title')) {
    function patter_post_title($post_id = null)
    {
        // Example logic: You can call other helper functions or work with ACF, etc.
        $title = get_post_meta($post_id ?? get_the_ID(), 'patter_field_post__page_headline_h1', true);
        if (! $title) {
            // Fallback to the post title.
            $title = get_the_title($post_id);
        }
        echo $title;
    }
}
