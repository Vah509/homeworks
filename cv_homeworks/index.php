<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Резюме</title>
    <style type="text/css">
        h1{
            font-size: 140%;
            font-family: Verdana;
            color: #999999;
        }
        h3{
            font-size: 90%;
            font-family: Verdana, Arial;
            color: #666666;
        }
        li{
            font-size: 80%;
            font-family: Verdana, Arial;
            color: #999999;
        }
    </style>
</head>
<body>
    <?php
// данные резюме
    $my_Name="Вахтанг";
    $my_Family="Мезвришвили";
    $tel="067-5097094";
    $date_Birth= "09/01/1972";
    $locftion="г.Киев";
    $email="5097094@gmail.con";

// професиональные навыки
$skills1= "php";
$skills2= "phpShtorm";
$skills3= "HTML";

//опыт работы
$date_Begin_work1="20/02/2015";
$date_Expir_work1="-";
$where_Work1="PHP Academy";
$profession1="Junior PHP";
$date_Begin_work2="01/05/2015";
$date_Expir_work2="01/06/2015";
$where_Work2="42cupscoffe";
$profession2="Junior manual QC";

//Обучение
$date_Begin_education1="20/02/2016";
$date_Expir_education1="-";
$where_education1="PHP Academy";
$profession_ed1="Базовый курс PHP";
$date_Begin_education2="01/04/2015";
$date_Expir_education2="01/06/2015";
$where_education2="QA Factory";
$profession_ed2="Базовый курс manual QA";

//Хобби

$hobbies1="Компютеры";
$hobbies2="Футбол";
$hobbies3="Плаванье";

// тело резюме

    echo "<h1>". $my_Name." ".$my_Family. "</h1>";
      echo "<ul>
            <li>Тел ". $tel . "</li>
            <li>Дата рождения ". $date_Birth. "</li>
            <li>Место проживание ". $locftion." </li>
            <li>Email: ".$email."</li>
            </ul>
    <h3>  Пророфесиональные навыки </h3>
    <ol>
        <li>" . $skills1 . "</li>
        <li>" . $skills2 . "</li>
        <li>" . $skills3 . "</li>
    </ol>
    <h3> Опыт работы </h3>
    <ul>
        <li>" . $date_Begin_work1 . " - " . $date_Expir_work1 . " " . $where_Work1. " :" . $profession1 . "</li>
        <li>" . $date_Begin_work2 . " - " . $date_Expir_work2 . " " . $where_Work2. " :" . $profession2 . "</li>
    </ul>
    <h3> Курсы обучение</h3>
    <ul>
        <li>" . $date_Begin_education1 . " - " . $date_Expir_education1 . " " . $where_education1. " :" . $profession_ed1 . "</li>
        <li>" . $date_Begin_education2 . " - " . $date_Expir_education2 . " " . $where_education2. " :" . $profession_ed2 . "</li>
    </ul>
    <h3> Хобби </h3>
    <ol>
        <li>" . $hobbies1 . "</li>
        <li>" . $hobbies2 . "</li>
        <li>" . $hobbies2 . "</li>
    </ol>";
    ?>
</body>
</html>