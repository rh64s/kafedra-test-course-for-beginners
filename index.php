<p>На вход подается строка из чисел, разделенных пробелами.
    Найдите все числа, встречающиеся 2 и более раз. Выведите их в любом порядке, разделяя пробелами.</p>
<?php
function find_copies($array) {
    $new_array = [];
    foreach ($array as $item) {
        if(array_key_exists($item, $new_array)) {
            $new_array[$item]++;
        } else {
            $new_array[$item] = 1;
        }
    }
    $line = '';
    foreach ($new_array as $item => $count) {
        $line .= $count > 1 ? $item . ' ' : '';
    }
    return $line;
}
$string_nums = explode(" ", "3 2 5 2 1 3 1 1 3");
echo find_copies($string_nums);
?>
<br>
<p>На вход подается строка из чисел, разделенных пробелами.
    Найдите максимальное произведение двух чисел из этой строки.</p>
<?php
function max_mult($array) {
    $max = 0;
    foreach ($array as $item1) {
        foreach ($array as $item2) {
            if ($item1 != $item2) {
                if ($item2 * $item1 > $max) {
                    $max = $item2 * $item1;
                }
            }
        }
    }
    return $max;
}

$string_nums = explode(" ", "1 2 3 4");
echo max_mult($string_nums);
?>
