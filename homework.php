<?php
$line = "100 95 9 2 42 11 81";
//$line = "1 2 3 4 5 9 8";
echo $line, "<br>";
$line = explode(" ", $line);
function max_from_this($array) {
    for ($i = 0; $i < count($array); $i++) {
        for ($j = 0; $j < count($array) - $i - 1; $j++) {
            if (strcmp(($array[$j+1] . $array[$j]), ($array[$j] . $array[$j+1])) > 0) {
                $mem = $array[$j];
                $array[$j] = $array[$j+1];
                $array[$j+1] = $mem;
            }
        }
    }
    $result = implode("", $array);
    return $result;
}
echo max_from_this($line);
?>