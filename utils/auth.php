<?php

include "database.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    print_r($_POST);
    
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $senha = filter_input(INPUT_POST, 'senha');

    try {
        // Inserindo o usuário no banco de dados
        $stmt = $pdo->prepare("INSERT INTO user (full_name, email, password) VALUES (:full_name, :email, :password)");
        $stmt->bindParam(':full_name', $fullName);
        $stmt->bindParam(':email', $email);
        // Hash da senha para segurança
        $passwordHash = password_hash($senha, PASSWORD_BCRYPT);
        $stmt->bindParam(':password', $passwordHash);

        if ($stmt->execute()) {
            echo "Usuário registrado com sucesso!";
        } else {
            echo "Erro ao registrar o usuário.";
        }
    } catch (PDOException $e) {
        echo "Erro ao executar a operação: " . $e->getMessage();
    }
}



?>