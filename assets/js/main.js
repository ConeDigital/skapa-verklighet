//= include ./src/example/file.js

jQuery(document).ready( function($) {

    //All swipers
    var swiper = new Swiper('.review-swiper', {
        slidesPerView: 1, //1000px => 1
        autoplayDisableOnInteraction: false,
        pagination: '.swiper-pagination',
        paginationClickable: true,
        grabCursor: true
        //loop: true
    });

});