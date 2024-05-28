<?php
    session_start();
    if (!isset($_SESSION['user_id'])){
        header("Location: login.php");
        exit();
    }

    require "include/config.php";

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
    
        // Prepare a consulta para deletar o aluno
        $parametro = $conexao->prepare("DELETE FROM alunos WHERE id = ?");
        $parametro->bind_param("i", $id);
    
        if ($parametro->execute()) {
            echo "Aluno deletado com sucesso.";
        } else {
            echo "Erro ao deletar aluno: " . $parametro->error;
        }
    
        header("Location: index.php");
        exit();
    } else {
        echo "ID do aluno não fornecido.";
        exit();
    }
?>