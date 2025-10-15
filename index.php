<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>3. Основы разработки</title>
</head>
<body>
<p>Создайте массив с тремя уровнями вложенности. После создания массива добавьте новые элементы на самом глубоком уровне вложенности отдельным выражением.</p>
<?php

$carsSpeeds = [
        95,
        140,
        78
];

$sumOfSpeeds = 0;
$countOfCars=  0;
foreach ($carsSpeeds as $speed) {
    $sumOfSpeeds += $speed;
    $countOfCars++;
}

$averageSpeed = $sumOfSpeeds / $countOfCars;

echo 'Средняя скорость движения по трассе: ' . $averageSpeed;
?>
</body>
</html>