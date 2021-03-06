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

    //Open menu
    $('.open-menu').on('click', function(){
        $(".mobile-menu").fadeIn('fast');
    });
    $('.close-menu').on('click', function(){
        $(".mobile-menu").fadeOut('fast');
    });

    //Open and close modal
    $('.cd-free-lesson-link').on('click', function(e){
        e.preventDefault();
        $(".cd-free-episode-section").fadeIn('fast');
    });
    $('.cd-close-free-episode').on('click', function(e){
        $(".cd-free-episode-section").fadeOut('fast');
    });

    //Fade out on click outside
    $(document).mouseup(function(e){
        var container = $(".cd-free-episode-modal");
        // if the target of the click isn't the container nor a descendant of the container
            if (!container.is(e.target) && container.has(e.target).length === 0){
                $('.cd-free-episode-section').fadeOut('fast');
            }
    });

    ////Exit Popup code
    //var popUpDone = false;
    //if( popUpDone == false){
    //    //For code to work on all browsers
    //    function addEvent(obj, evt, fn) {
    //        if (obj.addEventListener) {
    //            obj.addEventListener(evt, fn, false);
    //        }
    //        else if (obj.attachEvent) {
    //            obj.attachEvent("on" + evt, fn);
    //        }
    //    }
    //    //Show Popup when mouse leaves window
    //    addEvent(document, "mouseout", function(e) {
    //        e = e ? e : window.event;
    //        var from = e.relatedTarget || e.toElement;
    //        if (!from || from.nodeName == "HTML") {
    //            // Show the exit popup
    //            $('#exitpopup_bg').css({"display": "flex", "opacity": "1"});
    //            $('#exitpopup').fadeIn('slow');
    //            //$('#exitpopup input').focus();
    //        }
    //    });
    //
    //    //Close Popup on click outside
    //    $(document).on('click','.close-popup', function() {
    //        $('#exitpopup_bg').fadeOut();
    //        $('#exitpopup').fadeOut();
    //        setTimeout(function(){
    //            $('#exitpopup_bg').remove();
    //            $('#exitpopup').remove();
    //        }, 500);
    //
    //        popUpDone = true;
    //    });
    //}
});