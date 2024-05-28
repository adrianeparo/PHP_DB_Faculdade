<?php
session_start();//prepara o php para iniciar  uma sessão (nova ou já existente)
require 'include/config.php';//inclui o config.php para conexao com o banco

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $parametro = $conexao->prepare("SELECT * FROM usuarios WHERE email = ?");
    $parametro->bind_param("s",$email);
    $parametro->execute();

    $resultado = $parametro->get_result();
    if ($resultado->num_rows === 1){
        $user = $resultado->fetch_assoc();
        if (password_verify($senha,$user['senha'])){
            $_SESSION['user_id'] = $user['id'];
            header('Location: index.php');
            exit();
        }
        else{
            $error = "Senha incorreta.";
        }
    }
    else{
        $error = "Usuario não encontrado";
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <h2>Acessar o Sistema - Login</h2>
    <?php 
        if (isset($error)) {
            echo "<p>$error</p>";
        }
    ?>
    <form method="post">
        <input type="email" name="email" required placeholder="E-mail">
        <input type="password" name="senha" required placeholder="Senha">
        <button type="submit">Acessar o Sistema</button>
    </form>
    <a href="forgot_password.php">Esqueceu a senha?</a>
</body>
</html>