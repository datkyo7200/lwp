<?php
//Requiring Theme Custome
require get_template_directory() . '/inc/customizer.php';
//Requiring TGM Plugin Activation
require_once get_template_directory() . '/inc/class-tgm-plugin-activation.php';
require_once get_template_directory() . '/inc/required-plugins.php';

function load_scripts()
{
    wp_enqueue_script('bootstrap-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', array('jquery'), '4.0.0', true);
    wp_enqueue_style('bootstrap-css', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css', array(), '4.0.0', 'all');
    wp_enqueue_style('template', get_template_directory_uri() . '/css/template.css', array(), '1.0', 'all');
}

add_action('wp_enqueue_scripts', 'load_scripts');


//Main configuration func
function learnwp_config()
{
    // registering our menus
    register_nav_menus(
        array(
            'my_main_menu' =>'Main Menu',
            'footer_menu'  =>'Footer Menu',
            // 'second_menu'=>'Second description'
        ),
    );
    $args_header = array(
                    'height' => 225,
                    'width' => 1920,
                );
    add_theme_support('custom-header', $args_header);
    add_theme_support('post-thumbnails');
    add_theme_support('post-formats', array( 'video', 'image' ));
    add_theme_support('title-tag'); // Sử dụng để khai báo title
    add_theme_support('custom-logo', array(
        'height' => 110,
        'width'=> 200
    ));
    $textdomain = 'learnwp';
    load_theme_textdomain($textdomain, get_stylesheet_directory() . '/languages/');
    load_theme_textdomain($textdomain, get_template_directory() . '/languages/');

    //Support for Gutenberg features
    add_theme_support('align-wide');
    add_theme_support('responsive-embeds');
    add_theme_support('editor-color-palette', array(
        array(
            'name'=>__('Blood Red', 'learnwp'),
            'slug'=> 'blood-red',
            'color' =>'#b9121b'
        ),
        array(
            'name'=>__('White Color', 'learnwp'),
            'slug'=> 'white',
            'color' =>'#ffffff'
        ),
        array(
            'name'=>__('Black Color', 'learnwp'),
            'slug'=> 'black',
            'color' =>'#333333'
        ),
    ));
    add_theme_support('disable-custom-colors');
    add_theme_support('editor-styles');
    add_theme_support('css/style-editor.css');
}

add_action('after_setup_theme', 'learnwp_config', 0);

function learnwp_sidebars()
{
    register_sidebar(
        array(
            'name' => __('Home Page Sidebar', 'learnwp'),
            'id' => 'sidebar-1',
            'description' => __('This is the Home Page Sidebar. You can add your widgets here. ', 'learnwp'),
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>'
        )
    );
    register_sidebar(
        array(
            'name' => __('Blog Sidebar', 'learnwp'),
            'id' => 'sidebar-2',
            'description' => __('This is the Blog Sidebar. You can add your widgets here. ', 'learnwp'),
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>'
        )
    );
    register_sidebar(
        array(
            'name' => __('Service 1', 'learnwp'),
            'id' => 'services-1',
            'description' => __('First Services Area. ', 'learnwp'),
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>'
        )
    );
    register_sidebar(
        array(
            'name' => __('Service 2', 'learnwp'),
            'id' => 'services-2',
            'description' => __('Second Services Area. ', 'learnwp'),
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>'
        )
    );
    register_sidebar(
        array(
            'name' => __('Service 3', 'learnwp'),
            'id' => 'services-3',
            'description' => __('Third Services Area. ', 'learnwp'),
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>'
        )
    );
    register_sidebar(
        array(
            'name' => __('Social Media Icons', 'learnwp'),
            'id' => 'social-media',
            'description' => __('Social Media Icons Widget Area. Drag and drop your widgets here. ', 'learnwp'),
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>'
        )
    );
}
// registering our sidebars
add_action('widgets_init', 'learnwp_sidebars');

function wpdocs_after_setup_theme()
{
    add_theme_support('html5', array( 'search-form' ));
}
add_action('after_setup_theme', 'wpdocs_after_setup_theme');
