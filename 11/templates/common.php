<?php
//массив вводимых ответов от пользователя
//$answers = [
//    'answer1', 'answer2', 'answer3', 'answer4', 'answer5', 'answer6',
//    'answer7', 'answer8', 'answer9', 'answer10', 'answer11', 'answer12'
//];
//
////массив правильных ответов
//$expressions = [
//    'expression1', 'expression2', 'expression3', 'expression4', 'expression5', 'expression6',
//    'expression7', 'expression8', 'expression9', 'expression10', 'expression11', 'expression12'
//];

$operations = [
    '+',
   // '-',
    '*',
  //  '/'
];

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
