
<?php

function load_stylesheets()
{
    // font googleapis
    wp_register_style('font', get_template_directory_uri() . 'https://fonts.googleapis.com', array(), 1, 'all');
    wp_enqueue_style('font');

    // // font gstatic
    wp_register_style('fontgstatic', get_template_directory_uri() . 'https://fonts.gstatic.com', array(), 1, 'all');
    wp_enqueue_style('fontgstatic');


    // all.min.css
    wp_register_style('allmincss', get_template_directory_uri() . '/css/all.min.css', array(), 1, 'all');
    wp_enqueue_style('allmincss');

    // all.css
    wp_register_style('allcss', get_template_directory_uri() . '/css/all.css', array(), 1, 'all');
    wp_enqueue_style('allcss');


    // style.css
    wp_register_style('styles', get_template_directory_uri() . '/css/style.css', array(), 1, 'all');
    wp_enqueue_style('styles');


    // custom css
    wp_register_style('custom', get_template_directory_uri() . '/custom.css', array(), 1, 'all');
    wp_enqueue_style('custom');

}

add_action('wp_enqueue_scripts', 'load_stylesheets');








// 
// 
// 
// Load scripts

function addjs(){

    // main js
    wp_register_script('js', get_template_directory_uri() . './js/main.js', array(), 1, 1, 1);
    wp_enqueue_script('js');

    // custom js
    wp_register_script('custom', get_template_directory_uri() . '/custom.js', array(), 1, 1, 1);
    wp_enqueue_script('custom');
}

add_action('wp_enqueue_scripts', 'addjs');

// 
// 
// 


// 
// 
// Theme support 
add_theme_support('menus');
add_theme_support('post-thumbnails');

// 
// 


// 
// 
// Register Menus
register_nav_menus(
        array(
            'top-menu' => __('Top Menu', 'safariboyz-theme'),
            // 'sub-menu' => __('Sub Menu', 'safariboyz-theme')
        )
    );
// 
// 



// 
// 
// 
// 
// 
// Copied from head index.html
// Start
// 
// <link rel="stylesheet" href="css/style.css" />
// <link rel="stylesheet" href="css/all.css" />
// <link rel="stylesheet" href="css/all.min.css" />
// <link rel="preconnect" href="https://fonts.googleapis.com" />
// <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
// 
// End




// scripts
// 
// <script src="js/main.js"></script>
// 
// 
// 
// 
// 

