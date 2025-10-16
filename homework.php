<?php
echo "Все комбинации заданной длины", "<br>", "На вход подается строка целых уникальных (не повторяющихся) чисел, разделенных пробелами (elements).
Следующая строка содержит число элементов в комбинации (k).
1 ≤ k ≤ количество elements. Найдите все возможные комбинации заданной длины. Выведите их в любом порядке.", "<br>";

$line = "1 2 3";
$max_len = (int) "2";

echo $line, "<br>";
$line = explode(" ", $line);
function all_vars($array, $len) {
    $total = pow(count($array), $len);
    for ($i = 0; $i < $total; $i++) {
        $new_array = [];
        $num = $i;
        for ($j = 0; $j < $len; $j++) {
            $new_array[] = $array[$num % count($array)];
            $num = (int)($num / count($array));
        }
        echo implode(' ', array_reverse($new_array)) . "<br>";
    }
}
all_vars($line, $max_len);