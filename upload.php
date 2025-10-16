<?php
if (!empty($_FILES['attachment'])) {
    $file = $_FILES['attachment'];
    $filePath = $file['tmp_name'];

    $srcFileName = $file['name'];
    $newFilePath = __DIR__ . '/uploads/' . $srcFileName;

    $allowedSize = 1024 * 1024 * 8;
    $allowedWidth = 1280;
    $allowedHeight = 720;
    $imageSizes = getimagesize($filePath);

    $allowedExtensions = ['jpg', 'png', 'gif'];


    $extension = pathinfo($srcFileName, PATHINFO_EXTENSION);
    if (!in_array($extension, $allowedExtensions)) {
        $error = 'Загрузка файлов с таким расширением запрещена!';
    } elseif ($imageSizes[0] > $allowedWidth || $imageSizes[1] > $allowedHeight) {
        $error = "Допустимая ширина: $allowedWidth px; Допустимая высота: $allowedHeight px";
    }
    elseif ($file['error'] == 1 || $file['size'] > $allowedSize) {
        // php.ini: upload_max_filesize=5M
        $error = 'Вес файла не должен превышать 5Мб!';
    }
    elseif ($file['error'] !== UPLOAD_ERR_OK) {
        $error = 'Ошибка при загрузке файла.';
    } elseif (file_exists($newFilePath)) {
        $error = 'Файл с таким именем уже существует';
    } elseif (!move_uploaded_file($file['tmp_name'], $newFilePath)) {
        $error = 'Ошибка при загрузке файла';
    } else {
        $result = 'http://myproject.loc/uploads/' . $srcFileName;
    }
}
?>
<html>
<head>
    <title>Загрузка файла</title>
</head>
<body>
<?php if (!empty($error)): ?>
    <?= $error ?>
<?php elseif (!empty($result)): ?>
    <?= $result ?>
<?php endif; ?>
<br>
<form action="/upload.php" method="post" enctype="multipart/form-data">
    <input type="file" name="attachment">
    <input type="submit">
</form>
</body>
</html>