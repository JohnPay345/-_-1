<?php
session_start();
//Перенапрка на другую страницу по пути
function redirect(string $path) {
    header("Location: $path");
    die();
}

//Возвращает булевое значение(true, false), когда у input[name="$fieldName"] пустое значение или неккоректная форма записи то false, в ином случае true
function hasValidationError(string $fieldName):bool {
    return isset($_SESSION['validation'][$fieldName]);
}

//Очистка сессии
function clearValidation() {
    $_SESSION['validation'] = [];
}

//Выводит информацию об ошибке из formProccecing.php
function getErrorMessage(string $fieldName) {
    echo $_SESSION['validation'][$fieldName] ?? '';
}

function loadOldValue(string $key, string $value):void {
    $_SESSION['old'][$key] = $value;
}

function old(string $key) {
    $value = $_SESSION['old'][$key] ?? '';
    unset($_SESSION['old'][$key]);
    return $value;
}

//Создание уникального набора буквенно-цифровых строк
function generate_string($input, $strength = 15) {
    $input_length = strlen($input);
    $random_string = '';
    for($i = 0; $i < $strength; $i++) {
        $random_character = $input[mt_rand(0, $input_length - 1)];
        $random_string .= $random_character;
    }
    return $random_string;
}