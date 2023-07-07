<?php 

/**
 * Footer Template
 * 
 * @package Captive Gallery
 */

?>

<footer>

<div>
    <h2 class="small-title">Visit</h2>
    <ul>
        <li>
            <?php the_field( 'gallery_address_line_1', 'option' ); ?>
        </li>
        <li>
            <?php the_field( 'gallery_address_line_2', 'option' ); ?>
        </li>
    </ul>
</div>

<div>
    <h2 class="small-title">Hours</h2>
    <ul>
        <li>
            <?php the_field( 'gallery_hours_line_1', 'option' ); ?>
        </li>
        <li>
            <?php the_field( 'gallery_hours_line_2', 'option' ); ?>
        </li>
    </ul>
</div>

<div>
    <h2 class="small-title">Contact</h2>
    <ul>
        <li>
            <a href="tel:<?php the_field( 'gallery_phone_number', 'option' ); ?>">
                <?php the_field( 'gallery_phone_number', 'option' ); ?>
            </a>
        </li>
        <li>
            <a href="mailto:<?php the_field( 'gallery_email', 'option' ); ?>">
                <?php the_field( 'gallery_email', 'option' ); ?>
            </a>
        </li>
    </ul>
</div>

<div>
    <ul class="list-center">
        <li>Copyright <?php echo date("Y"); ?>
            <?php bloginfo('name'); ?>. All Rights Reserved.
        </li>
        <li>
            Site created by <a href="<?php echo wp_get_theme()->get( 'AuthorURI' ); ?>" target="_blank"><?php echo wp_get_theme()->get( 'Author' ); ?></a>.
        </li>
    </ul>
</div>

</footer>

<?php wp_footer(); ?>

</body>

</html>