<?php
include "../utils/protect.php";

function get_all_admin() {
    include "database.php";

    try {
        $stmt = $pdo->prepare("SELECT * FROM user WHERE role = :role");
        $stmt->bindValue(':role', 'ADMIN');
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo "Erro ao buscar administradores: " . $e->getMessage();
        return [];
    }
}
?>