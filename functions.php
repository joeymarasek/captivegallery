<?php 

/**
 * Theme Functions
 * 
 * @package Captive Gallery
 */

/******************************
 *  Enqueue Files
******************************/

$roots_includes = array(

    '/theme-functions/theme-enqueue.php',
    '/theme-functions/theme-supports.php',
    '/theme-functions/theme-menus.php',
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

?>