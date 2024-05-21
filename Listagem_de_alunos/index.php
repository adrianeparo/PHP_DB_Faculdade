<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "escola";

# Criar Conexão
$conn = new mysqli($servername, $username, $password, $dbname);

# Verificar conexão
if($conn->connect_error){
    die("Conexão falhou: " .$conn->connect_error);
}
else{
    echo "Conectado com sucesso!";
}

//consultar dados 
$sql = "SELECT nome, ra, idade FROM alunos";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela de Alunos</title>
</head>
<body>
    <table border="1" width="100%">
        <thead>
            <tr>
                <th>nome</th>
                <th>RA</th>
                <th>idade</th>
            </tr>
        </thead>
        <tbody>
            <?php
                if($result->num_rows > 0){
                    // Output dos dados de cada linha
                    foreach($result as $row){
                        echo"<tr>";
                        echo"<td>" . $row["nome"] . "</td>";
                        echo"<td>" . $row["ra"] . "</td>";
                        echo"<td>" . $row["idade"] . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='3'>Nenhum aluno encontrado</td></tr>";
                }
                $conn->close();
                ?>
        </tbody>
    </table>
    
</body>
</html>