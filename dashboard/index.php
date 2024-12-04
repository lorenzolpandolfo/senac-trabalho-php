<?php
    include "../utils/protect.php";
    include "../utils/constants.php";
    session_start();

    $sections = [
        "profile" => "sections/profile.php",
        "users" => "sections/users.php",
    ];

    if (!isset($_SESSION["dashboard_section"])) {
        $_SESSION["dashboard_section"] = $DEFAULT_DASHBOARD_SECTION;
    }

    $section = $_SESSION["dashboard_section"];
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
            include $sections[$section];
        ?>
    </main>
    <?php
        include '../elements/footer.php';
    ?>
</body>
</html>