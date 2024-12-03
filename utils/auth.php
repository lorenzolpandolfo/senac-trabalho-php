<?php

include "database.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    print_r($_POST);
    
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $password = filter_input(INPUT_POST, 'senha');

    // register_user($pdo, "teste", $email, $password);
    $user = login_user($pdo, $email, $password);
    
    if ($user) {
        session_start();
        $_SESSION['user'] = $user;
        header('Location: dashboard.php');
        exit;
    }
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
            if (password_verify($password, $user['password'])) {
                echo "Login realizado com sucesso!";
                return $user;
            } else {
                echo "Senha incorreta.";
                return null;
            }
        } else {
            echo "Usuário não encontrado.";
            return null;
        }
    } catch (PDOException $e) {
        echo "Erro ao executar a operação: " . $e->getMessage();
        return null;
    }
}

?>