<?php
$login = !empty($_GET['login']) ? $_GET['login'] : '';
$password = !empty($_GET['password']) ? $_GET['password'] : '';

if ($login === 'admin') {
    if ($password === 'password') {
        $isAuthorized = [true, "Успешно"];
    } else {
        $isAuthorized = [false, "Неверный пароль"];
    }
} else {
    $isAuthorized = [false, "Неверный логин!"];
}
?>
<html>
<head>
    <title>Результат авторизации</title>
</head>
<body>
<p>
    <?= $isAuthorized[0] ? "Успешно прошли!" : $isAuthorized[1]?>
</p>
</body>
</html>
