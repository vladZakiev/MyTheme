<?php 
    function theme_register_styles() { 
        wp_enqueue_style('getStyles', get_template_directory_uri () . '/style.css' , array(), '1.0.0', 'all' );
    }

    add_action( 'wp_enqueue_scripts', 'theme_register_styles' );
?>