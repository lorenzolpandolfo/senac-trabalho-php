<?php
session_start();
include "../utils/list_all_admin.php";
$_SESSION["admins"] = get_all_admin();

?>

<div class="dashboard-section">
    <span class="title">Usuários</span>
    <div class="users">
        <form action="" method="GET">
            <div class="left-div">
                <span class="subtitle">Administradores</span>
                <div class="admins-list">
                    <?php
                        if (!empty($_SESSION["admins"])) {
                            foreach ($_SESSION["admins"] as $admin) {
                                $fullName = htmlspecialchars($admin['full_name']);
                                $pfpPath = htmlspecialchars($admin['pfp_path']);

                                echo "<div class='admin-item'>";
                                echo "<img src='$pfpPath' alt='Foto de $fullName' class='admin-img'>";
                                echo "<span class='admin-name'>$fullName</span>";
                                echo "</div>";
                            }
                        } else {
                            echo "<div>Nenhum administrador encontrado.</div>";
                        }
                    ?>
                </div>
            </div>
        </form>
        <div class="right-div">
            <span class="subtitle">Cadastrar</span>
            <form action="/register" method="POST">
                <div class="inputs">
                    <input class="dashboard-input" type="text" name="full_name" id="full_name" placeholder="nome completo" required>
                    <input class="dashboard-input" type="email" name="email" id="email" placeholder="email" required>
                    <input class="dashboard-input" type="password" name="password" id="password" placeholder="senha" required>
                    <div>
                        <input type="checkbox" name="is_admin" id="is_admin">
                        <label for="is_admin">Administrador</label>
                    </div>
                    <button type="submit" class="btn primary-button big-button">confirmar</button>
                </div>
            </form>
        </div>
    </div>
</div>