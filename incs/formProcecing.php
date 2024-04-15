<?php
//Работа с MySql DB и данными из формы
require_once __DIR__ . "/helpers.php";

//Получение данных из формы
$firstName = $_POST["FirstName"];
$secondName = $_POST["SecondName"];
$thirdName = $_POST["ThirdName"];
$telephones = $_POST["Telephones"];
$email = $_POST["Email"];

//Валидация данных на стороне сервера
$_SESSION['validation'] = [];

if (empty($firstName)) {
    $_SESSION['validation']['FirstName'] = 'Неверное фамилия';
}

if (empty($secondName)) {
    $_SESSION['validation']['SecondName'] = 'Неверное имя';   
}

if (empty($thirdName)) {
    $_SESSION['validation']['ThirdName'] = 'Неверное отчество';
}

if (empty($telephones)) {
    $_SESSION['validation']['Telephones'] = 'Неккоректный телефон';  
}

if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $_SESSION['validation']['Email'] = 'Неккоректный email';
}

if(!empty($_SESSION['validation'])) {
    redirect('/main.php');
}