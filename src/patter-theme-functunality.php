<?php

namespace Patter\WPThemeFunctionality;

class ThemeFunctionality
{
    public function __construct()
    {
        add_action('after_setup_theme', [$this, 'themeSetup']);
    }

    public function themeSetup()
    {
        // Add theme support for title tag
        echo 'Theme setup function called';
    }
}
