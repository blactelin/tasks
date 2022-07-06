<?php

//1) Функции для подсчета
// операторы для операций (дополнительно можно убирать или добавить операции (+,-, и т.д.)
$operations = [
    '+',
    '-',
    '*',
    '/',
];

//функция калькулятор
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

// функция отображения названий операций
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

//2) Функции для вывода ошибок
// выводим красивые ошибки
function set_alert(string $type, string $text): void
{
    $_SESSION['alerts'][] = [
        'type' => $type,
        'text' => $text
    ];
}

function get_alerts(): array
{
    return $_SESSION['alerts'] ?? [];
}

function flush_alerts(): void
{
    $_SESSION['alerts'] = [];
}