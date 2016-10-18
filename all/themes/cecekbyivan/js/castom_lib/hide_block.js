/**
 * Created by bad4iz on 04.10.2016.
 */

// исходный код
//jQuery(document).ready(function () {
//        jQuery('.button').click(function() {
//            $('.toggled_block').toggle();
//        });
//        jQuery(document).on('click', function(e) {
//            if (!jQuery(e.target).closest('.parent_block').length) {
//                $('.toggled_block').hide();
//            }
//            e.stopPropagation();
//        });
//
//    });
//
/**
 * прячем блоки и показываем пр клику другие прячем
 *
 * 1. прячем блоки
 * 2  при клике добавляем два класса кликнули и был кликнут удаляется класс не клмкнут
 * 3. другие блоки
 */
// функция перемотки на на элемент который передается в функции
function rewindToBeginning() {
    var scroll_top = $('h1'); // возьмем содержимое атрибута href, должен быть селектором, т.е. например начинаться с # или .
    if ($(scroll_top).length != 0) { // проверим существование элемента чтобы избежать ошибки
        $('html, body').animate({ scrollTop: $(scroll_top).offset().top - 180}, 500); // анимируем скроолинг к элементу scroll_el
    }
    return false; // выключаем стандартное действие
}


$(document).ready(function () {
    var parent = $('.about');

    // parent.children('.content').addClass('shuffle');
    $('.about').children('.content ').slideUp() ;


    $('.about>h2').click(function() {
        var knopka = $(this);

        var parKnopka = knopka.parent(); // родитель (.about) нажатого н2
        var knShuffle = parKnopka.children('.content'); // .shuffle у которого сосед нажатый н2
        var parent = $('.about'); // просто блок .about

        // показываем блок

        // получаем .about которые не нажаты
        var noParKnopka = parent.not(parKnopka);

        // обрабатываем .about которые не нажаты
        noParKnopka.addClass('offClick').removeClass('onClick');

        // прячем не кнопку .shuffle
        noParKnopka.children('.content').slideUp(100);


        // проверка на класс
        if ( parKnopka.hasClass('onClick')){
            $(knShuffle).slideUp(100) ;
            rewindToBeginning();
            parKnopka.addClass('offClick').removeClass('onClick');
        }else{
            $(knShuffle).slideDown(400) ;
            parKnopka.addClass('onClick').addClass('wasClick').removeClass('offClick');
            // прокрутка элемента в начало страницы
            setTimeout(function(){
                var scroll_el = parKnopka; // возьмем содержимое атрибута href, должен быть селектором, т.е. например начинаться с # или .
                if ($(scroll_el).length != 0) { // проверим существование элемента чтобы избежать ошибки
                    $('html body').animate({ scrollTop: $(scroll_el).offset().top - 80}, 500); // анимируем скроолинг к элементу scroll_el
                }
            }, 100);


        }

        // неработает
        // перетасовываем менеджеров
    // надо добавить #shuffle или отловить
        $(function () {
            console.log('перетасовываем менеджеров');
            var parent = $('.view.view-meneger.view-id-meneger .view-content');
            var divs = parent.children();

            while (divs.length) {
                parent.append(divs.splice(Math.floor(Math.random() * divs.length), 1)[0]);
            }
        });

    });


    // если нажитие происходит за пределами .about то ловим ошибкой и сворачиваем все блоки .shuffle

    $(document).on('click', function(e) {
        if (!$(e.target).closest('.about').length) {

            $('.about').children('.content').parent().removeClass('onClick').removeClass('offClick');
            $('.about').children('.content').slideUp(100);

            // перемотка на начало

            rewindToBeginning();

        }
        e.stopPropagation();
    });




});




