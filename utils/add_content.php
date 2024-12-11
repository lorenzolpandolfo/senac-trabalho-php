<?php

if (isset($_POST["new_content_location"])) {
    add_content($_POST["new_content_location"], $_POST["new_content_message"]);
}

header("Location: /dashboard");

function add_content($location, $message) {
    include "database.php";

    try {
        $query = "INSERT INTO content (location, message) VALUES (:location, :message)";
        $stmt = $pdo->prepare($query);

        $stmt->bindParam(':location', $location, PDO::PARAM_STR);
        $stmt->bindParam(':message', $message, PDO::PARAM_STR);

        $stmt->execute();

        return true;
    } catch (PDOException $e) {
        error_log("Erro ao adicionar conteúdo: " . $e->getMessage());
        return false;
    }
}
?>