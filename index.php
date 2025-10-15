<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>3. Основы разработки</title>
</head>
<body>
<p>С помощью цикла while создайте массив, содержащий чётные числа от 345 до 357. Затем выведите элементы массива с помощью цикла foreach.</p>
<?php
$my_array = [];
$current_num = 344;
while (++$current_num and $current_num <= 357) {
    $my_array[] = $current_num;
}
foreach ($my_array as $num) {
    echo $num, ", ";
}
?>

<p>Запустите следующий код: while (true) {
    echo 1;
    }, к чему это привело?</p>
<?php //while(true) {echo 1;}?>
<p>это приводит к заполнению документа "1" до тех пор, пока процесс не закончится принудительно</p>
<br>
<p>если установить max_execution_time = 1, то php будет думать, что код должен выполниться за секунду. но с этим циклом код будет выполняться до бесконечности, поэтому мы получим ошибку</p>
</body>
</html>