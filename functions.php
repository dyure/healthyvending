<?php
    // to remove admin bar
    add_filter('show_admin_bar', '__return_false');

    // to define some root directories
    define('D5_THEME_ROOT', get_template_directory_uri());
    define('D5_CSS_DIR', D5_THEME_ROOT . '/css');
    define('D5_JS_DIR', D5_THEME_ROOT . '/js');

    add_action( 'wp_enqueue_scripts', function () {
        wp_enqueue_style('theme', get_stylesheet_uri());
        wp_enqueue_style('main', D5_CSS_DIR . '/styles.css');
        wp_enqueue_style('styles_new', D5_CSS_DIR . '/styles_new.css');
        wp_enqueue_style('bootstrap_502', D5_CSS_DIR . '/bootstrap.min.css');

        wp_deregister_script('jquery-core');
        wp_register_script('jquery-core', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js');
        wp_enqueue_script('jquery');
        wp_register_script('my_jquery_scripts', D5_JS_DIR . '/scripts.js');
        wp_enqueue_script('my_jquery_scripts');
    });

    add_action('init', function() {
        // to add an image to any post
        add_theme_support('post-thumbnails');

        // to add menu areas
        if(function_exists('register_nav_menus')){
            register_nav_menus(
                array(
                  'left_menu' => 'Левое меню',
                  'right_menu' => 'Правое меню',
                  'mobile_menu' => 'Мобильное меню'
                )
            );
        }
    });
?>