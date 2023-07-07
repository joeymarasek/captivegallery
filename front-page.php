<?php 

/**
 * Front Page Template
 * 
 * @package Captive Gallery
 */

 get_header();

?>

<main class="home">
        
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">

            <div class="swiper-slide" id="slide-1">
                <div class="swiper-cards">
                    <h1 class="hero-title">
                        <?php the_field( 'home_gallery_caption_1', 'option' ); ?>
                    </h1>
                </div>
                <img src="<?php the_field( 'home_gallery_image_1', 'option' ); ?> " alt="">
             </div>

            <div class="swiper-slide" id="slide-2">
                <div class="swiper-cards">
                    <h1 class="hero-title">
                        <?php the_field( 'home_gallery_caption_2', 'option' ); ?>
                    </h1>
                </div>
                <img src="<?php the_field( 'home_gallery_image_2', 'option' ); ?> " alt="">
            </div>

            <div class="swiper-slide" id="slide-3">
                <div class="swiper-cards">
                    <h1 class="hero-title">
                        <?php the_field( 'home_gallery_caption_3', 'option' ); ?>
                    </h1>
                </div>
                <img src="<?php the_field( 'home_gallery_image_3', 'option' ); ?> " alt="">
            </div>

            <div class="swiper-slide" id="slide-4">
                <div class="swiper-cards">
                    <h1 class="hero-title">
                        <?php the_field( 'home_gallery_caption_4', 'option' ); ?>
                    </h1>
                </div>
                <img src="<?php the_field( 'home_gallery_image_4', 'option' ); ?> " alt="">
            </div> 

        </div>
    </div>

</main>

<?php get_footer();