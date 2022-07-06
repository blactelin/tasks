<?php

session_start();

require_once __DIR__.'/functions/calculate.php';
require_once __DIR__.'/error_output/alerts_output.php';

$variables = [];    //пустой масив переменных
$ix = 0;            //счетчик
$_SESSION['answers'] = [];          //пустой масив для добавления верных ответов
$_SESSION['answer_keys'] = [];      //пустой масив для добавления ответов пользователя

// подсчет выражения
foreach ($operations as $operation){
    for ($i=0; $i < 3; $i++) {
        $a = random_int(-100, 100);     //случайное значение а
        $b = random_int(-100, 100);     //случайное значение б
        $_SESSION['answers']['expression' . ($ix + 1)] = calculate($a, $b, $operation); //вызов функции калькулятор
        $_SESSION['answer_keys'][] = 'answer' . ($ix + 1);
        $variables[$ix] = ['a' => $a, 'b' => $b, 'o' => $operation, 'k' => 'answer' . ($ix + 1)];  //переменные
        $ix++;
    }
}


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
</head>
<body>
<form action="scripts/check.php" method="post">
    <fieldset><br>
        <?php foreach($variables as $it => $variable): ?>
            <?php if ($it % 3 === 0): ?>           <!--количество одинаковых операций, регулируемое-->
                <label><?php echo operationName($variable['o']); ?></label>
            <?php endif; ?>
            <div>                   <!--вывод на экран самого выражения-->
                <?php echo '('. $variable['a'] . ' ) '. $variable['o'] . ' ( ' . $variable['b']. ' ) =' ?>
                <input type="number" name="<?php echo $variable['k'] ?>" step="0.01" required></div>
        <?php endforeach; ?>
        <br>
        <button type="submit">Input</button>
    </fieldset>
</form>
</body>
</html>
