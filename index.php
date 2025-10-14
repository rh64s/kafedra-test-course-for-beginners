<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>3. Основы разработки</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }
        header {
            display: flex;
            flex-direction: row;
            gap:20px;
            background-color: aliceblue;
            padding: 10px 20px;
        }
        #main {
            display: grid;
            grid-template-columns: 100px 1fr;
            gap: 20px;
        }
        aside {
            border-right: 2px solid black;
        }
        footer {
            padding: 20px;
            background-color: cadetblue;
        }
    </style>
</head>
<body>
<?php
$header_var = "header variable";
$sidebar_var = "sidebar variable";
$footer_var = "footer variable";
$content_var = "content variable";
include __DIR__ . "/header.php" ;
echo "<div id=\"main\">";
        require_once __DIR__ . "/sidebar.php" ;
        include __DIR__ . "/content.php" ;
echo "</div>";
include_once __DIR__ . "/footer.php" ;
?>
</body>
</html>