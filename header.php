<?php 

/**
 * Header Template
 * 
 * @package Captive Gallery
 */

?>

<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>" >

<head>

    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="<?php the_excerpt(); ?>" />

    <title>
        <?php wp_title(' | ', true, 'right'); ?><?php bloginfo( 'name' ); ?>
    </title>

    <?php wp_head(); ?>
        
</head>

<body>

<?php body_class(); ?>

<?php wp_body_open(); ?>

    <div id="headerNav">

        <svg
            onclick="closenav()"
            xmlns="http://www.w3.org/2000/svg" 
            viewBox="0 0 100 100"
        >
            <path 
                d="M14.354.354 14 0 7.177 6.823.354 0 0 .354l6.823 6.823L0 14l.354.354L7.177 7.53 14 14.354l.354-.354L7.53 7.177 14.354.354z"
            />
        </svg>

        <div class="left">
            <?php if ( has_custom_logo() ) { 
                the_custom_logo(); 
                } else (
                    bloginfo( 'name' )
                ) 
            ?>
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

        <?php if ( has_custom_logo() ) { 
            the_custom_logo(); 
            } else (
                bloginfo( 'name' )
            ) 
        ?>
            
        <svg
            onclick="openNav()"
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 100 100"
        >
            <g>
                <polyline
                    fill="#000"
                    points="20.1,39.3 80.1,39.3 80.1,37.3 20.1,37.3"
                ></polyline>
                <polyline
                    fill="#000"
                    points="20.1,53.8 80.1,53.8 80.1,51.8 20.1,51.8"
                ></polyline>
                <polyline
                    fill="#000"
                    points="20.1,68.3 80.1,68.3 80.1,66.3 20.1,66.3"
                ></polyline>
            </g>
        </svg>

    </header>