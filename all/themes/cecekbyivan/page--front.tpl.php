<?php
include 'header.php';
?>

<!-- Warming Up -->
<link href='http://fonts.googleapis.com/css?family=Philosopher:400,700,700italic&subset=latin,cyrillic' rel='stylesheet'
      type='text/css'>
<!--Video Section-->
<div id="para2">
    <div class="main_content">
        <div class="container_Video">

            <div>
                <?php if (!empty($page['postcript_bottom'])): ?>
                    <?php print render($page['postcript_bottom']); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<!--/ Video Section-->


<div id="elementId">
</div>
<div class="container">
    <div class="col-md-12">
        <?php if (!empty($page['who'])): ?>
            <?php print render($page['who']); ?>
        <?php endif; ?>
        <div style="display: none">
            <?php if (isset($page['content'])) {
                print render($page['content']);
            } ?>
        </div>
    </div>
</div>    <br/><br/>
<!--
<div class="stone" style="background-color: #FBF1E9; padding: 10px 10px 10px 10px; margin-bottom: 2px">
<div class="container">
	<div class="col-lg-6">
	<img src="/sites/default/files/new_old.png" width="350" />
	</div>
	<div class="col-lg-6">
			<h2>Всё новое хорошо забытое старое</h2>
<h3>В июле завод возобновил выпуск камня керамического двойного</h3>
 <br><br>
<a id="u_button" href="/store/kamen-blok-keramicheskiy-krasnyy.html"></a>
<p></p>

	</div>
	</div>
	</div>
-->
<!--
<div class="main_content">
<div class="container">
		<div id="sales" class="col-md-12">
<form method="post" action="mail.php">
<p align="center"><font size="6"><strong>в связи с расширением производства</strong></font><br><br>
<font size="4">С 1 июня началась распродажа красного лицевого кирпича по самой низкой цене в регионе</font><br><br>
<font size="3"><strong>Вы можете купить кирпич по сниженной цене</strong></font><br><br>
<font size="6"><strong>10 рублей за кирпич</strong></font><br><br>
<strong>узнать подробности</strong> <input type="text" background-color="yellow" name="name" size="20" placeholder="Имя"> <input name="email" type="text" size="20" placeholder="E-mail"> <input type=submit value="Отправить">
</form>
</div></div></div>  -->


<!--
<div id="workers2">

    <div class="container">

    </div>
</div>
 -->


<!-- info3   визуализатор -->
<div id="container_d">
    <div class="container_d">
        <div class="col-md-12">
            <?php if (!empty($page['info3'])): ?>
                <?php print render($page['info3']); ?>
            <?php endif; ?>
        </div>
    </div>
</div>
<!-- / info3   визуализатор -->


<div class="fon">
    <div class="container">
        <div class="col-md-4">
            <?php if (!empty($page['circ1'])): ?>
                <?php print render($page['circ1']); ?>
            <?php endif; ?>
        </div>
        <div class="col-md-4">
            <?php if (!empty($page['circ2'])): ?>
                <?php print render($page['circ2']); ?>
            <?php endif; ?>
        </div>
        <div class="col-md-4">
            <?php if (!empty($page['circ3'])): ?>
                <?php print render($page['circ3']); ?>
            <?php endif; ?>
        </div>
    </div>
