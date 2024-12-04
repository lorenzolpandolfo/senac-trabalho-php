<?php

function register_user($fullName, $email, $password, $role) {
    include "database.php";

    try {
        $stmt = $pdo->prepare("INSERT INTO user (full_name, email, password, role) VALUES (:full_name, :email, :password, :role)");
        $stmt->bindParam(':full_name', $fullName);
        $stmt->bindParam(':email', $email);

        $userRole = ($role === "on") ? "ADMIN" : "NORMAL";
        $stmt->bindParam(':role', $userRole);

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
?>