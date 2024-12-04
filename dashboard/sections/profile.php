<div class="dashboard-section">
    <span class="title">Meu perfil</span>
    <form action="/utils/update_user.php" method="POST" class="dashboard-center">
        <div class="top-div">
            <?php
                echo "<img src='{$_SESSION['user']['pfp_path']}' alt='user profile'>";
            ?>
            <input type="button" value="upload" class="btn secondary-button small-button">
        </div>
        <div>
            <div>
                <?php
                    echo "<input class='dashboard-input' type='text' name='full_name' id='full-name' value='{$_SESSION['user']['full_name']}'>";
                ?>
            </div>
            <div>
                <?php
                    echo "<span class='profile-data'>{$_SESSION['user']['email']}</span>";
                ?>
            </div>
            <div>
                <?php
                    include "../utils/sanitizer.php";
                    $role = sanitize_role($_SESSION['user']['role']);
                    echo "<span class='profile-data'>$role</span>";
                ?>
            </div>
        </div>
        <button type="submit" class="btn primary-button big-button">confirmar</button>
    </form>
</div>