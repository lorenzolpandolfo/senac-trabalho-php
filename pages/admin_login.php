<?php
include "../utils/constants.php";
session_start();
?>

<section class="vertical-page admin-login" id="admin_login">
    <div class="center">
        <span class="title">Acessar painel administrativo</span>
    </div>
    <form action="../utils/auth.php" method="post" class="content">
        <input type="email" name="email" id="email" placeholder="email" required>
        <input type="password" name="password" id="password" placeholder="senha" required>
        <button type="submit" class="btn primary-button big-button">acessar</button>
        <?php
        if (isset($_SESSION["error"])) {
            echo "<span>" . htmlspecialchars($_SESSION["error"], ENT_QUOTES, 'UTF-8') . "</span>";
        }
        ?>
    </form>


</section>