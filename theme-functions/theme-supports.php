<?php

/**
 * Add Theme Supports
 * 
 * @package Captive Gallery
 */

function captive_theme_setup() {

    add_theme_support( 'title-tag' );
    add_theme_support( 'custom-logo' );
    add_theme_support( 'menus' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'widgets' );
    add_theme_support( 'admin-bar', array( 'callback' => '__return_false' ) );

}

add_action( 'after_setup_theme', 'captive_theme_setup' );

add_post_type_support( 'page', 'excerpt' );

/******************************
 *  SVGs
******************************/

add_filter( 'wp_check_filetype_and_ext', function($data, $file, $filename, $mimes) {
    $filetype = wp_check_filetype( $filename, $mimes );
    return [
        'ext' => $filetype['ext'],
        'type' => $filetype['type'],
        'proper_filename' => $data['proper_filename']
    ];
}, 10, 4 );
  
function cc_mime_types( $mimes ){
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}

add_filter( 'upload_mimes', 'cc_mime_types' );
  
function fix_svg() {
    echo 
    '<style type="text/css">
        .attachment-266x266, .thumbnail img {
            width: 100% !important;
            height: auto !important;
        }
    </style>';
}
  
add_action( 'admin_head', 'fix_svg' );


?>