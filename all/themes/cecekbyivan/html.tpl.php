<?php

/**
 * @file
 * Override of Bootstrap html.tpl.php.
 */
?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="">


  <!--
Чтобы такая анимация работала, нам нужно прикрепить фреймворк CSS анимации, и простой JQuery скрипт.
Animate.css — замечательная библиотека разнообразных CSS анимаций. Это даёт нам просто выбрать нужную анимацию просто добавив нужный класс.
JQuery Viewport Checker — отличный небольшой скрипт, который проверяет используется ли элемент в окне просмотра браузера, и если он используется тогда скрипт добавляет ему нужный класс.
Теперь нам нужно библиотеку CSS и скрипт прикрепить к сайту
-->
  <link rel="stylesheet" type="text/css"
        href="/sites/all/themes/cecekbyivan/css/animate.css"/>
  <link rel="stylesheet" type="text/css"
        href="/sites/all/themes/cecekbyivan/css/my_animate.css"/>

  <link href="  /sites/all/themes/cecekbyivan/css/bootstrap.min.css"
        rel="stylesheet">
  <link href="  /sites/all/themes/cecekbyivan/css/style.css" rel="stylesheet">

  <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
  <script src="  /sites/all/themes/cecekbyivan/js/html5shiv.js"></script>
  <![endif]-->

  <!-- Fav and touch icons -->
<!--  <link rel="apple-touch-icon-precomposed" sizes="144x144"-->
<!--        href="  /sites/all/themes/cecekbyivan/img/apple-touch-icon-144-precomposed.png">-->
<!--  <link rel="apple-touch-icon-precomposed" sizes="114x114"-->
<!--        href="  /sites/all/themes/cecekbyivan/apple-touch-icon-114-precomposed.png">-->
<!--  <link rel="apple-touch-icon-precomposed" sizes="72x72"-->
<!--        href="  /sites/all/themes/cecekbyivan/img/apple-touch-icon-72-precomposed.png">-->
<!--  <link rel="apple-touch-icon-precomposed"-->
<!--        href="  /sites/all/themes/cecekbyivan/img/apple-touch-icon-57-precomposed.png">-->
<!--  <link rel="shortcut icon"-->
<!--        href="  /sites/all/themes/cecekbyivan/img/favicon.png">-->
<!--  -->


  <!-- jQuery library (served from Google) -->
  <script
    src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script
    src="/sites/all/themes/cecekbyivan/js/jquery.tagcanvas.min.js"/></script>
  <script src = "  /sites/all/themes/cecekbyivan/js/scroll.js" ></script>


  <?php print $head; ?>
  <?php print $styles; ?>
  <?php print $scripts; ?>

</head>
<body>
<?php print $page_top; ?>
<?php print $page; ?>
<?php print $page_bottom; ?>



<?php
/**
 * Implements hook_commerce_price_formatted_components_alter().
 */
function MYMODULE_commerce_price_formatted_components_alter(&$components, $price, $entity) {
  foreach ($components as &$component) {
    $component['title'] = t($component['title']);
  }
}

?>

<!-- StreamWood code -->
<link href="https://clients.streamwood.ru/StreamWood/sw.css" rel="stylesheet"
      type="text/css"/>
<script type="text/javascript"
        src="https://clients.streamwood.ru/StreamWood/sw.js"
        charset="utf-8"></script>
<script type="text/javascript"> swQ(document).ready(function () {
    swQ().SW({
      swKey: '96dd0ca77f68e4b9348a7278e4ea1a7d',
      swDomainKey: '788461eee3216a7f94bcfdc0cb5b5c1b'
    });
    swQ('body').SW('load');
  }); </script> <!-- /StreamWood code -->


<script type="text/javascript">
  jQuery(document).ready(function ($) {
    $(".player").mb_YTPlayer();
  });
</script>

<script src="/sites/all/themes/cecekbyivan/js/libs/viewportchecker.js"></script>
<script src="/sites/all/themes/cecekbyivan/js/libs/my_animate.js"></script>


<script type="text/javascript"
        src="  /sites/all/themes/cecekbyivan/js/bootstrap.min.js"></script>


</body>
</html>
