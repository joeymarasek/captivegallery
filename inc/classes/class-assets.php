<?php
/**
 * Enqueue Theme Assets
 *
 * @package Captive Gallery
 */

namespace CAPTIVE_GALLERY\Inc;

use CAPTIVE_GALLERY\Inc\Traits\Singleton;

class Assets {
    use Singleton;

    protected function __construct() {

        $this->setup_hooks();

    } 

    protected function setup_hooks() {

        add_action( 'wp_enqueue_scripts', [ $this, 'register_styles' ] );
        add_action( 'wp_enqueue_scripts', [ $this, 'register_scripts' ] );
        
    }

    public function register_styles() {

        /** Main **/
        wp_register_style( 'captive-stylesheet', get_stylesheet_uri(), [], filemtime( CAPTIVE_GALLERY_DIR_PATH . '/style.css' ), 'all' );
        wp_register_style( 'captive-google-fonts', 'https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@300&family=Montserrat:wght@300;400&display=swap' );

        /** Slick **/
        wp_register_style( 'captive-slick-css', CAPTIVE_GALLERY_DIR_URI . '/assets/css/slick/slick.css', [], false, 'all' );
        wp_register_style( 'captive-slick-theme-css', CAPTIVE_GALLERY_DIR_URI . '/assets/css/slick/slick.theme.css', [], false, 'all' );
        wp_register_style( 'captive-slick-lightbox-css', CAPTIVE_GALLERY_DIR_URI . '/assets/css/slick/slick.lightbox.css', [], false, 'all' );

        /** Swiper **/
        wp_register_style( 'captive-swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css' );

        /** Enqueue Styles **/
        wp_enqueue_style( 'captive-google-fonts' );
        wp_enqueue_style( 'captive-stylesheet' );

        if( is_front_page() ) {
            wp_enqueue_style( 'captive-swiper-css' );
        }

         /** Swiper Gallery **/
        if( is_single() || is_author() ) {
            wp_enqueue_style( 'captive-slick-css' );
            wp_enqueue_style( 'captive-slick-theme-css' );
            wp_enqueue_style( 'captive-slick-lightbox-css' );
        }

    }

    public function register_scripts() {

        /** Main **/
        wp_register_script( 'captive-scripts', CAPTIVE_GALLERY_DIR_URI . '/assets/js/main.js', [], filemtime( CAPTIVE_GALLERY_DIR_PATH . '/assets/js/main.js' ), true );

        /** Slick **/
        wp_register_script( 'captive-slick-js', CAPTIVE_GALLERY_DIR_URI . '/assets/js/slick/slick.js', [ 'jquery' ], false, true );
        wp_register_script( 'captive-slick-lightbox-js', CAPTIVE_GALLERY_DIR_URI . '/assets/js/slick/slick.lightbox.js', [ 'jquery' ], false, true );

        /** Swiper **/
        wp_register_script( 'captive-swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js' );

        /** Enqueue Scripts **/
        wp_enqueue_script( 'captive-scripts' );

        if( is_front_page() ) {
            wp_enqueue_script( 'captive-swiper-js' );
        }

         /** Swiper Gallery **/
        if( is_single() || is_author() ) {
            wp_enqueue_script( 'captive-slick-js' );
            wp_enqueue_script( 'captive-slick-lightbox-js' );
        }

    }

}

?>