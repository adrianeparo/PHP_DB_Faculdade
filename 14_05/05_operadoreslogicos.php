<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $casado = true;
        $rico = true;

        if ($casado == false && $rico == true) {
            echo "Bom partido<br>";
        } elseif ($casado == true && $rico == true) {
            echo "Já ajuda<br>";
        } elseif ($casado == true && $rico == false) {
            echo "Pior dos mundos<br>";
        } else {
            echo "Serve esse aí mesmo<br>";
        }


    ?>
    
</body>
</html>