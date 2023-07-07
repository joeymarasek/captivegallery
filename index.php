<?php 

/**
 * Main Index Template
 * 
 * @package Captive Gallery
 */

?>

<?php get_header(); ?>
<main class="wide">

    <section class="archive-section">
        
        <h1 class="big-title">Latest</h1>
        <div class="divider">
            <?php echo post_type_archive_title( '', false ); ?>
        </div>
        
        <div class="archive-row">
            <?php 
                if( have_posts() ){
                    while ( have_posts() ) {
                        the_post();
                        get_template_part( 'template-parts/content', 'archive' );
                    }
                }
            ?>
        </div>

    </section>

</main>
<?php get_footer(); ?>