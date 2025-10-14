<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>1 часть домашнего задания</title>
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
<?php include("header.php");
echo "<div id=\"main\">";
        include("sidebar.php");
        include("content.php");
echo "</div>";
include("footer.php");
?>
</body>
</html>