</div>
<div id="elementId2">
</div>
<a name="dostavka"></a>
<div id="workers" class="workers">

    <div class="container">
        <h2>Доставка кирпича в любой регион!</h2>
        <div class="calculation_shipping"><h3>Узнай стоимость онлайн</h3>
            <!-- кнопочка расчета доставки -->
            <link rel="stylesheet" href="../../../../css/amimate_button.css">
            <div class="button_calculation_shipping ">
                <button class="button_calculation_shipping" data-toggle="modal" data-target="#myModal">
                    <div class="demo">Рассчитать</div>
                    <img class="set" src="img/settings.png" alt="картинка">
                    <div class="disc">Онлайн рассчет</div>
                </button>
            </div>
            <!-- / кнопочка расчета доставки -->
        </div>
        <div class="main_content">

            <!-- Modal -->
            <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog ">
                    <!--   Modal content -->
                    <div class="modal-content m_window">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;
                            </button>
                        </div>
                        <div class="modal-body">
                            <br>
                            <h3>Цена кирпича с доставкой</h3>
                            <!--                            добавление библиотеки расчета-->
                            <script type="text/javascript"
                                    src="../sites/all/themes/cecekbyivan/js/the_calculation_of_the_amount.js"></script>

                            <form method="post" action="mail2.php">
                                <div class="opacity">
                                    <p align="left">
                                        Выберите город:

                                        <br>
                                        <!--  выбор города -->
                                        <select name="city">
                                            <option value="Астрахань">Астрахань
                                            </option>
                                            <option value="Атырау">Атырау
                                            </option>
                                            <option value="Владикавказ">Владикавказ
                                            </option>
                                            <option value="Волгоград">Волгоград
                                            </option>
                                            <option value="Камышин">&nbsp;&nbsp;&nbsp;Камышин
                                            </option>
                                            <option value="Воронеж">Воронеж
                                            </option>
                                            <option value="Грозный">Грозный
                                            </option>
                                            <option value="Кульсары">Кульсары
                                            </option>
                                            <option value="Махачкала">Махачкала
                                            </option>
                                            <option value="Моздок">Моздок
                                            </option>
                                            <option value="Москва">Москва
                                            </option>
                                            <option value="Нальчик">Нальчик
                                            </option>
                                            <option value="Пенза">Пенза
                                            </option>
                                            <option value="Самара">Самара
                                            </option>
                                            <option value="Саранск">Саранск
                                            </option>
                                            <option value="Сызрань">Сызрань
                                            </option>
                                            <option value="Тамбов">Тамбов
                                            </option>
                                            <option value="Тольятти">Тольятти
                                            </option>
                                            <option value="Уральск">Уральск
                                            </option>
                                            <option value="Элиста">Элиста
                                            </option>
                                            <option value="0">-------------
                                            </option>
                                            <option value="Саратов">Саратов
                                            </option>
                                            <option value="Аткарск">&nbsp;&nbsp;&nbsp;Аткарск
                                            </option>
                                            <option value="Балаково">&nbsp;&nbsp;&nbsp;Балаково
                                            </option>
                                            <option value="Балашов">&nbsp;&nbsp;&nbsp;Балашов
                                            </option>
                                            <option value="Вольск">&nbsp;&nbsp;&nbsp;Вольск
                                            </option>
                                            <option value="Дергачи">&nbsp;&nbsp;&nbsp;Дергачи
                                            </option>
                                            <option value="Ершов">&nbsp;&nbsp;&nbsp;Ершов
                                            </option>
                                            <option value="Калининск">&nbsp;&nbsp;&nbsp;Калининск
                                            </option>
                                            <option value="Новоузенск">&nbsp;&nbsp;&nbsp;Новоузенск
                                            </option>
                                            <option value="Ртищево">&nbsp;&nbsp;&nbsp;Ртищево
                                            </option>
                                        </select>
                                        <br/>
                                        Выберите кирпич:

                                        <br/>
                                        <!-- выбор кирпича -->
                                        <select name="brick">
                                            <option disabled>Выберите кирпич
                                            </option>
                                            <option value="Красный утолщенный лицевой">Красный утолщенный лицевой
                                            </option>
                                            <option value="Красный утолщенный рельефный">Красный утолщенный рельефный
                                            </option>
                                            <option value="Красный утолщенный рядовой">Красный утолщенный рядовой
                                            </option>
                                            <option value="Красный одинарный лицевой">Красный одинарный лицевой
                                            </option>
                                            <option value="Красный одинарный рельефный">Красный одинарный рельефный
                                            </option>
                                            <option value="Красный одинарный рядовой">Красный одинарный рядовой
                                            </option>
                                            <option value="Коричневый одинарный 'шоколад' ">Коричневый одинарный
                                                "шоколад"
                                            </option>
                                            <option value="оричневый полуторный 'шоколад' ">Коричневый полуторный
                                                "шоколад"
                                            </option>
                                            <option value="Коричневый одинарный рельефный 'черепашка' ">Коричневый
                                                одинарный рельефный "черепашка"
                                            </option>
                                            <option value="Коричневый утолщенный 'гавана'">Коричневый утолщенный
                                                "гавана"
                                            </option>
                                            <option value="Коричневый утолщенный рельефный 'черепашка'">Коричневый
                                                утолщенный рельефный "черепашка"
                                            </option>
                                            <option value="Кирпич полнотелый одинарный красный М200, М250">Кирпич
                                                полнотелый одинарный красный М200, М250
                                            </option>
                                            <option value="Кирпич одинарный 'Солома'">Кирпич одинарный "Солома"
                                            </option>
                                            <option value="Кирпич полуторный 'Солома'">Кирпич полуторный "Солома"
                                            </option>
                                            <option value="Кирпич полнотелый М 200">Кирпич полнотелый М 200
                                            </option>
                                            <option value="Кирпич половинка красный">Кирпич половинка красный
                                            </option>
                                            <option value="Коричневый одинарный лицевой 'Гавана'">Коричневый одинарный
                                                лицевой "Гавана"
                                            </option>
                                            <option value="Кирпич коричневый одинарный лицевой 'короед'">Кирпич
                                                коричневый одинарный лицевой "короед"
                                            </option>
                                            <option value="Кирпич коричневый полуторный лицевой 'короед'">Кирпич
                                                коричневый полуторный лицевой "короед"
                                            </option>
                                            <option value="Кирпич половинка красный рельефный 'Черепашка'">Кирпич
                                                половинка красный рельефный "Черепашка"
                                            </option>
                                            <option value="Кирпич половинка коричневый">Кирпич половинка коричневый
                                            </option>
                                            <option value="Кирпич половинка коричневый рельефный 'Черепашка'">Кирпич
                                                половинка коричневый рельефный "Черепашка"
                                            </option>
                                            <option value="Кирпич одинарный 'Слоновая кость'">Кирпич одинарный "Слоновая
                                                кость"
                                            </option>
                                            <option value="Кирпич полуторный 'Слоновая кость'">Кирпич полуторный
                                                "Слоновая кость"
                                            </option>
                                        </select>

                                        <!--  todo добавить в форму выбора кол-во кирпичей
                                        1.5 = 352
                                         1.0 = 480
                                         2.0 = 224
                                         1.0 по 0% м100 = 360

                                        указание кол-ва кирпича -->
                                        <style>
                                            .modal-body {

                                                height: 600px;
                                            }

                                            .opacity {
                                                font-size: 1.2em;
                                                margin: 13px 0px 8px;
                                            }

                                            .count_number_brick {

                                                float: left;
                                                width: 60%;
                                                text-align: left;

                                            }

                                            .input_count_number_brick {
                                                width: 15%;
                                                float: right;
                                            }

                                            .price {
                                                float: left;
                                                width: 600px;
                                            }

                                            .price_body {
                                                width: 600px;
                                                font-size: 1.5em;
                                                text-align: center;
                                                align-content: center;

                                                padding: 10px 10px 10px;
                                            }

                                            .price_top {
                                                width: 600px;
                                                font-size: 1.2em;
                                                text-align: center;
                                                /*align-content: center;*/
                                            }

                                            .price_booton {
                                                width: 600px;
                                                text-align: right;
                                                font-size: 0.8em;
                                            }

                                            .snoska {
                                                text-align: right;
                                                font-size: 0.7em;

                                            }

                                            table {
                                                width: 100%;
                                            }

                                            .form {
                                                float: right;
                                                width: 200px;
                                            }
                                        </style>
                                    <div class="count_number_brick">
                                        Введите предположительное кол-во кирпича:
                                    </div>
                                    <div class="input_count_number_brick">
                                        <input type="number" name="count" min="1"
                                               placeholder="Введите предположительное кол-во" value="1"/>
                                    </div>


                                    <input onclick="calculator(this.form)" type="button" value="Рассчитать"/>


                                    <br>
                                    <!--    отправка суммы, кол-ва, цены -->
                                    <input name="total1" type="text" hidden/>
                                    <input name="count_pallet" type="text" hidden/>
                                    <input name="cost" type="text" hidden/>
                                    <input name="price" type="text" hidden/>


                                    <div class="snoska">
                                        * цена указана с учетом НДС
                                    </div>

                                </div>
                                <div class="dostavka ">
                                    <div class="price">
                                        <div class="price_top">
                                            <!-- загловок -->
                                        </div>

                                        <div class="price_body">
                                            <a href="  /"><img
                                                    src="/sites/all/themes/cecekbyivan/images/logo.jpg"
                                                    alt="Бородаевский кирпич" width="180" height="49"
                                                    border="0"/></a><br/>

                                            Уточняйте стоимоть доставки
                                            <br>
                                            на день покупки,
                                            <br>цена зависит от срочности и сезона
                                        </div>
                                        <div class="price_booton">
                                            <!-- сноска -->
                                        </div>
                                    </div>
                                    <!-- форма -->
                                    <div class="form">
                                        <div>
                                            <input type="text" background-color="yellow" name="name" size="20"
                                                   placeholder="Ваше имя" required/>
                                        </div>
                                        <div>
                                            <input name="email" type="email" size="20" placeholder="Ваш E-mail"
                                                   required/>
                                        </div>
                                        <div>
                                            <input name="tel" type="tel" pattern="(\+?\d[- .]*){7,13}"
                                                   placeholder="Ваш телефон"
                                                   title="Международный, государственный или местный телефонный номер"
                                                   required>
                                        </div>
                                        <div>
                                            <input type=submit value="Уточнить">
                                        </div>
                                        <div class="snoska">
                                            Ваши персональные данные в безопасности!

                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <p><i>Гибкая ценовая политика, четкое соблюдение сроков поставки,
                    наличие запаса кирпича на складе и собственная логистическая
                    группа делают ООО «ВКЗ» надежным партнером на современном
                    рынке экологичных строительных материалов.</i>
            </p>
        </div>
    </div>
