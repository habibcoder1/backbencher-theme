
/* ==================================
    Career Slider JS
================================== */
jQuery('.career-slider_items').slick({
    autoplay: true,
    autoplaySpeed: 3000,
    infinite: true,
    speed: 800,
    slidesToShow: 4,
    slidesToScroll: 1,
    arrows: false,
    dots: false,
    pauseOnHover: false,
    responsive: [
        {
            breakpoint: 992,
            settings: {
                slidesToShow: 2,
            },
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
            },
        }
    ]
});