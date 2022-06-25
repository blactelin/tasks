<?php
session_start();

require_once __DIR__.'/templates/alerts.php';

//случайные значения переменных "а"
$a1 = random_int(-100, 100);
$a2 = random_int(-100, 100);
$a3 = random_int(-100, 100);
$a4 = random_int(-100, 100);
$a5 = random_int(-100, 100);
$a6 = random_int(-100, 100);
$a7 = random_int(-100, 100);
$a8 = random_int(-100, 100);
$a9 = random_int(-100, 100);
$a10 = random_int(-100, 100);
$a11 = random_int(-100, 100);
$a12 = random_int(-100, 100);

//случайные значения переменных "б"
$b1 = random_int(-100, 100);
$b2 = random_int(-100, 100);
$b3 = random_int(-100, 100);
$b4 = random_int(-100, 100);
$b5 = random_int(-100, 100);
$b6 = random_int(-100, 100);
$b7 = random_int(-100, 100);
$b8 = random_int(-100, 100);
$b9 = random_int(-100, 100);
$b10 = random_int(-100, 100);
$b11 = random_int(-100, 100);
$b12 = random_int(-100, 100);

//$variables = [];
//$operations = 12;
//
//for ($i=0; $i < 12; $i++) {
//    $variables[] = ['a' => random_int(-100, 100), 'b' => random_int(-100, 100)];
//}

//Решение проблемы с hidden !!!
//$_SESSION['answers'] = [];
//$_SESSION['answers']['expression1'] = $a1 + $b1;
//$_SESSION['answers']['expression2'] = $a1 + $b1;
//$_SESSION['answers']['expression3'] = $a1 + $b1;
//$_SESSION['answers']['expression4'] = $a1 + $b1;
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
<!--форма для вывода уравнения и форма для ввода ответа пользователя-->
<form action="scripts/check.php" method="post">
    <fieldset><br>

        <label>Додавання</label>
        <div>
            <?php
            echo "($a1)".'+'."($b1)".'=' ?>
            <input type="number" name="answer1" required></div>
        <div><input name=" <?php
            echo 'expression1' ?>" type="hidden" value="<?php
            echo $a1 + $b1; ?>"></div>
        <div>
            <?php
            echo "($a2)".'+'."($b2)".'=' ?>
            <input type="number" name="answer2" required></div>
        <div><input name="expression2" type="hidden" value="<?php
            echo $a2 + $b2; ?>"></div>
        <div>
            <?php
            echo "($a3)".'+'."($b3)".'=' ?>
            <input type="number" name="answer3" required></div>
        <div><input name="expression3" type="hidden" value="<?php
            echo $a3 + $b3; ?>"></div>
        <br>

        <label>Віднімання</label>
        <div>
            <?php
            echo "($a4)".'-'."($b4)".'=' ?>
            <input type="number" name="answer4" required></div>
        <div><input name="expression4" type="hidden" value="<?php
            echo $a4 - $b4; ?>"></div>
        <div>
            <?php
            echo "($a5)".'-'."($b5)".'=' ?>
            <input type="number" name="answer5" required></div>
        <div><input name="expression5" type="hidden" value="<?php
            echo $a5 - $b5; ?>"></div>
        <div>
            <?php
            echo "($a6)".'-'."($b6)".'=' ?>
            <input type="number" name="answer6" required></div>
        <div><input name="expression6" type="hidden" value="<?php
            echo $a6 - $b6; ?>"></div>
        <br>

        <label>Множення</label>
        <div>
            <?php
            echo "($a7)".'*'."($b7)".'=' ?>
            <input type="number" name="answer7" required></div>
        <div><input name="expressioon7" type="hidden" value="<?php
            echo $a7 * $b7; ?>"></div>
        <div>
            <?php
            echo "($a8)".'*'."($b8)".'=' ?>
            <input type="number" name="answer8" required></div>
        <div><input name="expression8" type="hidden" value="<?php
            echo $a8 * $b8; ?>"></div>
        <div>
            <?php
            echo "($a9)".'*'."($b9)".'=' ?>
            <input type="number" name="answer9" required></div>
        <div><input name="expression9" type="hidden" value="<?php
            echo $a9 * $b9; ?>"></div>
        <br

        <label>Ділення</label>
        <div>
            <?php
            echo "($a10)".'/'."($b10)".'=' ?>
            <input type="number" name="answer10" step="0,01" required></div>
        <div><input name="expression10" type="hidden" value="<?php
            echo round($a10 / $b10); ?>"></div>
        <div>
            <?php
            echo "($a11)".'/'."($b11)".'=' ?>
            <input type="number" name="answer11" step="0,01" required></div>
        <div><input name="expression11" type="hidden" value="<?php
            echo round($a11 / $b11); ?>"></div>
        <div>
            <?php
            echo "($a12)".'/'."($b12)".'=' ?>
            <input type="number" name="answer12" step="0,01" required></div>
        <div><input name="expression12" type="hidden" value="<?php
            echo round($a12 / $b12); ?>"></div>
        <br>
        <button type="submit">Input</button>
    </fieldset>
</form>
</body>
</html>