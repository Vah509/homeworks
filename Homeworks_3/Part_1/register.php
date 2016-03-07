<?php
/**
 * Created by PhpStorm.
 * User: VAHTANG
 * Date: 06.03.2016
 * Time: 18:28
 */
/**
 В файле регистрации (register.php ):
 1. Проверить, если в $_SERVER['REQUEST_METHOD'] не равняется 'POST', делаем :
 header("Location: /index.html");// делаем перенаправление на страницу с регистрацией
 exit();
 (Не забывать, что мы пишем в заголовок ответа браузеру, поэтому - до этого нельзя ничего выводить)
 2. проверить - есть ли в переменной $_POST все наши ключи (fio, dob, profession, website, login, password, password2)
Оформить в виде функции checkPost, с последующим его вызовом.
Делается это так :
$masterKeys = array('fio', 'day', 'month', 'year', 'profession', 'website', 'login', 'password', 'password2');
Получить все ключи массива $_POST (результат - массив) : $postKeys = array_keys($_POST);
foreach - ем проходим по массиву $masterKeys (массив, с эталоном того, что должно быть), выбираем его значение - как $key
проверяем, есть ли в массиве $postKeys этот ключ $key . Для этого - есть функция in_array($key, $postKeys); - ее возврат True(в случае, когда есть, и False - если нету)
Если хотя бы 1- го ключа нету
а) выводим сообщение :
---
Не все данные присутствуют в форме
<a href="/index.html">Возврат к форме</a>
---
б) делаем в php вызов функции  exit();
3. Если функция на предыдущем шаге отработала корректно, делаем :
file_put_contents("users.txt", implode("::", $_POST) . "\r\n", FILE_APPEND);
В результате ваша форма, должна "регистрировать", а точней, логгировать, пользователей в файле users.txt, при заполненных всех полях
 */


/**
 * @param $masterKey -- necessary keys
 * @param $invalidData -- incorrect values
 * @param $inspectionArray --- checked array
 * @return string 'no_array', 'no_all_key', 'invalid_data', 'good data'
 */
function checkPost ($masterKey,$invalidData, $inspectionArray) {
    if ( ! is_array($masterKey) || ! is_array($inspectionArray) || ! is_array($invalidData))
        return 'no_array';
    $keyInspectionArray = array_keys($inspectionArray);
    foreach ($masterKey as $key ){
        if ( ! in_array($key, $keyInspectionArray))return 'no_all_key';
    }
    foreach ($invalidData as $data) {
        if (  in_array($data, $inspectionArray)) return 'invalid_data';
    }
    return 'good data';
};

// start form data processing

// name necessary keys //
$masterKey = array(
    'fio',
    'day', 'month','year',
    'profession',
    'website',
    'login',
    'password','password2',
    );

// incorrect values array
$invalidData = array ( "",null);

/** inspection metod POST */
echo '<pre>';

if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    header("Location: /index.html"); exit();
}

/** inspenion key in post and data in post  */
$datePost = $_POST;
$chekKey = checkPost($masterKey,$invalidData,$datePost);

if ($chekKey == 'no_array' || $chekKey == 'no_all_key'){
    echo 'К сожалению где-то произошла ошибка <br>
          необходимо повторно заполнить форму <br>
          <a href="index.html"> кликните для перехода на форму</a>  '; exit();
    }
    elseif ($chekKey == 'invalid_data'){
        echo 'К сожалению Вы заполнили не все данные или заполнили их некоректно <br>
          необходимо повторно заполнить форму <br>
          <a href="index.html"> кликните для перехода на форму</a>  '; exit();
    }
    elseif ( $chekKey == 'good data' && $datePost['password'] != $datePost['password2']){
        echo 'К сожалению пароли не совпадают  <br>
          необходимо повторно заполнить форму <br>
          <a href="index.html"> кликните для перехода на форму</a>  '; exit();
    }
    else{
        file_put_contents("users.txt", implode("::", $datePost) . "\r\n", FILE_APPEND);
        echo 'Ваши данные успешно сахганены.  Спасибо.'; exit();
    }







