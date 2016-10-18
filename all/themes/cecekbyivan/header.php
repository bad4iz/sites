<?
$city = $_SESSION['smart_ip']['location']['city'];
$phone = $_SESSION['smart_ip']['location']['phone'];

//вставка кол-ва в корзине
$product_ids = array();
$count_product = 0;
if (($order_id = commerce_cart_order_id($GLOBALS['user']->uid)) != FALSE) {
    $order = entity_metadata_wrapper('commerce_order', $order_id);
    $line_item_types = commerce_product_line_item_types();
    foreach ($order->commerce_line_items as $line_item) {
        if (in_array($line_item->type->value(), $line_item_types)) {
            $count_product++;
            $product_ids[] = $line_item->commerce_product->product_id->value();
        }
    }
}
//вставка кол-ва в корзине
?>
<link href="/sites/all/themes/cecekbyivan/css/loading.css" rel="stylesheet"  type="text/css"/>



<!-- анимация скрытия шапки -->
<script src="/sites/all/themes/cecekbyivan/js/castom_lib/animation_hide_caps.js"></script>
<script src="/sites/all/themes/cecekbyivan/js/scroll.js"></script>


<!--  / анимация скрытия шапки -->
<!-- подгружаем информацию о городе -->

<!-- подгружаем информацию о городе -->
<div class="container toplam">
    <!--Top menu -->

    <!-- верх шапки -->
    <div id="phone_basket" class="container">

        <div id="mega-slider2 " class="col-md-3 " style="float: none; display: inline-block; ">
            <?php if (!empty($page['top'])): ?>
                <?php print render($page['top']); ?>
            <?php endif; ?>
        </div>


        <!--        <div class="col-md-3 phone top">-->
        <div class="col-md-3 phone my_notColapse">

            <img src="/sites/default/files/call20.jpg"/> <a
                href="tel:<? echo $phone ? $phone : "8(499) 322-75-97"; ?>"><? echo $phone ? $phone : "8(499) 322-75-97"; ?></a>

        </div>


    </div>

    <!--/ верх шапки -->


    <div class="container">
        <nav class="navbar navbar-default " role="navigation">

            <a href="/">
                <div class="logo"></div>
            </a>
            <!--            кjрзина-->
            <div class="my_colapse colapse_basket ">
                <a href="/cart">
                    <div class="basket">
                        <div class="basket_img">
                            <img src="/sites/default/files/cart.jpg"/>
                        </div>
                        <div class="basket_text">
                            <? print $count_product ?>
                        </div>
                    </div>
                </a>
            </div>
            <!--         /   кjрзина-->
            <!--            телефон-->
            <div class="my_colapse colapse_phone">
                <img src="/sites/default/files/call20.jpg"/> <a href="tel:<? echo $phone ? $phone : "8(499) 322-75-97"; ?>"><? echo $phone ? $phone : "8(499) 322-75-97"; ?></a>
            </div>
            <!--         /   телефон-->

            <!--                    кнопка меню для мобильных -->
            <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">

                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"> </span>
                <span class="icon-bar"> </span>
                <span class="icon-bar"> </span>
            </button>
            <!--              ///      кнопка меню для мобильных -->


            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                <div class="navbar-header">


                </div>
                <ul class="nav navbar-nav">

                    <!--                    <li>-->
                    <!--                        <a href="/">Главная</a>-->
                    <!--                    </li>-->
                    <li>

                        <a href="<? echo $_SERVER['REDIRECT_URL'] ? '/node#k' : '#' ?>" class="click-menu-element">Продукция</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Купить
                            кирпич
                            <span class="caret">  </span></a>
                        <ul class="dropdown-menu multi-level" role="menu">
                            <li>
                                <a href="/catalog" class="megalink">Купить онлайн</a>
                            </li>
                            <li>
                                <a href="/page/specialnoe-predlozhenie.html">Юридическим лицам</a>
                            </li>
                            <li>
                                <a href="/price"
                                   title="Прайс-лист" target="_blank">Прайс-лист</a>
                            </li>
                            <li>
                                <a href="/sites/default/files/Price.pdf"
                                   title="Скачать прайс-лист на кирпич" target="_blank">Прайс-лист PDF</a>
                            </li>

                            <li>
                                <a href="/page/dileram-i-partneram.html">Дилерам и партнерам</a>
                            </li>
                            <li class="divider">
                            </li>
                            <li class="dropdown-submenu">
                                <a class="dropdown-toggle" data-target="#" href="">Где купить?
                                    <b class="caret"></b></a>
                                <ul class="dropdown-menu parent">
                                    <li>
                                        <a tabindex="-1" href="/page/oficialnye-predstavitelstva.html#mos">Купить кирпич
                                            в Москве </a>
                                    </li>
                                    <li>
                                        <a tabindex="-1" href="/page/oficialnye-predstavitelstva.html#pen">Купить кирпич
                                            в Пензе </a>
                                    </li>
                                    <li>
                                        <a tabindex="-1" href="/page/oficialnye-predstavitelstva.html#tam">Купить кирпич
                                            в Тамбове </a>
                                    </li>
                                    <li>
                                        <a tabindex="-1" href="/page/oficialnye-predstavitelstva.html#ul">Купить кирпич
                                            в Ульяновске </a>
                                    </li>
                                    <li>
                                        <a tabindex="-1" href="/page/oficialnye-predstavitelstva.html#vol">Купить кирпич
                                            в Волгограде </a>
                                    </li>
                                    <li>
                                        <a tabindex="-1" href="/page/oficialnye-predstavitelstva.html#vor">Купить кирпич
                                            в Воронеже </a>
                                    </li>
                                    <li>
                                        <a tabindex="-1" href="/page/oficialnye-predstavitelstva.html#lip">Купить кирпич
                                            в Липецке </a>
                                    </li>
                                    <li>
                                        <a tabindex="-1" href="/page/oficialnye-predstavitelstva.html#kaz">Купить кирпич
                                            в Казахстане </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="<? echo $_SERVER['REDIRECT_URL'] ? ' /node#d' : '#' ?>" class="click-menu-element2">Доставка</a>
                    </li>
                    <li class="dropdown">
                        <a href="/page/o-zavode.html" class="dropdown-toggle" data-toggle="dropdown" role="button"
                           aria-expanded="false">О заводе
                            <span class="caret">   </span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="/page/proizvodstvo-kirpicha.html">Производство кирпича</a>
                            </li>
                            <li>
                                <a href="/page/o-zavode.html">О заводе</a>
                            </li>
                            <li class="divider">
                            </li>
                            <li class="dropdown-header">Это интересно:
                            </li>
                            <li>
                                <a href="/page/vazhno-znat.html">Важная информация</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="/page/about.html">Контакты</a>
                    </li>
                    <li>

                        <a href="/cart">
                            <div class="basket">
                                <div class="basket_img">
                                    <img src="/sites/default/files/cart.jpg"/>
                                </div>
                                <div class="basket_text">
                                    <? print $count_product ?>
                                </div>
                            </div>
                        </a>

                    </li>
                </ul>
                <a href="/page/onlayn-kamera.html">
                    <img src="/sites/default/files/camera.jpg"/></a>
            </div>
            <!-- <a href="  page/onlayn-kamera.html" style="floar: right;"><img src="  sites/default/files/camera.jpg" /></a>-->
        </nav>
    </div>
</div>

