<?php
add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );

function enqueue_parent_styles() {
   wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}

function sidebar_widgets_init() {

    register_sidebar( array(
        'name' => __( 'Main Sidebar'),
        'id' => 'main_sidebar',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widgettitle">',
        'after_title' => '</h3>'
    ) );
}
add_action( 'widgets_init', 'sidebar_widgets_init' );


define( 'PROVOST_THEME_DIR', get_stylesheet_directory() . '/' );

//add headers
//require_once('includes/header-functions.php');
require_once (get_stylesheet_directory() . '/includes/header-functions.php');

//hide tempates
require_once (get_stylesheet_directory() . '/includes/cpt-hide.php');



// Add Shortcode
function ucf_seo_press_shortcode() {

    if(function_exists("seopress_display_breadcrumbs")) { seopress_display_breadcrumbs(); }

}
add_shortcode( 'ucf-seo-press', 'ucf_seo_press_shortcode' );