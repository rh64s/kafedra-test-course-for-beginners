<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Переменные в PHP</title>
</head>
<body>
<h1>Пример встраивания PHP в HTML</h1>
<p>С помощью функции var_dump() получите результаты следующих выражений</p>
<?php
echo "!1 = "; var_dump(!1); echo "<br>";
echo "!0 = "; var_dump(!0); echo "<br>";
echo "!true = "; var_dump(!true); echo "<br>";
echo "2 && 3 = "; var_dump(2 && 3); echo "<br>";
echo "5 && 0 = "; var_dump(5 && 0); echo "<br>";
echo "3 || 0 = "; var_dump(3 || 0); echo "<br>";
echo "5 / 1 = "; var_dump(5 / 1); echo "<br>";
echo "1 / 5 = "; var_dump(1 / 5); echo "<br>";
echo "5 + '5string' = "; var_dump(5 + '5string'); echo "<br>";
echo "'5' == 5 = "; var_dump('5' == 5); echo "<br>";
echo "'05' == 5 = "; var_dump('05' == 5); echo "<br>";
echo "'05' == '5' = "; var_dump('05' == '5'); echo "<br>";
?>
</body>
</html>