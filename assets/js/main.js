/********************
 *  Menu Overlay
********************/

function openNav() {
    document.getElementById("headerNav").style.width = "100%";
}
  
function closeNav() {
    document.getElementById("headerNav").style.width = "0%";
}

/********************
 *  Homepage Slider
********************/

var swiper = new 
    Swiper(".homeSlider", {
        slidesPerView: 1,
        loop: true,
        mousewheel: true,
        effect: 'fade',
        freeMode: {
            enabled: true,
        },
        autoplay: {
            delay: 1000,
        },
            
    }
);