<?php
/**
 * Autoloader file for theme.
 *
 * @package Captive Gallery
 */

namespace CAPTIVE_GALLERY\Inc;

use CAPTIVE_GALLERY\Inc\Traits\Singleton;

class CAPTIVE_GALLERY {
    use Singleton;

    protected function __construct() {

        Assets::get_instance();
        Menus::get_instance();

        $this->setup_hooks();
        
    } 

    protected function setup_hooks() {
        
       add_action( 'after_setup_theme',[ $this, 'setup_theme' ] );
       
    }

    public function setup_theme() {

        add_theme_support( 'title-tag' );

        add_theme_support( 'custom-logo', [
            'header-text' => [ 'site-title', 'site-description' ],
            'height' => 100,
            'width' => 400,
            'flex-height' => true,
            'flex-width' => true,
            ] 
        );

        add_theme_support( 'custom-background',[
            'default-color' => '#fff',
            'default-image' => '',
            'default-repeat' => 'no-repeat',
            'default-size' => 'cover',
            ] 
        );

        add_theme_support( 'post-thumbnails' );

        add_theme_support( 'customize-selective-refrest-widgets' );

        add_theme_support( 'automatic-feed-links' );

        add_theme_support( 'html5', [
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'script',
            'style',
            ] 
        );

        add_editor_style();

        add_theme_support( 'wp-block-styles' );

        add_theme_support( 'align-wide' );

        add_post_type_support( 'page', 'excerpt' );

        global $content_width;
        if ( ! isset( $content_width ) ) {
            $content_width = 900;
        }

        add_theme_support( 'menus' );

        add_theme_support( 'widgets' );

    }

}

?>