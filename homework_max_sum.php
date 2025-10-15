<?php
echo "

На вход подается строка целых чисел, разделенных пробелами.
<br>
<br>
Нужно найти последовательность подряд идущих чисел, у которой сумма элементов будет максимальной.
<br>
<br>
Например, для строки \"-2 1 -3 4 -1 2 1 -5 4\" решением будет последовательность \"4 -1 2 1\" с максимальной суммой элементов равной \"6\".
<br>
<br>
Вывести нужно максимальную сумму подряд идущих элементов.
<br></br>
Нужно учитывать, что последовательность может представлять собой лишь одно число (смотрите пример с отрицательными числами).
<br>
<br>
";
$line = "-2 1 -3 4 -1 2 1 -5 4";
echo $line, "<br><br>";
$line = explode(" ", $line);
foreach ($line as $key => $value) {
    if (is_numeric($value)) {
        $line[$key] = (float) $value;
    } else {
        echo "Write numbers!";
        die();
        break;
    }
}
//923 413 01 16
function array_summ($array)
{
    $mem = 0;
    foreach ($array as $value) {
        $mem += $value;
    }
    return $mem;
}

function sum_stream($array) {
    $max = $array[0];
    for($i = 0; $i < count($array); $i++) {
        for($j = $i; $j < count($array); $j++) {
            $mem = array_sum(array_slice($array, $i, $j-$i+1));
            if ($mem > $max) {
                $max = $mem;
            }
        }
    }
    return $max;
}
echo sum_stream($line);
?>