<?php 

/**
 * Theme Options Pages
 * 
 * @package Captive Gallery
 */

/******************************
 *  Options Page
******************************/

if( function_exists( 'acf_add_options_page' ) ) {

    acf_add_options_page(
        array(
            'page_title' => 'General Theme Settings',
            'menu_title' => 'Theme Settings',
            'menu_slug' => 'theme-general-settings',
            'redirect' => false        
        )
    );

    acf_add_options_sub_page(
        array(
            'page_title' => 'Theme Contact Info',
            'menu_title' => 'Contact Info',
            'parent_slug' => 'theme-general-settings'
        )
    );
}

/******************************
 *  Google Maps API Key
******************************/

function my_acf_google_map_api( $api ){
	$api['key'] = 'AIzaSyDnku7sd6GHa406br-VpBg2DPYDyb8VzIM';
	return $api;
}
 
add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');

?>