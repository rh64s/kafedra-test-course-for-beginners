<html lang="ru">
<head>
    <title>5. Взаимодействие с пользователем</title>
</head>
<body>
<form action="/result.php">
    <input type="text" name="x1">
    <select name="operation">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select>
    <input type="text" name="x2">
    <input type="submit" value="Посчитать">
</form>
<br>
<br>
<p>Дан массив. Найти наиболее повторяющееся значение</p>
<?php
function find_copies($array)
{
    $new_array = [];
    foreach ($array as $item) {
        if (array_key_exists($item, $new_array)) {
            $new_array[$item]++;
        } else {
            $new_array[$item] = 1;
        }
    }
    $max = $array[0];
    foreach ($new_array as $item => $count) {
        if ($count > $new_array[$max]) {
            $max = $item;
        };
    }
    return $max;
}

$string_nums = explode(" ", "1 2 3 2 4 4 2 5");
echo find_copies($string_nums);
?>
<br>
<p>Переместить все нули в конец</p>
<?php
function zero_to_end($array) {
    $count_zero = 0;
    $new_array = [];
    foreach ($array as $item) {
        if ($item == 0) {
            $count_zero += 1;
        } else {
            $new_array[] = $item;
        }
    }
    for ($i = 0; $i < $count_zero ; $i++) {
        $new_array[] = 0;
    }
    return $new_array;
}
$string_nums = explode(" ", "7 0 39 0 282 2 4 0 45");
$array = zero_to_end($string_nums);
$line = '';
foreach ($array as $item) {
    $line .= $item . " ";
}
echo $line;
?>
</body>
</html>