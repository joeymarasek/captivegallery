/********************
 *  Menu Overlay
********************/

function openNav() {
    document.getElementById("headerNav").style.cssText = "width:100%; opacity:100%";
    document.getElementsByTagName("main").style.cssText = "opacity:0";
}
  
function closeNav() {
    document.getElementById("headerNav").style.cssText = "width:0%; opacity:0";
    document.getElementsByTagName("main").style.cssText = "opacity:100%";
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