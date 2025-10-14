<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Функции в PHP</title>
</head>
<body>
<h1>3. Основы разработки</h1>
<p>Напишите функцию, которая будет принимать на вход 3 аргумента с типом float и возвращать минимальное значение.</p>
<?php
function minimal_3floats(float $a, float $b, float $c)
{
    if ($a < $b && $a < $c) {
        return $a;
    } elseif ($b < $a && $b < $c) {
        return $b;
    } elseif ($c < $a && $c < $b) {
        return $c;
    }
}
$a = 3.0;
$b = 5.0;
$c = 2.0;
echo minimal_3floats($a, $b, $c);
?>
<p>Напишите функцию, которая принимает на вход два аргумента по ссылкам и умножает каждый из них на 2</p>
<?php
function ym2(float &$a, float &$b){
    $a *= 2;
    $b *= 2;
}
$a = 3.0;
$b = 5.0;
echo $a, " ", $b, "<br>";
ym2($a, $b);
echo $a, " ", $b, "<br>";
?>

<p>Напишите функцию, считающую факториал числа (произведение целых чисел от единицы до переданного). Реализуйте с помощью рекурсии.</p>
<?php
function factorial(int $num) {
    if ($num == 0) {
        return 1;
    } elseif ($num < 0) {
        return NAN;
    }
    return $num*factorial($num-1);
}

echo factorial(5);
?>

<p>Напишите функцию, которая будет выводить на экран целые числа от 0 до переданного значения. И да, тут тоже нужно реализовать с помощью рекурсии (чтобы лучше с ней познакомиться, несмотря на то что вариант с циклом проще).</p>
<?php
function echo_all(int $num) {
    if ($num >= 0) {
        echo_all($num-1);
        echo $num, " ";
    }
}
echo_all(30);
?>
</body>
</html>
