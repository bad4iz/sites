$(document).ready(function() {
    $('.click-menu-element').click(function(){
        $(this).addClass('active');
       $('html, body').stop().animate({scrollTop:$('#elementId').position().top - 90}, 1000);
    });
});

$(document).ready(function() {
    $('.click-menu-element2').click(function(){
        $(this).addClass('active');
       $('html, body').stop().animate({scrollTop:$('#elementId2').position().top - 160}, 1000);
    });
});

