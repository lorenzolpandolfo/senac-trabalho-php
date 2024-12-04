<?php

include "../utils/constants.php";

session_start();

$new_name = $_POST["full_name"];

$u = $_SESSION["user"];

$u["full_name"] = $new_name ?: $u["full_name"];

update_user($u);
$_SESSION["user"] = get_user_data();

header('Location: /dashboard');

function update_user($user) {
    include "database.php";

    if (!isset($user['email']) || !isset($user['full_name']) || !isset($user['pfp_path']) || !isset($user['id'])) {
        return false;
    }

    try {
        $stmt = $pdo->prepare(
            "UPDATE user 
            SET full_name = :full_name, pfp_path = :pfp_path
            WHERE id = :id"
        );

        $stmt->bindParam(':full_name', $user['full_name']);
        $stmt->bindParam(':pfp_path', $user['pfp_path']);
        $stmt->bindParam(':id', $user['id']);

        $stmt->execute();

        return ($stmt->rowCount() > 0);

    } catch (PDOException $e) {
        echo "Erro ao executar a operação: " . $e->getMessage();
        return false;
    }
}

function get_user_data() {
    include "database.php";

    try {
        $stmt = $pdo->prepare(
            "SELECT * FROM user 
            WHERE id = :id"
        );

        $stmt->bindParam(':id', $_SESSION['user']['id']);

        $stmt->execute();
        
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        return $user;

    } catch (PDOException $e) {
        echo "Erro ao executar a operação: " . $e->getMessage();
        return $_SESSION["user"];
    }
}
?>
