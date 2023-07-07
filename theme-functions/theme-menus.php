<?php

/**
 * Theme Menus Functions
 * 
 * @package Captive Gallery
 */

function captive_register_nav_menus() {
    register_nav_menus( 
        array(
            'main-menu' => 'Main Menu',
            'footer-menu' => 'Footer Menu'
        ) 
    );
}

add_action( 'init', 'captive_register_nav_menus' );

?>