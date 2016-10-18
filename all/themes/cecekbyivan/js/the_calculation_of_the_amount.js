/**
 * Created by User on 29.06.2016.
 */
function calculator(form) {
        var  x;
        var  a;
        var  number_bricks_pallet;

        /*делаем выборку по городу присваиваем x = city*/
        switch (form.city.value) {

            case "Астрахань":
                x = '38000';
                break;
            case "Атырау":
                x = '65000';
                break;
            case "Владикавказ":
                x = '70000';
                break;
            case "Волгоград":
                x = '16000';
                break;
            case "Камыши":
                x = '14000';
                break;
            case "Воронеж":
                x = '14000';
                break;
            case "Грозный":
                x = '65000';
                break;
            case "Кульсары":
                x = '65000';
                break;
            case "Махачкала":
                x = '65000';
                break;
            case "Моздок":
                x = '65000';
                break;
            case "Москва":
                x = '20000';
                break;
            case "Нальчик":
                x = '65000';
                break;
            case "Пенза":
                x = '10000';
                break;
            case "Самара":
                x = '20000';
                break;
            case "Саранск":
                x = '16000';
                break;
            case "Сызрань":
                x = '18000';
                break;
            case "Тамбов":
                x = '15000';
                break;
            case "Тольятти":
                x = '18000';
                break;
            case "Уральск":
                x = '40000';
                break;
            case "Элиста":
                x = '40000';
                break;
            case "Саратов":
                x = '6000';
                break;
            case "Аткарс":
                x = '11000';
                break;
            case "Балаково":
                x = '7000';
                break;
            case "Балашо":
                x = '13000';
                break;
            case "Вольск":
                x = '10000';
                break;
            case "Дергачи":
                x = '12000';
                break;
            case "Ершов":
                x = '10000';
                break;
            case "Калининск":
                x = '11000';
                break;
            case "Новоузенск":
                x = '19000';
                break;
            case "Ртищево":
                x = '15000';
                break;
        }


        /*делаем присвоение кирпичу*/

        switch (form.brick.value) {
            case "Красный утолщенный лицевой":
                a = "(x+14.9*6336)/6336";
                number_bricks_pallet = 352 ;
                break;
            case "Красный утолщенный рельефный":
                a = "(x+15*6336)/6336";
                number_bricks_pallet = 352;
                break;
            case "Красный утолщенный рядовой":
                a = '(x+14.9*6336)/6336';
                number_bricks_pallet = 352 ;
                break;
            case "Красный одинарный лицевой":
                a = '(x+11.7*8640)/8640';
                number_bricks_pallet = 480;
                break;
            case "Красный одинарный рельефный":
                a = "(x+11.8*8640)/8640";
                number_bricks_pallet = 480;
                break;
            case "Красный одинарный рядовой":
                a = "(x+11.7*8640)/8640";
                number_bricks_pallet = 480;
                break;
            case "Коричневый одинарный 'шоколад' ":
                a = "(x+15.5*8640)/8640";
                number_bricks_pallet = 480;
                break;
            case "Коричневый полуторный 'шоколад' ":
                a = "(x+24*6336)/6336";
                number_bricks_pallet = 352 ;
                break;
            case "Коричневый одинарный рельефный 'черепашка' ":
                a = "(x+15.5*8640)/8640";
                number_bricks_pallet = 480;
                break;
            case "Коричневый утолщенный 'гавана'":
                a = "(x+20*6336)/6336";
                number_bricks_pallet = 352;
                break;
            case "Коричневый утолщенный рельефный 'черепашка'":
                a = "(x+24*6336)/6336";
                number_bricks_pallet = 352;
                break;
            case "Кирпич полнотелый одинарный красный М200, М250":
                a = "(x+15.5*8640)/8640";
                number_bricks_pallet = 360;
                break;
            case "Кирпич одинарный 'Солома'":
                a = "(x+21.3*8640)/8640";
                number_bricks_pallet = 480;
                break;
            case "Кирпич полуторный 'Солома'":
                a = "(x+28.7*6336)/6336";
                number_bricks_pallet = 352;
                break;
            case "Кирпич полнотелый М 200":
                a = "(x+15.5*8640)/8640";
                number_bricks_pallet = 360;
                break;
            case "Кирпич половинка красный":
                a = "(x+8.9*17280)/17280";
                number_bricks_pallet = 960;
                break;
            case "Коричневый одинарный лицевой 'Гавана'" :
                a = "(x+14.8*8640)/8640";
                number_bricks_pallet = 480;
                break;
            case "Кирпич коричневый одинарный лицевой 'короед'":
                a = "(x+15.6*8640)/8640";
                number_bricks_pallet = 480;
                break;
            case "Кирпич коричневый полуторный лицевой 'короед'":
                a = "(x+24.2*6336)/6336";
                number_bricks_pallet = 352;
                break;
            case "Кирпич половинка красный рельефный 'Черепашка'":
                a = "(x+9*17280)/17280";
                number_bricks_pallet = 960;
                break;
            case "Кирпич половинка коричневый":
                a = "(x+11.9*17280)/17280";
                number_bricks_pallet = 960;
                break;
            case "Кирпич половинка коричневый рельефный 'Черепашка'":
                a = "(x+12*17280)/17280";
                number_bricks_pallet = 960;
                break;
            case "Кирпич одинарный 'Слоновая кость'":
                a = "(x+19.5*8640)/8640";
                number_bricks_pallet = 480;
                break;
            case "Кирпич полуторный 'Слоновая кость'":
                a = "(x+30.2*6336)/6336";
                number_bricks_pallet = 352;
                break;
        }

        /*расчет по формуле*/
        x = eval(x);
        a = eval(a);
    // вычисления цены за один кирпич
    var price = (Math.ceil(a * 10)) / 10
    // город
    var city = form.city.value;
    // количество кирпича
    var count = form.count.value;

    // вычисление кол-ва поддонов
    var count_pallet = count/number_bricks_pallet ;
    count_pallet = parseInt(count_pallet)+1;


    // вычисление стоимости
    var cost = price * count_pallet * number_bricks_pallet;
    cost =  parseInt(cost);


    /*form.total1.value = (Math.ceil(a * 10)) / 10;*/
    
      // вывод расчетов
    var text_top = "Ваш заказ на предварительный расчет: <br/>"

    var text = "<br/>Количество кирпичей: " + count_pallet * number_bricks_pallet + " шт. " +
        " <br/>Количество поддонов : " + count_pallet + " шт." +
        " <br/>Сумма заказа с доставкой в " + city + " составит:  " + cost + " руб." +
        "<br/> Стоимость кирпича с доставкой: " + price + " руб./шт. ";

    var text2 = "Обращаем ваше внимание, онлайн&#8212;система производит расчет кратно поддонам, с использованием ориентировочной стоимости на автотранспорт." +
        "<br/>Хотите уточнить стоимость кирпича с доставкой в " + city +
        "<br/> Заполните форму обратной связи";

// выводим информацию внизу
    $("div.price_top ").add().html(text_top);
    $("div.price_body ").add().html(text).css('font-size', '1.1em').css('text-align', 'left').css('background', 'rgba(255, 255, 255, 0.5)');
    $("div.price_booton ").add().html(text2).css('font-size', '0.8em');

    //  заполняем соответствующие формы для отправки пост запросом
    form.count_pallet.value = count_pallet;
    form.cost.value = cost;
    form.count_pallet.value = count_pallet;
    form.total1.value = count_pallet * number_bricks_pallet;
    form.price.value = price;
    
}
