<?php
include "../utils/protect.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    if (!$subject && $message) {
        echo "dados invalidos";
    }
    
    if (!add_message($subject, $message)) {
        echo "erro ao enviar a mensagem";
    }

    header("Location: /");
    exit();
}

function add_message($subject, $content) {
    include "database.php";

    try {
        $stmt = $pdo->prepare("INSERT INTO message (subject, content) VALUES (:subject, :content)");
        $stmt->bindValue(':subject', $subject, PDO::PARAM_STR);
        $stmt->bindValue(':content', $content, PDO::PARAM_STR);
        $stmt->execute();

        return $stmt->rowCount() > 0;
    } catch (PDOException $e) {
        echo "Erro ao adicionar mensagem: " . $e->getMessage();
        return false;
    }
}
?>
