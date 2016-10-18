<?php

/**
 * @file
 * Simple block template for outputting info from ipgeobase.ru service.
 *
 * Variables:
 * - not_found - True if geolocation was not found
 * - city - City name
 * - ip - IP address
 * - latitude - Latitude
 * - longitude - Longitude
 * - region - Region name
 * - district - District name
 * - desc - Description of the IP provider
 */
/**
 * города обслуживания
 *

Cаратов         8(8452) 24-82-00
Энгельс         8(8453) 761-761
Балаково
Волжский
Вольск
Липецк          8(4742) 20-03-94
Махачкала
Пенза           8(8412) 22-31-98
Пугачев
Сызрань
Тамбов          8(4752) 42-71-45
Тольятти
Ульяновск       8(8422) 79-21-69
Москва          8(499) 322-75-97
Волгоград       8(8442) 45-94-79
Воронеж         8(473) 200-02-81
Казахстан       8(727) 350-53-47
Ахтубинск
Актобе
Алма-Ата

 */


/**
 * проверяет есть ли город в словаре таксономии
 * возвращает в случае положительного результата true и записывается в сесию номер телефона и сам город
 * данные берутся из словаря таксономии
 *
 * $_SESSION['smart_ip']['location']['city'] = $city;
 * $_SESSION['smart_ip']['location']['telephone'] = $telephone;
 *
 * @param $city
 * @return bool
 */
function isCity($city)
{
    //  получаем  массив  таксономии
    $parent = taxonomy_get_children('tid_45', 6);
    foreach ($parent as $tax) {
        $tax_name = $tax->name;
//        проверка города в таксономии
        if ($tax_name == $city) {

//            если совпадает берем из таксономии телефон
            $phone = $tax->field_phone_city;
            $phone = $phone['und']['0']['value'];
            //тут сохраняем в сессию
            $_SESSION['smart_ip']['location']['city'] = $city;
            $_SESSION['smart_ip']['location']['phone'] = $phone;
            return true;
        }
    }

}


///***************************проверка подбора города**************************************


if (!isset($_SESSION['smart_ip']['location']['city'])) { // если сесия $_SESSION['smart_ip']['location']['city'] не заведена

    if (isCity($city)) { // если есть в таксономии
        $isCity = true;
//    сохраняем в сессию
//        global $user;
//        $location = $_SESSION['smart_ip']['location'];
//        smart_ip_set_location_data($user, $location);
    } else {//  нет города в таксономии города
        $city = 'нет города в таксономии города';
        $isCity = false;
    }
} else {// иначе если есть сессия то записываем ее в $city
    $city = $_SESSION['smart_ip']['location']['city'];
    if (isCity($city)) { // если есть в таксономии
        $isCity = true;
        $city = $_SESSION['smart_ip']['location']['city'];
    } else { // нет города
        $city = 'нет города';
        $isCity = false;
    }
}
//********************************проверка подбора города**************************************


if ($isCity) {
    print 'Ваш город: ' . '<a href="' . base_path() . 'modal_forms/nojs/webform/127"  class="ctools-use-modal ctools-modal-modal-popup-small choose_city" >' . $city . '</a>';
} else {
    print                   '<a href="' . base_path() . 'modal_forms/nojs/webform/127"  class="ctools-use-modal ctools-modal-modal-popup-small choose_city isNotCity" >Выберите город</a>';
}



