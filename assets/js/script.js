jQuery(document).ready(function ($) {
    let pageSlider = document.querySelector('.swiper_main')
    const mySwiper = new Swiper(pageSlider, {
        slidesPerView: 1,
        speed: 1500,
        pagination: {
            el: '.swiper-pagination',
            type: 'progressbar',
        },
        mousewheel: true,
        draggable: false,
        parallax: true,
        on: {
            slideChangeTransitionStart: function () {
                $('.title_h1:not(.hero_title)').hide(0);
                $('.title_h1').removeClass('aos-init').removeClass('aos-animate');
            },
            slideChangeTransitionEnd: function () {
                $('.title_h1:not(.hero_title)').show(0);
                AOS.init();
            },
        },
    })
})