<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
        for ($i = 0; $i < 5; $i++) {
            echo "$i<br>";
        }
        echo "<br>";

        $i = 0;
        while ($i <= 5) {
            echo $i++ . "<br>";
        }
        echo "<br>";

        $i = 0;
        do {
            echo $i++ . "<br>";
        } while ($i < 5);
    ?>
</body>
</html>