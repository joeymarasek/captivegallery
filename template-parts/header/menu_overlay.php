<?php 

/**
 * Menu Overlay Template
 * 
 * @package Captive Gallery
 */

?>

<div id="headerNav">

    <svg
        id="closebtn"
        onclick="closeNav()"
        xmlns="http://www.w3.org/2000/svg" 
        viewBox="0 0 25 25"
    >
        <path 
            d="M14.354.354 14 0 7.177 6.823.354 0 0 .354l6.823 6.823L0 14l.354.354L7.177 7.53 14 14.354l.354-.354L7.53 7.177 14.354.354z"
        />
    </svg>

    <div class="left">
        <?php 
            if( function_exists( 'the_custom_logo' ) ) {
                the_custom_logo();
            }
        ?>
    </div>

    <div class="right">
        <?php 
            wp_nav_menu(
                array(
                    'theme_location' => 'captive-main-menu',
                    'container_class' => 'overlay-nav-menu',
                ) 
            ); 
        ?>
    </div>

</div>