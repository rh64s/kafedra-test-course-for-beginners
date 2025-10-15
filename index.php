<?php
$login = !empty($_GET['login']) ? $_GET['login'] : 'логин не передан!';
$password = !empty($_GET['password']) ? $_GET['password'] : 'пароль не передан!';
?>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>3. Основы разработки</title>
</head>
<body>
<form action="/login.php" method="GET">
    <label>
        Логин <input type="text" name="login">
    </label>
    <br>
    <label>
        Пароль <input type="password" name="password">
    </label>
    <br>
    <input type="submit" value="Войти">
</form>
</body>
</html>