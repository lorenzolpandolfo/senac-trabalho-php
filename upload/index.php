<?php

include "../utils/protect.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $uploadDir = 'uploads/users/';
        
        $fileTmpPath = $_FILES['image']['tmp_name'];
        $fileName = basename($_FILES['image']['name']);
        $fileSize = $_FILES['image']['size'];
        $fileType = mime_content_type($fileTmpPath);

        $allowedTypes = ['image/png', 'image/jpeg', 'image/jpg'];

        if (!in_array($fileType, $allowedTypes)) {
            die("Erro: Apenas arquivos PNG, JPG ou JPEG são permitidos.");
        }

        $uniqueFileName = uniqid() . '-' . $fileName;

        $destination = $uploadDir . $uniqueFileName;

        if (move_uploaded_file($fileTmpPath, $destination)) {
            echo "Upload realizado com sucesso! Arquivo salvo em: $destination";
            update_user_pfp_path("upload/" . $destination);
        } else {
            echo "Erro ao salvar o arquivo.";
        }
    } else {
        echo "Erro: Nenhuma imagem foi enviada ou houve um problema no upload.";
    }
} else {
    echo "Erro: Requisição inválida.";
}

function update_user_pfp_path($new_path) {
    include "database";

    $_SESSION["user"]["pfp_path"] = $new_path;

    include "../utils/update_user.php";

    echo $_SESSION["user"];
}