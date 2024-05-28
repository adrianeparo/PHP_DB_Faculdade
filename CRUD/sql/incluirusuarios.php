<?php
require '../include/config.php';

// Senha em texto plano
$senhaAdmin = 'admin123';
$senhaUser = 'user123';

// Gerar hash das senhas
$hashAdmin = password_hash($senhaAdmin, PASSWORD_DEFAULT);
$hashUser = password_hash($senhaUser, PASSWORD_DEFAULT);

// Inserir usuários no banco de dados
$stmt = $conn->prepare("INSERT INTO usuarios (nome, email, senha) VALUES (?, ?, ?)");

// Inserir Admin
$stmt->bind_param("sss", $nome, $email, $senha);
$nome = 'Admin';
$email = 'admin@admin.com';
$senha = $hashAdmin;
$stmt->execute();

// Inserir User
$nome = 'User';
$email = 'user@user.com';
$senha = $hashUser;
$stmt->execute();

echo "Usuários inseridos com sucesso!";
?>
