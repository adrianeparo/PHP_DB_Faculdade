<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--Condições-->
    <?php
            $idade = 18;
 
            # if...else
            if ($idade > 17) {
                echo "Maior de idade<br>";
            } else {
                echo "Menor de idade<br>";
            }
 
            $idade = 14;
 
            # if...elseif...eles
            if ($idade > 17) {
                echo "Profissional";
            } elseif ($idade >= 16) {
                echo "Jovem Aprendiz";
            } else {
                echo "Menor Aprendiz";
            }

            echo "<hr>";
 
            # Ternário
            $idade = 20;
            $status = ($idade >= 18) ? "Pode dirigir" : "Não pode dirigir";
            echo $status . "<hr>";
 
            # Switch
            $dia = 1;
 
            switch($dia) {
                case 1:
                    echo "Segunda-feira";
                    break;
                case 2:
                    echo "Terça-feira";
                    break;
                case 3:
                    echo "Quarta-feira";
                    break;
                case 4:
                    echo "Quinta-feira";
                    break;
                case 5:
                    echo "Sexta-feira";
                    break;
                default:
                    echo "Fim de semana";
            }
    ?>
    <br>
    <hr>
    <?php
        $casado = true;
        $rico = true;
 
        if ($casado == false && $rico == true) {
            echo "Bom partido<hr>";
        } elseif ($casado == true && $rico == true) {
            echo "Já ajuda<hr>";
        } elseif ($casado == true && $rico == false) {
            echo "Pior dos mundos<hr>";
        } else {
            echo "Serve esse aí mesmo<hr>";
        }
    ?>
</body>
</html>