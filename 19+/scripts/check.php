<?php

declare(strict_types=1);
session_start();

require_once __DIR__.'/../functions/calculate.php';

// 1. Проверить корректность запроса
if ('POST' !== $_SERVER['REQUEST_METHOD']) {
    set_alert('error', 'Method not allowed!');
    header('Location: /11/index.php');
    exit;
}
//массив вводимых ответов от пользователя
$answers = array_values($_SESSION['answer_keys']);;

//2. Проверить на наличие данных
foreach ($answers as $answer) {
    if (!isset($_POST[$answer])) {
        set_alert('error', 'Answer are required');
        header('Location: /11/index.php');
        exit;
    }
}
//массив правильных ответов
$expressions = array_keys($_SESSION['answers']);;

$length = count($expressions);
$marks = 0;

//сравнения правильного ответа с ответом пользователя
for ($i = 0; $i < $length; $i++) {

    if ($_POST[$answers[$i]] == $_SESSION['answers'][$expressions[$i]]) {
        $marks++;
    }
};
if ($marks == 0){
    echo 'Всі ваші відповіді не вірні! Ваша оцінка - 0 Балів!'.PHP_EOL;  // вывод если все ответы не верны
    return;
}

//подсчет количества правильных ответов
$mark = match ($marks) {
    1 => 'Бал',
    2, 3, 4 => 'Бали',
    5, 6, 7, 8, 9, 10, 11, 12 => 'Балів',
};

//вывод в браузер с оценкой для пользователя
echo 'Ви отримали - '.$marks.$mark.'!'.PHP_EOL;