</div>


<div class="bottom">
    <div class="container">
        <center><h2>Преимущества керамического кирпича</h2>
        </center>
        <div class="col-xs-3">
            <?php if (!empty($page['footer1'])): ?>
                <?php print render($page['footer1']); ?>
            <?php endif; ?>
        </div>
        <div class="col-xs-3">
            <?php if (!empty($page['footer2'])): ?>
                <?php print render($page['footer2']); ?>
            <?php endif; ?>
        </div>
        <div class="col-xs-3">
            <?php if (!empty($page['footer3'])): ?>
                <?php print render($page['footer3']); ?>
            <?php endif; ?>
        </div>
        <div class="col-xs-3">
            <?php if (!empty($page['footer4'])): ?>
                <?php print render($page['footer4']); ?>
            <?php endif; ?>
        </div>
    </div>
</div>

<div class="clear">
</div>
 <div id="mega-slider2">
    <?php if (!empty($page['content_top'])):  ?>
        <?php  print render($page['content_top']);  ?>
    <?php  endif;  ?>
</div>
<div id="newsblock">
    <div class="container"><br/>
        <div class="col-md-12">
            <?php if (!empty($page['geo'])): ?>
                <?php print render($page['geo']); ?>
            <?php endif; ?>
        </div>
    </div>
