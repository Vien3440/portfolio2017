$(document).ready(function () {

// whidth block header
    $(".headerAbout").css("height", window.innerHeight);

//     horizontal center titel
    $(".titelCenter").css({
        position: 'absolute',
        top: ($(window).height() / 2 - $(".titelCenter").innerHeight())
    });
//     vertical center titel
    $(".titelCenter").css("left", ($(".headerAbout").width() / 2) - ($(".titelCenter").width() / 2) + "px");
    $(".bodyAbout").css({
    });

//    block titel bottom 
    $(window).scroll(function () {

        if ($(window).scrollTop() > window.innerHeight) {


            $(".headerAbout").addClass('fixed');
            $(".bodyAbout").addClass('scrollit');

//    unblock titel top         
        }else if ($(window).scrollTop() < window.innerHeight - 1) {
             $(".headerAbout").removeClass('fixed');
             $(".bodyAbout").removeClass('scrollit');

        }

    });

});