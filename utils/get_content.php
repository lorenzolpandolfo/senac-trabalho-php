<?php

function get_content($location) {
    include "database.php";

    try {
        $query = "SELECT message FROM content WHERE location = :location ORDER BY id DESC LIMIT 1";
        $stmt = $pdo->prepare($query);

        $stmt->bindParam(':location', $location, PDO::PARAM_STR);

        $stmt->execute();

        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        return $result['message'] ?? null;
    } catch (PDOException $e) {
        error_log("Erro ao buscar conteúdo: " . $e->getMessage());
        return null;
    }
}

?>