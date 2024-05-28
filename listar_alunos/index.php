<?php
    $servername = "localhost";
    $username = "root";
    $password = ""; # Colocar senha do banco de dados, se tiver 
    $dbname = "escola";

    # Criar conexão
    $conn = new mysqli($servername, $username, $password, $dbname);

    # Verificar conexão
    if ($conn->connect_error) {
        die("Conexão falhou: " . $conn->connect_error);
    }

    # Consultar dados
    $sql = "SELECT nome, ra, idade FROM Alunos";
    $result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tabela: Alunos</title>
        <link rel="stylesheet" href=style.css>
    </head>
    <body>
        <table border='1' width='100%'>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>RA</th>
                    <th>Idade</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    if ($result->num_rows > 0) {
                        # Output dos dados de cada linha
                        foreach ($result as $row) {
                            echo "<tr>";
                                echo "<td>" . $row["nome"] . "</td>";
                                echo "<td>" . $row["ra"] . "</td>";
                                echo "<td>" . $row["idade"] . "</td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan = '3'>Nenhum aluno encontrado</td></tr>";
                    }
                    $conn->close();
                ?>
            </tbody>
        </table>        
    </body>
</html>