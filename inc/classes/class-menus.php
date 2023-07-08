<?php
/**
 * Theme Menus
 *
 * @package Captive Gallery
 */

namespace CAPTIVE_GALLERY\Inc;

use CAPTIVE_GALLERY\Inc\Traits\Singleton;

class Menus {
    use Singleton;

    protected function __construct() {

        $this->setup_hooks();

    } 

    protected function setup_hooks() {

        add_action( 'init', [ $this, 'register_menus' ] );
        
    }

    public function register_menus() {

        register_nav_menus( [
            'captive-main-menu' => esc_html__( 'Main Menu', 'captivegallery' ),
            'captive-footer-menu-1' => esc_html__( 'Footer Menu 1', 'captivegallery' ),
            'captive-footer-menu-2' => esc_html__( 'Footer Menu 2', 'captivegallery' ),
            'captive-footer-menu-3' => esc_html__( 'Footer Menu 3', 'captivegallery' ),
            'captive-footer-menu-4' => esc_html__( 'Footer Menu 4', 'captivegallery' ),
            ]    
        ); 
    }

}

?>