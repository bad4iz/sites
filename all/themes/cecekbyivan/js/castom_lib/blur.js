/**
 * Created by bad4iz on 20.09.2016.
 */

/**
 * при наведении на .t3d добавляется #blur1 к .img
 * применяется эффект блюра - размазывание
 */
jQuery(document).ready(function () {
    function addBlur() { // переменная добавления #blur1
        $(this).parent().nextAll().attr('Id', 'blur1');
        $(this).parent().prevAll().attr('Id', 'blur1');

    };
    // удалить блюр у себя

    var timww;
    function timeOutBlur(rtr) { // задаем задержку блюра 500 милисекунд
        timww = setTimeout(function () {
            $(rtr).parent().nextAll().attr('Id', 'blur1');
            $(rtr).parent().prevAll().attr('Id', 'blur1');
            // console.log("сработала функция");
        }, 500); // добавили это в переменную для отмены этого действия

    }

    // функция наведения курсором мышки передается два параметра при
    //          котором обрабатывается наведение и так сказать отведение
    $('.col-md-4.col-sm-6.col-xs-6 .t3d').hover(

        function () { timeOutBlur(this); }, // вызываем блюр
        function () {
            $('.col-md-4.col-sm-6.col-xs-6').removeAttr('id'); // удаляем  #blur1
            clearTimeout(timww); // убираем задержку
        }
    );
});

/**

 "jQuery"
 $("td").hover(
 function () {
        $(this).addClass("hover");
    },
 function () {
        $(this).removeClass("hover");
    }
 );


 */