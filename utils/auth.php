<?php

include "database.php";
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $password = filter_input(INPUT_POST, 'password');

    // register_user($pdo, "Lorenzo", $email, $password);
    $user = login_user($pdo, $email, $password);
    if ($user) {
        $_SESSION['user'] = $user;
        header('Location: /dashboard');
        exit;
    }
    header('Location: ../admin');
    exit;
}

function register_user($pdo, $fullName, $email, $password) {
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

function login_user($pdo, $email, $password) {
    try {
        $stmt = $pdo->prepare("SELECT * FROM user WHERE email = :email");
        $stmt->bindParam(':email', $email);
        $stmt->execute();

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user) {
            print_r($password);
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
        echo "Erro ao executar a operação: " . $e->getMessage();
        return null;
    }
}

?>