</div>
<div class="container">
    <div class="col-md-2">
    </div>
    <div class="col-md-8">
        <?php if (!empty($page['info2'])): ?>
            <?php print render($page['info2']); ?>
        <?php endif; ?>
    </div>
    <div class="col-md-2">
    </div>
</div>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                &copy; OOO "Волжский Кирпичный Завод"

            </div>
            <div class="col-md-8">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="/" class="nodec">Главная</a>
                    </li>
                    <li>
                        <a href="/page/proizvodstvo-kirpicha.html" class="nodec">Производство</a>
                    </li>
                    <li>
                        <a href="/page/o-zavode.html" class="nodec">О заводе</a>
                    </li>
                    <li>
                        <a href="/catalog-kalculator.html" class="nodec">Купить кирпич</a>
                    </li>
                    <li>
                        <a href="/" class="nodec">Галерея</a>
                    </li>
                    <li>
                        <a href="/page/kontakty.html" class="nodec">Контакты</a>
                    </li>
                    <li>
                        <a href="/page/kalkulyator-kirpicha.html" class="nodec">Калькулятор</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row second">
            <div class="collapse" id="collapseExample">
                <img src="/sites/default/files/map2.png" width="100%"/>
            </div>
        </div>
        <div class="row second">
            <div class="col-md-3">
                <p>
                    <a class="colorbox-node nodec" href="/page/dileram-i-partneram.html">Дилерам и оптовикам</a>
                </p>
            </div>
            <div class="col-md-4">
                <p>413080, Саратовская область, Марксовский район, с. Бородаевка.
                    <a data-toggle="collapse" href="#collapseExample" aria-expanded="false"
                       aria-controls="collapseExample">Схема проезда</a>
                </p>
            </div>
            <div class="col-md-3 phone">8 8453 <strong>761-761</strong>
            </div>
            <div class="col-md-2 lastmenu">
                <a href="https://vk.com/oblicovochnyj_kirpich_cena" title="Группа ВКЗ ВКонтакте">
                    <img src="/sites/default/files/vk.png" width="25"></a>
                <br>
                <a href="/zadat-vopros" target="_blank" class="colorbox-node nodec">Обратная связь</a><br/>
                <a href="/page/karta-sayta.html" target="_blank" class="nodec">Карта сайта</a>
            </div>
        </div>
    </div>
    <!-- Yandex.Metrika counter -->
    <div style="display:none;">
        <script type="text/javascript">(function (w, c) {
                (w[c] = w[c] || []).push(function () {
                    try {
                        w.yaCounter12862783 = new Ya.Metrika({id: 12862783, enableAll: true, webvisor: true});
                    } catch (e) {
                    }
                });
            })(window, "yandex_metrika_callbacks");</script>
    </div>
    <script src="//mc.yandex.ru/metrika/watch.js" type="text/javascript" defer="defer"></script>
    <noscript>
        <div>
            <img src="//mc.yandex.ru/watch/12862783" style="position:absolute; left:-9999px;" alt=""/>
        </div>
    </noscript>
    <!-- /Yandex.Metrika counter -->
    <!--LiveInternet counter-->
    <script type="text/javascript"><!--
        document.write("<a href='http://www.liveinternet.ru/click' " +
            "target=_blank><img src='//counter.yadro.ru/hit?t57.6;r" +
            escape(document.referrer) + ((typeof(screen) == "undefined") ? "" :
            ";s" + screen.width + "*" + screen.height + "*" + (screen.colorDepth ?
                screen.colorDepth : screen.pixelDepth)) + ";u" + escape(document.URL) +
            ";" + Math.random() +
            "' alt='' title='LiveInternet' " +
            "border='0' width='88' height='31'><\/a>")
        //--></script>
    <!--/LiveInternet-->
    <script>
        $(function () {
            $(".player").mb_YTPlayer();
        });

        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
        ga('create', 'UA-9272306-2', 'auto');
        ga('send', 'pageview');
    </script>
    <!-- Rating@Mail.ru counter -->
    <script type="text/javascript">
        var _tmr = _tmr || [];
        _tmr.push({id: "2690793", type: "pageView", start: (new Date()).getTime()});
        (function (d, w, id) {
            if (d.getElementById(id)) return;
            var ts = d.createElement("script");
            ts.type = "text/javascript";
            ts.async = true;
            ts.id = id;
            ts.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//top-fwz1.mail.ru/js/code.js";
            var f = function () {
                var s = d.getElementsByTagName("script")[0];
                s.parentNode.insertBefore(ts, s);
            };
            if (w.opera == "[object Opera]") {
                d.addEventListener("DOMContentLoaded", f, false);
            } else {
                f();
            }
        })(document, window, "topmailru-code");
    </script>
    <noscript>
        <div style="position:absolute;left:-10000px;">
            <img src="//top-fwz1.mail.ru/counter?id=2690793;js=na" style="border:0;" height="1" width="1"
                 alt="Рейтинг@Mail.ru"/>
        </div>
    </noscript>
    <!-- //Rating@Mail.ru counter -->
</footer>

