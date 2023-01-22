<?php 
//add theme support
add_theme_support('title-tag');
add_theme_support('post-thumnails');
add_theme_support('post_formats', ['aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat']);
add_theme_support('html5');
add_theme_support('automatic-feed-links');
add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('custom-logo');
add_theme_support('customizer-selective-refresh-widgets');
add_theme_support('starter-content');

//load in our css
function wphierarchy_enque_style(){
    wp_enqueue_style('main-css', get_stylesheet_directory_uri() . './style.css', [], time(), 'all');
}

add_action('wp_enqueue_scripts', 'wphierarchy_enque_style');



// nav menu register
register_nav_menus([
    'main-menu' => esc_html__('Dain Menu','wpheierachy' ),
]);

// setup widgets area
function wphierarchy_widgets_init() {
    register_sidebar([
        'name'     => esc_html__('Side Menu', 'wphierarchy'),
        'id'       => 'main-sidebar',
        'description' => esc_html__('add widgets for main sidebar here', 'wphierarchy'),
        'before_widgets' => '<section class="widget">',
        'after_widgets' => '</section>',
        'before_title'   => '<h2 class="widget-tite>',
        'after_title'    => '</h2>',
    ]);

}
add_action('widgets_init', 'wphierarchy_widgets_init');
?>