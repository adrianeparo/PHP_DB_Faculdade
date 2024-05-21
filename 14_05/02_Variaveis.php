<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variaveis</title>

</head>
<body>
     <!--Variaveis-->
     <?php
        $nome ="Adriane";
        $sobrenome = "Paro";
        $nomeCompleto = $nome . " " . $sobrenome;
        echo "Olá, " . $nomeCompleto . "!";
    ?>
    <br>
    <hr>
     <!--Concatenação-->
    <?php
      $mensagem = "Ola, ";
      $mensagem .= $nome;
      echo $mensagem;
    ?>  
</body>
</html>