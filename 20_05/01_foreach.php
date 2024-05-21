<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foreach</title>
</head>
<body>

    <?php
        $listaCores = array("Branco", "Amarelo", "Azul", "Rosa", "Verde");
        foreach($listaCores as $cor){
            echo $cor . "<br>";
        }
        echo "<br>";

        $listaFrutas = array("maça", "banana", "laranja");
        foreach($listaFrutas as $fruta){
            echo $fruta . "<br>";
        }
        echo "<br>";

        $numeros = array(1,2,3,4,5,6,7,8,9,10);
        foreach($numeros as $num){
                echo $num . "<br>";

        }
        echo "<br>";

        foreach($numeros as &$num){
            $num *= 2;
            echo $num . "<br>";
        }
        echo "<br>";

        $listaAnimais = array("cachoro", "gato", "tartaruga");
        foreach($listaAnimais as $indice => $animal){
            echo "O animal no índice $indice é um $animal.<br>";
        }
        echo "<br>";

        echo "<table border = '1'>";
        $cadastro = array(
            array("RA", "NOME", "IDADE"),
            array("1000", "Antônio", "11"),
            array("2000", "Bruno", "10"),
            array("3000", "Cássio", "14"),
            array("4000", "Danila", "12")
        );
        foreach($cadastro as $linha){
            echo "<tr>";
            foreach($linha as $coluna){
                echo "<td>$coluna</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
        echo "<br>";



        echo "<table border = '1'>";
        $cadastro = array(
            array("RA", "NOME", "IDADE"),
            array("1000", "Antônio", "11"),
            array("2000", "Bruno", "10"),
            array("3000", "Cássio", "14"),
            array("4000", "Danila", "12")
        );
        foreach($cadastro as $chave => $linha){
            echo "<tr>";
            foreach($linha as $coluna){
                if($chave == 0){
                echo "<th>$coluna</th>";
                }
                else{
                    echo"<td>$coluna</td>";
                }
            }
            echo "</tr>";
        }
        echo "</table>";
    ?>
    
</body>
</html>