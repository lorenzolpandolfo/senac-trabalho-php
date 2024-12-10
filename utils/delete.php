<?php

    include "../utils/protect.php";

    session_start();

    if (isset($_POST["userId_to_delete"])) {

        $deleted = delete_user($_POST["userId_to_delete"]);

        echo $deleted;

        if ($deleted) {
            header("Location: /dashboard");
        }

        echo "deu ruim";
    }

    function delete_user($userId) {
        include "../utils/database.php";
    
        try {
            $stmt = $pdo->prepare("DELETE FROM user WHERE id = :id");
            $stmt->bindValue(':id', $userId, PDO::PARAM_INT);
            $stmt->execute();
    
            return $stmt->rowCount() > 0;
        } catch (PDOException $e) {
            echo "Erro ao deletar o usuário: " . $e->getMessage();
            return false;
        }
    }
?>