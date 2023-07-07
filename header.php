<?php 

/**
 * Header Template
 * 
 * @package Captive Gallery
 */

wp_head();

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="<?php the_excerpt(); ?>" />

    <title>
        <?php wp_title(' | ', true, 'right'); ?><?php bloginfo( 'name' ); ?>
    </title>
        
</head>

<body>

    <div id="headerNav">

        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()" >&times;</a>

        <div class="left">
            <?php if ( function_exists( 'the_custom_logo' ) ) { the_custom_logo(); } ?>
        </div>

        <div class="right">
            <?php 
                wp_nav_menu(
                    array(
                        'theme_location' => 'main-menu',
                    ) 
                ); 
            ?>
        </div>

    </div>

    <header>

        <?php if ( function_exists( 'the_custom_logo' ) ) { the_custom_logo(); } ?>
            
        <svg
            onclick="openNav()"
            class="menu-open"
            xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink"
            id="Layer_1"
            viewBox="0 0 100 100"
            xml:space="preserve"
        >
            <g>
                <polyline
                    fill="#000000"
                    points="20.1,39.3 80.1,39.3 80.1,37.3 20.1,37.3"
                ></polyline>
                <polyline
                    fill="#000000"
                    points="20.1,53.8 80.1,53.8 80.1,51.8 20.1,51.8"
                ></polyline>
                <polyline
                    fill="#000000"
                    points="20.1,68.3 80.1,68.3 80.1,66.3 20.1,66.3"
                ></polyline>
            </g>
        </svg>

    </header>