<p>Есть массив чисел – [1, 3, 2]. Отсортируйте их от меньшего к большему и преобразуйте в строку, в которой значения элементов массива разделяются двоеточиями. В результате должна получиться строка “1:2:3”.</p>
<?php
function sort_array($array) {
    for ($i = 0; $i < count($array); $i++) {
        for ($j = 0; $j < count($array); $j++) {
            if ($array[$i] < $array[$j]) {
                $temp = $array[$i];
                $array[$i] = $array[$j];
                $array[$j] = $temp;
            }
        }
    }
    return $array;
}
function to_string($array, $separator) {
    $line = '';
    for ($i = 0; $i < count($array); $i++) {
        if($i == count($array) - 1) {
            $line .= $array[$i];
            break;
        }
        $line .= $array[$i] . $separator;
    }
    return $line;
}
$any_array = [1,3,2];
echo (to_string(sort_array($any_array), ":"));
?>
<br>
<p>Есть массив чисел – [1, 2, 3, 4, 5]. Получите с помощью одной функции массив, в котором будут элементы исходного с 1-го элемента по 3-й. В результате должен получиться массив с числами [2, 3, 4].</p>
<?php
$any_array = [1,2,3,4,5];
echo (to_string(array_slice($any_array, 1, 3), ", "));
?>
<br>
<p>На вход дана строка с числами, разделенными пробелами.
    Удалите все повторы чисел. Выведите их в любом порядке, разделив пробелами.
</p>
<?php
function clear_copies($string_nums) {
    $array_nums = explode(" ", $string_nums);
    $array_new = [];
    foreach ($array_nums as $num) {
        if(!in_array($num, $array_new)) {
            $array_new[] = $num;
        }
    }
    return $array_new;
}
$nums = "1 1 2 1 3 4 5 6 1 1 2 5 3";
echo to_string(clear_copies($nums), " ");
?>
