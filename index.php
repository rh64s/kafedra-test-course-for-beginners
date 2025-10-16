<?php
require __DIR__ . '/auth.php';
$login = getUserLogin();
$files = scandir(__DIR__ . '/uploads');
$links = [];
foreach ($files as $fileName) {
    if ($fileName === '.' || $fileName === '..') {
        continue;
    }
    $links[] = 'http://myproject.loc/uploads/' . $fileName;
}
?>
<html>
<head>
    <title>Фотоальбом</title>
</head>
<body>
<?php if ($login === null): ?>
    <a href="/login.php">Авторизуйтесь</a>
<?php else: ?>
    <?php
    $files = scandir(__DIR__ . '/uploads');
    $links = [];
    foreach ($files as $fileName) {
        if ($fileName === '.' || $fileName === '..') {
            continue;
        }
        $links[] = 'http://mysite.loc/uploads/' . $fileName;
    }

    foreach ($links as $link):?>
        <a href="<?= $link ?>"><img src="<?= $link ?>" alt="Фото" height="80px"></a>
    <?php endforeach; ?>

    <br>
    Добро пожаловать, <?= $login ?>
    <br>
    <a href="/logout.php">Выйти</a>
    <br>
    <a href="upload.php">Загрузить фото</a>
<?php endif; ?>
</body>
</html>
