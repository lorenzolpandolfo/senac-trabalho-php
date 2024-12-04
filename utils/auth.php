<?php

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $password = filter_input(INPUT_POST, 'password');

    $user = login_user($email, $password);
    if ($user) {
        $_SESSION['user'] = $user;
        header('Location: /dashboard');
        exit;
    }
    header('Location: ../admin');
    exit;
}

function register_user($fullName, $email, $password) {
    include "database.php";

    try {
        $stmt = $pdo->prepare("INSERT INTO user (full_name, email, password) VALUES (:full_name, :email, :password)");
        $stmt->bindParam(':full_name', $fullName);
        $stmt->bindParam(':email', $email);

        $passwordHash = password_hash($password, PASSWORD_BCRYPT);
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

function login_user($email, $password) {
    include "database.php";

    try {
        $stmt = $pdo->prepare("SELECT * FROM user WHERE email = :email");
        $stmt->bindParam(':email', $email);
        $stmt->execute();

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user) {
            if (password_verify($password, $user['password'])) {
                return $user;
            } else {
                $_SESSION['error'] = "Senha ou usuário incorretos";
                return null;
            }
        } else {
            $_SESSION['error'] = "Usuário não encontrado.";
            return null;
        }
    } catch (PDOException $e) {
        header('Location: /logout');
        
        return null;
    }
}
?>