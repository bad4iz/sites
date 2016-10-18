 <?
  if (isset($_POST['idCity'])) {
    $idCity = $_POST['idCity'];
    $_SESSION['smart_ip']['idcity'] = $_POST['idCity'] ;
    

   } 



//проверяем сесию города


// подставляем город по выбору из формы
if (isset($idCity))  {

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
        case 412900:
            $telephone = "";
            $city = 'Вольск';
            break;
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


        case 394053:
            $telephone = "8(473) 200-02-81";
            $city = 'Воронеж';
            break;

        case 50031:
            $telephone = "8(727) 350-53-47";
            $city = 'Казахстан';
            break;
        case 1:
            $_SESSION['smart_ip']['city'] = null;

            break;

        default:
            $telephone = "8(8453) 761-761";
            $city = 'Энгельс';
    }
}
// записываем все в сесию

if (isset($idCity)) {
    $_SESSION['smart_ip']['idcity'] = $idCity;
}


if (isset($city)) {
    $_SESSION['smart_ip']['city'] = $city;
    $_SESSION['smart_ip']['location']['city'] = $city;

}

if (isset($telephone)) {
    $_SESSION['smart_ip']['telephone'] = $telephone;
}



echo "<pre>";
print_r($_SERVER);
echo "</pre>";
?>
<script language="JavaScript" type="text/javascript">

location="<?$_SERVER [HTTP_REFERER]?>" 

</script>
<!--   <div class="col-md-3 phone top">
    <strong>8(845) 761-761" </strong>
</div> -->
