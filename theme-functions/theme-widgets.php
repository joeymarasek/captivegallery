<?php

/**
 * Theme Widgets Functions
 * 
 * @package Captive Gallery
 */

function captive_widget_areas() {
    register_sidebar(
        array(
            'before_title' => '<div class="divider-left">',
            'after_title' => '</div>',
            'before_widget' => '',
            'after_widget' => '',
            'name' => 'About Widget Area',
            'id' => 'sidebar-1',
            'description' => 'Widget area for about page'
        )
    );
}

add_action( 'widgets_init', 'captive_widget_areas' );

?>