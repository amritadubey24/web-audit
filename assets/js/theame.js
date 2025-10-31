// header mobile  submenu js here
$(document).ready(function () {
    $(".web_mobileToggle").click(function () {
        $(this).toggleClass("active");
        $(".navlinks").toggleClass("active");
    });
});



// header sticky js here
$(window).scroll(function () {
    var sticky = $(".web_header--inner"),
        scroll = $(window).scrollTop();

    if (scroll >= 100) sticky.addClass("fixed");
    else sticky.removeClass("fixed");
});

// client testimonial js here

var swiper = new Swiper(".upcoming-program", {
    slidesPerView: 4,
    spaceBetween: 15,
    freeMode: true,
    // pagination: {
    //     el: ".swiper-pagination",
    //     clickable: false,
    // },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    breakpoints: {
        300: {
            slidesPerView: 1,
            spaceBetween: 10,
        },
        480: {
            slidesPerView: 2,
            spaceBetween: 10,
        },
        767: {
            slidesPerView: 3,
            spaceBetween: 10,
        },
        1200: {
            slidesPerView: 4
        },
    },

});