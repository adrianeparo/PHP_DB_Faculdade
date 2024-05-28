<?php
    session_start();
    if(!isset($_SESSION['user_id'])){
        header("Location: login.php");
        exit();
    }

    require "include/config.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $ra = $_POST['ra'];
        $idade = $_POST['idade'];

        $parametro = $conexao->prepare("UPDATE alunos SET nome = ?, ra = ?, idade = ? WHERE id = ?");
        $parametro->bind_param("ssii",$nome,$ra,$idade,$id);
        $parametro->execute();
        header("Location: index.php");
    }
    $id = $_GET['id'];
    $parametro = $conexao->prepare("SELECT * FROM alunos WHERE id = ?");
    $parametro->bind_param("i",$id);
    $parametro->execute();
    $restultado = $parametro->get_result();
    $aluno = $restultado->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Editar aluno</title>
</head>
<body>
    <h2>Editar Aluno</h2>
    <form method="post">
        <input type="hidden" name="id" value="<?php echo $aluno['id']; ?>">
        <input type="text" name="nome" required value="<?php echo $aluno['nome']; ?>">
        <input type="text" name="ra" required value="<?php echo $aluno['ra'];?>">
        <input type="number" name="idade" required value="<?php echo $aluno['idade'];?>">
        <button type="submit">Salvar</button>
    </form>
</body>
</html>