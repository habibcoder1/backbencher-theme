(function($){
    'use strict';
    jQuery(document).ready(function($){

        /* ======================
            menu hide show
        ====================== */
        let hambergerIcon = document.querySelectorAll('.hambergur-icon i');
        let menuCloseIcon = document.querySelectorAll('.logo-close_icon .close-icon i');
        let mainMenu      = document.querySelectorAll('.manu-address_area');

        jQuery(hambergerIcon).click(function(){
            jQuery(mainMenu).slideDown(300); //300 slidedown
        });

        jQuery(menuCloseIcon).click(function(){
            jQuery(mainMenu).slideUp(300); //300 slideup
        });

        /* ===========================
            Sticky Header by JS
        =========================== */
        window.addEventListener("scroll", function () {
            let stickyHeader = document.querySelector(".header-area");
            // check for mobile version
            if (window.innerWidth > 768) {
                stickyHeader.classList.toggle("bbs_sticky-menu", window.scrollY > 100);
            } else {
                stickyHeader.classList.remove("bbs_sticky-menu");
            }
        });
        

        /* ===========================
            Scroll To Top 
        =========================== */
        jQuery('.bbsscroll_top').hide();
        jQuery(window).scroll(function(){
            if (jQuery(window).scrollTop()>300) {
                jQuery('.bbsscroll_top').fadeIn();
            }
            else{
                jQuery('.bbsscroll_top').fadeOut();
            }
        });

        jQuery('.bbsscroll_top i').click(function(){
            jQuery('html,body').animate({scrollTop:0}, 180);
            return false;
        });

        /* ===========================
            Tooltip for Scroll Top
        =========================== */
        let scrollTooltip = document.querySelector('.bbsscroll_top');
        let tooltip   = new bootstrap.Tooltip(scrollTooltip, {
            boundary: document.body
        });
        
        /* ===============
            Blog Slider
        =============== */
        const progressCircle  = document.querySelector(".autoplay-progress svg");
        var swiper = new Swiper(".blog-slider_details", {
            spaceBetween: 30,
            loop: true,
            centeredSlides: true,
            slidesPerView: 1,
            speed: 800,
            autoplay:{
                delay: 4000,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                type: "fraction",
            },
            on: {
                autoplayTimeLeft(s, time, progress) {
                progressCircle.style.setProperty("--progress", 1 - progress);
                }
            }
        });

        /* ========================
            About Service Slider
        ======================== */
        var swiper = new Swiper(".aboutservice-slider", {
            direction: "vertical",
            spaceBetween: 30,
            loop: true,
            centeredSlides: true,
            slidesPerView: 6,
            speed: 500,
            autoplay:{
                delay: 3000,
                disableOnInteraction: false,
            },
            breakpoints: {
                // here count min-width
                300:{
                    spaceBetween: 20,
                },
                768:{
                    spaceBetween: 30,
                },
            },
        });
        
        /* ========================
            Testimonial Slider
        ======================== */
        jQuery('.testimonial-details').slick({
            autoplay: true,
            autoplaySpeed: 4000,
            infinite: true,
            speed: 1000,
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            dots: false,
            pauseOnHover: false,
        });        
        
       /* ==================
            Blog Mixitup (only load which page will set mixitup)
        ================== */
        let blogItems = document.querySelector('.allblog-items');
        if(blogItems){
            var mixer = mixitup(blogItems);
        }


        
        
       
        

    });
})(jQuery);