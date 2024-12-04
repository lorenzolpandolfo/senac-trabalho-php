<?php
    include "../utils/protect.php";
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@100..800&display=swap" rel="stylesheet">
    <title>Techio | Painel Administrativo</title>
</head>
<body>
    <?php
        include "elements/header.php";
        ?>
    <main class="center-container dsb-spacing dashboard">
        <?php
            include "elements/sidebar.php";
            include "sections/profile.php";
        ?>
    </main>
    <?php
        include '../elements/footer.php';
    ?>
</body>
</html>