/**
 * Created by User on 03.08.2016.
 */
// <!-- анимация скрытия шапки -->

/*
$(window).scroll(function () {
    if ($(this).scrollTop() > 1) {
//      $('#anime_header').removeClass('container ').addClass("sticky");
        $('.navbar').css('margin', '0px').css('transition', '1s');
        $('#phone_basket').css('display', 'none').css('transition', '1s');

    } else {
//      $('#anime_header').addClass("container").removeClass("sticky");
        $('.navbar').css('margin', '10px').css('transition', '1s');
        $('#phone_basket').css('display', 'block').css('transition', '1s');
    }

});
*/

// <!--  / анимация скрытия шапки -->


var tempScrollTop, currentScrollTop = 0;

$(window).scroll(function () {

    currentScrollTop = $(this).scrollTop();

    if (tempScrollTop < currentScrollTop ){
        //scrolling down
        $('#anime_header').removeClass('container ').addClass("sticky");
        $('.navbar').css('margin', '0px').css('transition', '1s');
        $('#phone_basket').css('display', 'none').css('transition', '1s');

    }else if (tempScrollTop > currentScrollTop ){
        //scrolling up
        $('.navbar').css('margin', '10px').css('transition', '1s');
        $('#phone_basket').css('display', 'block').css('transition', '1s');
    }

    tempScrollTop = currentScrollTop;
});