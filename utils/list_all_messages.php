<?php
include "../utils/protect.php";

function get_all_messages() {
    include "database.php";

    try {
        $stmt = $pdo->prepare("SELECT * FROM message");
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo "Erro ao buscar mensagens: " . $e->getMessage();
        return [];
    }
}
?>