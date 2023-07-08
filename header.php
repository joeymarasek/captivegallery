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

<body
    <?php body_class(); ?>  
>

<?php 
    if( function_exists( 'wp_body_open' ) ) {
        wp_body_open();
    }
?>   

    <header>

        <?php get_template_part( 'template-parts/header/menu_overlay' ); ?>

        <?php 
            if( function_exists( 'the_custom_logo' ) ) {
                the_custom_logo();
            }
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