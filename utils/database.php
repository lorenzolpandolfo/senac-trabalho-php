<?php
$host = 'localhost:3306';
$dbname = 'lojubanco';
$db_username = 'user';
$db_password = '123456';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $db_username, $db_password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    echo "Erro ao conectar: " . $e->getMessage();
}
?>