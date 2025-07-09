<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Таблица умножения</title>
    <style>
        table { border-collapse: collapse; }
        td { border: 1px solid #000; padding: 8px; text-align: center; }
    </style>
</head>
<body>

<h2>Таблица умножения 1–10</h2>
<table>
    <?php
    for ($i = 1; $i <= 10; $i++) {
        echo "<tr>";
        for ($j = 1; $j <= 10; $j++) {
            echo "<td>" . ($i * $j) . "</td>";
        }
        echo "</tr>";
    }
    ?>
</table>

</body>
</html>
