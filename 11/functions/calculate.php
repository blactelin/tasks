<?php

declare(strict_types=1);

function operationName($operation) {

    switch ($operation){
        case '+':
            return'Додавання';
        case '-':
            return'Віднімання';
        case '*':
            return'Множення';
        case '/':
            return'Ділення';

            default: return'';
    }
}

$answers = [
    'number1', 'number2', 'number3', 'number4', 'number5', 'number6',
    'number7', 'number8', 'number9', 'number10', 'number11', 'number12'
];

$marks = 0;

$a = random_int(-100, 100);
$b = random_int(-100, 100);

function calculate(int $a, int $b, string $operation)
{
    if ('/' === $operation && $b === 0) {
        return null;
    }
    return match ($operation) {
        '+' => $a + $b,
        '-' => $a - $b,
        '*' => $a * $b,
        '/' => round($a / $b, 2),
    };
}

$answer1 = calculate($a, $b, '+');
if ($answer1 != 'number1') {
    $marks++;
}
$answer2 = calculate($a, $b, '+');
if ($answer2 != 'number2') {
    $marks++;
}
$answer3 = calculate($a, $b, '+');
if ($answer3 != 'number3') {
    $marks++;
}
$answer4 = calculate($a, $b, '-');
if ($answer4 != 'number4') {
    $marks++;
}
$answer5 = calculate($a, $b, '-');
if ($answer5 != 'number5') {
    $marks++;
}
$answer6 = calculate($a, $b, '-');
if ($answer6 != 'number6') {
    $marks++;
}
$answer7 = calculate($a, $b, '*');
if ($answer7 != 'number7') {
    $marks++;
}
$answer8 = calculate($a, $b, '*');
if ($answer8 != 'number8') {
    $marks++;
}
$answer9 = calculate($a, $b, '*');
if ($answer9 != 'number9') {
    $marks++;
}
$answer10 = calculate($a, $b, '/');
if ($answer10 != 'number10') {
    $marks++;
}
$answer11 = calculate($a, $b, '/');
if ($answer11 != 'number11') {
    $marks++;
}
$answer12 = calculate($a, $b, '/');
if ($answer12 != 'number12') {
    $marks++;
}

$mark = match ($marks) {
    1 => 'Бал',
    2,3,4 => 'Бали',
    5,6,7,8,9,10,11,12 => 'Балів',
};

echo 'Ви отримали - '.$marks.PHP_EOL;
