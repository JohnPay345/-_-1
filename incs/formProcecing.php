<?php
//Работа с MySql DB и данными из формы
require_once __DIR__ . "/helpers.php";
require_once __DIR__ ."/config.php";


//Получение данных из формы
$firstName = $_POST["FirstName"] ?? null;
$secondName = $_POST["SecondName"] ?? null;
$thirdName = $_POST["ThirdName"] ?? null;
$telephones = $_POST["Telephones"] ?? null;
$email = $_POST["Email"] ?? null;
$infoOrder = $_POST["infoOrder"] ?? null;

loadOldValue('FirstName', $_POST["FirstName"]);
loadOldValue('SecondName', $_POST["SecondName"]);
loadOldValue('ThirdName', $_POST["ThirdName"]);
loadOldValue('Telephones', $_POST["Telephones"]);

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

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    loadOldValue('Email', $email);
    $_SESSION['validation']['Email'] = 'Неккоректный email';
}

if(!empty($_SESSION['validation'])) {
    redirect('/main.php');
}

//Работа с DB orderprocecing
$mysql = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
mysqli_report(MYSQLI_REPORT_ERROR || MYSQLI_REPORT_STRICT);
$mysql->query("INSERT INTO `users` (`Фамилия`, `Имя`, `Отчество`, `Номер телефона`, `Email`) VALUES('$firstName', '$secondName', '$thirdName', '$telephones', '$email')");
$mysql->close();
redirect('/main.php');