<?php
session_start();
if (!isset($_SESSION['user_id'])){
    header("Location: login.php");
    exit();
}

require 'include/config.php';

$resultado = $conexao->query("SELECT * FROM alunos");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Alunos</title>
    <link rel="stylesheet" href="css/estilo.css">
    <script>
        function confirmarExclusao(event, nome) {
            if (!confirm(`Tem certeza que deseja excluir o aluno ${nome}?`)) {
                event.preventDefault();
            }
        }
    </script>
</head>
<body>
    <h1>Listagem de Alunos Cadastrados</h1>
    <a href="logout.php">Sair do Sistema - Logout</a>
    <a href="create.php">Adicionar um aluno</a>
    <table border="1" width="100%">
        <thead>
            <tr>
                <th>RA</th>
                <th>Nome</th>
                <th>Idade</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php while($row = $resultado->fetch_assoc()): ?>
                <tr>
                    <td><?php echo $row['ra']; ?> </td>
                    <td><?php echo $row['nome']; ?> </td>
                    <td><?php echo $row['idade']; ?> </td>
                    <td>
                        <a href="edit.php?id=<?php echo $row['id']; ?>">Editar</a>
                        <a href="delete.php?id=<?php echo $row['id']; ?>" onclick="confirmarExclusao(event, '<?php echo htmlspecialchars($row['nome']); ?>')">Excluir</a>
                    </td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</body>
</html>