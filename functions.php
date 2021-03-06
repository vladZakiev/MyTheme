<?php 
//dinamic title tag 
function my_theme_support(){
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme' , 'my_theme_support');


function theme_menu(){
    $locations = array(
        'primary' => "Desctop Primary Menu",
        'footer' => "Footer menu"
    );

    register_nav_menus($locations);
}
add_action('init', 'theme_menu');

function theme_register_styles() { 
    $version = wp_get_theme () -> get('Version');
    wp_enqueue_style ('my-theme-style', get_template_directory_uri () . '/style.css' , array('my-theme-bootstrap'), $version, 'all' );
    wp_enqueue_style ('my-theme-bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css' , array('my-theme-fontawesome'), '4.4.1', 'all' );
    wp_enqueue_style ('my-theme-fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css' , array(), '5.13.0', 'all' );
}

add_action( 'wp_enqueue_scripts', 'theme_register_styles' );


function theme_register_scripts() { 
    wp_enqueue_script ('my-theme-jquery', 'https://code.jquery.com/jquery-3.4.1.slim.min.js' , array() , '3.4.1', true);
    wp_enqueue_script ('my-theme-popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js' , array() , '1.16.0', true);
    wp_enqueue_script ('my-theme-bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js' , array() , '3.4.1', true);
    wp_enqueue_script ('my-theme-main', get_template_directory_uri () . '/assets/js/main.js' , array() , '1.0', true);


}

add_action( 'wp_enqueue_scripts', 'theme_register_scripts' );

function theme_widgets_areas(){
    register_sidebar(
        array(
            'before_title' => '',
            'after_title' => '',
            'before_title' => '',
            'before_widget' => '',
            'after_widget' => '',
        ),
        array(
            'name' => 'Sidebar Area',
            'id' => 'sidebar-1',
            'description' => 'Sidebar Area',
        )
        );
}
add_action('widgets_init', 'theme_widgets_areas');
?>