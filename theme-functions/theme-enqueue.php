<?php 

/**
 * Enqueue Theme Functions
 * 
 * @package Captive Gallery
 */

function captive_enqueue() {

    /** 
     *  Register  
     */

    /** Main **/
    wp_register_style( 'captive-stylesheet', get_stylesheet_uri(), [], filemtime( get_template_directory() . '/style.css' ), 'all' );
    wp_register_style( 'captive-google-fonts', 'https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@300&family=Montserrat:wght@300;400&display=swap' );

    /** Slick **/
    wp_register_style( 'captive-slick-css', get_template_directory_uri() . '/assets/css/slick/slick.css', [], false, 'all' );
    wp_register_style( 'captive-slick-theme-css', get_template_directory_uri() . '/assets/css/slick/slick.theme.css', [], false, 'all' );
    wp_register_style( 'captive-slick-lightbox-css', get_template_directory_uri() . '/assets/css/slick/slick.lightbox.css', [], false, 'all' );

    /** Swiper **/
    wp_register_style( 'captive-swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css' );

     /** 
     *  Scripts  
     */

    /** Main **/
    wp_register_script( 'captive-scripts', get_template_directory_uri() . '/assets/js/main.js', [], filemtime( get_template_directory() . '/assets/js/main.js' ), true );

    /** Slick **/
    wp_register_script( 'captive-slick-js', get_template_directory_uri() . '/assets/js/slick/slick.js', [ 'jquery' ], false, true );
    wp_register_script( 'captive-slick-lightbox-js', get_template_directory_uri() . '/assets/js/slick/slick.lightbox.js', [ 'jquery' ], false, true );

    /** Swiper **/
    wp_register_script( 'captive-swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js' );

    /** 
     *  Enqueue  
     */

    /** Styles **/
    wp_enqueue_style( 'captive-google-fonts' );
    wp_enqueue_style( 'captive-stylesheet' );

    /** Scripts **/
    wp_enqueue_script( 'captive-scripts' );

    /** Front Page **/
    if( is_front_page() ) {
        wp_enqueue_style( 'captive-swiper-css' );
        wp_enqueue_script( 'captive-swiper-js' );
    }

    /** Swiper Gallery **/
    if( is_single() || is_author() ) {
        wp_enqueue_style( 'captive-slick-css' );
        wp_enqueue_style( 'captive-slick-theme-css' );
        wp_enqueue_style( 'captive-slick-lightbox-css' );
        wp_enqueue_script( 'captive-slick-js' );
        wp_enqueue_script( 'captive-slick-lightbox-js' );
    }

}

add_action( 'wp_enqueue_scripts', 'captive_enqueue' );

?>