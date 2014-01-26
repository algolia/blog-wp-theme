<?php

//Add support for WordPress 3.0's custom menus
add_action( 'init', 'register_my_menu' );
 
//Register area for custom menu
function register_my_menu() {
    register_nav_menu( 'primary-menu', __( 'Primary Menu' ) );
}

// Enable post thumbnails
add_theme_support('post-thumbnails');
set_post_thumbnail_size(520, 250, true);

//Some simple code for our widget-enabled sidebar
if ( function_exists('register_sidebar') )
    register_sidebar();


//Code for custom background support
add_custom_background();


//Enable post and comments RSS feed links to head
add_theme_support( 'automatic-feed-links' );

// allow custom logo image to be added from admin
function themeslug_theme_customizer( $wp_customize ) {
$wp_customize->add_section( 'themeslug_logo_section' , array(
    'title'       => __( 'Logo', 'themeslug' ),
    'priority'    => 30,
    'description' => 'Upload a logo to replace the default site name and description in the header',
) );

$wp_customize->add_setting( 'themeslug_logo' );

$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'themeslug_logo', array(
    'label'    => __( 'Logo', 'themeslug' ),
    'section'  => 'themeslug_logo_section',
    'settings' => 'themeslug_logo',
) ) );

}
add_action('customize_register', 'themeslug_theme_customizer');

 
?>
