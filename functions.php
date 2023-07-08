<?php 

/**
 * Theme Functions
 * 
 * @package Captive Gallery
 */

if ( ! defined( 'CAPTIVE_GALLERY_DIR_PATH' ) ) {
    define( 'CAPTIVE_GALLERY_DIR_PATH', untrailingslashit(  get_template_directory() ) );
}

if ( ! defined( 'CAPTIVE_GALLERY_DIR_URI' ) ) {
    define( 'CAPTIVE_GALLERY_DIR_URI', untrailingslashit(  get_template_directory_uri() ) );
}

require_once CAPTIVE_GALLERY_DIR_PATH . '/inc/helpers/autoloader.php';

function captive_get_theme_instance() {
    \CAPTIVE_GALLERY\Inc\CAPTIVE_GALLERY::get_instance();
}

captive_get_theme_instance();

/******************************
 *  Enqueue Files
******************************/

$roots_includes = array(

    '/theme-functions/theme-widgets.php',
    '/theme-functions/theme-options.php',

);
  
foreach($roots_includes as $file){

    if(!$filepath = locate_template($file)) {
        trigger_error("Error locating `$file` for inclusion!", E_USER_ERROR);
    }

    require_once $filepath;

}

unset($file, $filepath);

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