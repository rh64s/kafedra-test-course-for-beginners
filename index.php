<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>3. Основы разработки</title>
</head>
<body>
<p>напишите функцию, принимающую на вход 2 аргумента - массив и какое-либо значение. Функция возвращает true, если переданное значение присутствует в массиве и false - если нет</p>
<?php
function is_exists($any_array, string $key ){
    foreach ($any_array as $value) {
        if ($value === $key) {
            return true;
        }
    }
    return false;
}
$any_array = ["item1", "item2", "item3", "item4", "item5"];
$key = "item5";
echo is_exists($any_array, $key);
?>
<br>

<p>напишите функцию, принимающую на вход 2 аргумента - массив и какое-либо значение. Функция возвращает число вхождений числа в массив. Например: для массива [1, 2, 1, 3] число вхождений числа "1" будет равно двум.</p>
<?php
function how_much($any_array, string $key ){
    $count = 0;
    foreach ($any_array as $value) {
        if ($value === $key) {
            $count++;
        }
    }
    return $count;
}
$any_array = ["item1", "item2", "item3", "item4", "item5", "item2", "item2", "item5"];
//здесь 3 "item2"
$key = "item2";
echo how_much($any_array, $key);
?>
<br>
<p>четные числа. найти и вывести четные числа в массиве</p>
<?php
function find_2($any_array) {
    $new_array = [];
    foreach ($any_array as $value) {
        if ($value % 2 === 0) {
            $new_array[] = $value;
        }
    }
    return $new_array;
}
$any_array = [1,2,3,4,5,6,7,8,9,10];
foreach (find_2($any_array) as $value) {
    echo $value, " ";
}
?>
<br>
<p>числа Фибоначчи</p>
<?php
function fubonacci($n) {
    $any_array = [0,1];
    for ($i = 1; $i < $n; $i++) {
        $any_array[] = $any_array[$i - 1] + $any_array[$i];
    }
    return $any_array;
}

$n = 12;
$any_array = fubonacci($n);
foreach ($any_array as $value) {
    echo $value, " ";
}
?>
</body>
</html>