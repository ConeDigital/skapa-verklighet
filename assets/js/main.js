//= include ./src/example/file.js

jQuery(document).ready( function($) {

    //All swipers
    var swiper = new Swiper('.review-swiper', {
        slidesPerView: 1,
        autoplayDisableOnInteraction: false,
        pagination: '.swiper-pagination',
        paginationClickable: true,
        grabCursor: true
        //loop: true
    });
    var swiper = new Swiper('.modal-swiper', {
        slidesPerView: 1,
        autoplayDisableOnInteraction: false,
        pagination: '.swiper-pagination',
        paginationClickable: true,
        grabCursor: true
        //loop: true
    });


    ////Open and close modal
    //$('.register-link').on('click', function(e){
    //    e.preventDefault();
    //    $(".modal-wrapper").fadeIn('fast');
    //});
    //$('.modal-close').on('click', function(e){
    //    $(".modal-wrapper").fadeOut('fast');
    //});
});