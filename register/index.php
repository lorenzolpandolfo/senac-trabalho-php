<?php
    include "../utils/auth.php";

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
        $full_name = filter_input(INPUT_POST, 'full_name', FILTER_SANITIZE_SPECIAL_CHARS);
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        $password = filter_input(INPUT_POST, 'password');
    
        register_user($full_name, $email, $password);
        header('Location: ../admin');
        exit;
    }
?>