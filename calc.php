<?php
if (empty($_GET)) {
    return 'Ничего не передано!';
}
if (empty($_GET['operation'])) {
    return 'Не передана операция';
}
if ((empty($_GET['x1']) && $_GET['x1'] != 0)
    || empty($_GET['x2']) && $_GET['x2'] != 0) {
    return 'Не переданы аргументы';
}
$x1 = $_GET['x1'];
$x2 = $_GET['x2'];

if(!(is_numeric($x1) && is_numeric($x2))) {
    return "Впишите числа (пример: 1, 1.5)";
}

$expression = $x1 . ' ' . $_GET['operation'] . ' ' . $x2 . ' = ';
switch ($_GET['operation']) {
    case '+':
        $result = $x1 + $x2;
        break;
    case '-':
        $result = $x1 - $x2;
        break;
    case '*':
        $result = $x1 * $x2;
        break;
    case '/':
        if ($x2 == 0) {
            return "на ноль делить нельзя!";
        }
        $result = $x1 / $x2;
        break;
    default:
        return 'Операция не поддерживается';
}
return $expression . $result;