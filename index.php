<?php
$current_file = "/index.php";
echo "-----------------------", "<br>", "вывод самого себя (без упоминания о своем названии)", "<br>", "<br>", "--------------------";
$file = fopen(__DIR__ . $current_file, 'r');
while (!feof($file)) {
    $string = fgets($file);
    if (str_contains($string, $current_file)) {continue;}
    echo $string;
    echo '<br>';
}
fclose($file);

echo '<br>';
echo '====================================================================================';
echo '<br>';

echo "-----------------------", "<br>","вывод всего, что в директории скрипта", "<br>", "<br>";
foreach (glob(__DIR__ . "/*") as $filename) {
    echo $filename, "<br>";
}

echo "-----------------------", "<br>","создание папок", "<br>", "<br>";
for($i = 0; $i < 3; $i++) {
    mkdir(__DIR__ . "/" . $i);
}

echo "-----------------------", "<br>","вывод только папок", "<br>", "<br>";
foreach (glob(__DIR__ . "/*") as $filename) {
    if(is_dir($filename)) {
        echo $filename, "<br>";
    }
}

echo "-----------------------", "<br>","вывести все возможные уникальные комбинации", "<br>", "<br>";

$line = "1 2 3";
echo $line, "<br>";
$line = explode(" ", $line);
function all_vars($array) {
    foreach($array as $i_value) {
        foreach($array as $j_value) {
            if($i_value !== $j_value) {
                echo $i_value . " " . $j_value, "<br>";
            }
        }
    }
}
all_vars($line);
