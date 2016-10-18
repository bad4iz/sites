<?php
session_start();


if (isset($_POST['idCity'])) {
    $idCity = $_POST['idCity'];
//echo "вызван метод пост";
//    unset($_SESSION['smart_ip']['location']);
//
//
//    echo " <br/>**********************удалили сесию ***************************<br/><pre>";
//    print_r($_SESSION['smart_ip']);
//    echo " <br/>***************************удалили сесию ***************************<br/></pre>";
//



//   echo "<script>";
//   echo "    alert('вызов гета');";
//   echo "</script>";

//проверяем сесию города

// подставляем город по выбору из формы
    if ($idCity) {

        switch ($idCity) {
            case 410004:
                $telephone = '8(8452) 24-82-00';
                $city = 'Cаратов';
                break;
            case 413100:
                $telephone = "8(8453) 761-761";
                $city = 'Энгельс';
                break;
            case 413840:
                $telephone = "";
                $city = 'Балаково';
                break;
            case 404130:
                $telephone = "";
                $city = 'Волжский';
                break;
            /*
             case 412900:
                 $telephone = "";
                 $city = 'Вольск';
                 break;
                 */
            case 398056:
                $telephone = " 8(4742) 20-03-94";
                $city = 'Липецк';
                break;
            case 367000:
                $telephone = "";
                $city = 'Махачкала';
                break;
            case 440028:
                $telephone = "8(8412) 22-31-98";
                $city = 'Пенза';
                break;
            case 413720:
                $telephone = "";
                $city = 'Пугачев';
                break;
            case 446000:
                $telephone = "";
                $city = 'Сызрань';
                break;
            case 392020:
                $telephone = "8(4752) 42-71-45";
                $city = 'Тамбов';
                break;
            case 445000:
                $telephone = "";
                $city = 'Тольятти';
                break;
            case 432001:
                $telephone = "8(8422) 79-21-69";
                $city = 'Ульяновск';
                break;

            case 127434:
                $telephone = "8(499) 322-75-97";
                $city = 'Москва';
                break;

            case 400000:
                $telephone = "8(8442) 45-94-79";
                $city = 'Волгоград';
                break;

            /*
                    case 394053:
                        $telephone = "8(473) 200-02-81";
                        $city = 'Воронеж';
                        break; */

            case 50031:
                $telephone = "8(727) 350-53-47";
                $city = 'Казахстан';
                break;
            case 416503:
                $telephone = "";
                $city = 'Ахтубинск';
                break;
            case 30000:
                $telephone = "";
                $city = 'Актобе';
                break;
            case 50000:
                $telephone = "";
                $city = 'Алма-Ата';
                break;


             case 1:
                unset ($_SESSION['smart_ip']);
                $_SESSION['smart_ip']['city'] = null;

                break;

            default:
                $telephone = "8(8453) 761-761";
                $city = 'Энгельс';
        }
    }

    if (isset($idCity)) {
        $_SESSION['smart_ip']['idcity'] = $idCity;
    }


    if (isset($city)) {
        $_SESSION['smart_ip']['location']['city'] = $city;

    }

    if (isset($telephone)) {
        $_SESSION['smart_ip']['telephone'] = $telephone;
        $_SESSION['smart_ip']['location']['telephone'] = $telephone;
    }



    function goback()
    {
        header("Location: {$_SERVER['HTTP_REFERER']}");
//    header("Location: http://brickworks/page/kontakty.html");
        exit();
    }
}
header("Location: {$_SERVER['HTTP_REFERER']}");
exit();
//goback();
//
//
//echo "<br/> $_SESSION[smart_ip][city]" . $_SESSION['smart_ip']['city'];
//echo "<br/> $_SESSION[smart_ip][location][city]: " . $_SESSION['smart_ip']['location']['city'];
//echo "<br/> $_SESSION[smart_ip][idcity]: " . $_SESSION['smart_ip']['idcity'];
//
//
//foreach ($_REQUEST as $key => $value) {
//    echo "<p>для " . $key . ", имеется значение '" . $value . "' . </p>";
//}
//echo '<br/>adfsf<br/>>';
//foreach ($_SERVER as $key => $value) {
//    echo "<p>для " . $key . ", имеется значение '" . $value . "' . </p>";
//}
?>
<pre>
<?
print_r($_SESSION['smart_ip']);
echo "************************************";
echo "************************************";
echo "<br/>";
print_r($_SESSION['smart_ip']['city'] );
echo "************************************";
echo "************************************";
echo "<br/>";
//$name = 'city_dilers'; // машинное имя словаря таксономии
//$parent = taxonomy_get_vocabularies();

// $parent = taxonomy_get_children(tid_46, 6);
// $par = $parent['47'] -> name;
// $tel = $parent['47'] -> field_telefone;
// echo "<br/>";
// print_r($par);
// echo "<br/>";
// print_r($tel[und][0][value]);
//print_r($parent);
?>
</pre>

<a href="http://brickworks/">возврат на главную</a>