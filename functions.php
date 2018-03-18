<?php
define('ASSETS_URL', get_template_directory_uri().'/assets');

add_action('wp_enqueue_scripts','adding_style_to_my_theme');
function adding_style_to_my_theme() {
    
 wp_enqueue_style('reset', ASSETS_URL.'/css/reset.css',array(),false);
 wp_enqueue_style('style', ASSETS_URL.'/css/style.min.css',array(),false);
 wp_enqueue_script('psdprojektas',ASSETS_URL.'/js/psdprojektas.js',array('jquery'),false,true);
    
}

function hide_admin_bar(){
    show_admin_bar(false);
}
add_action('init','hide_admin_bar' );

function my_theme_supports(){
    add_theme_support('menus');
    add_theme_support('post-thumbnails');
}
add_action('init', 'my_theme_supports');

//registering menus//

function my_theme_menus() { 
    register_nav_menus(array( 
        'meniu' => __( 'Meniu' ),
        'paslaugos' => __( 'Paslaugos' )
        ));
}
add_action('init', 'my_theme_menus');
  
//     'footer-meniu' => __( 'Footerio Meniu' ) // )); //}
// add_theme_support('custom-logo'); //}
