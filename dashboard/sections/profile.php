<div class="dashboard-section">
    <span class="title">Meu perfil</span>
    <div class="top-div">
        <form action="../upload" method="POST" enctype="multipart/form-data" class="profile-image">
            <label for="image">
                <?php
                    echo "<img src='{$_SESSION['user']['pfp_path']}' alt='user profile' class='upload-image btn' draggable='false'>";
                    ?>
            </label>
            <input type="file" name="image" id="image" accept="image/png, image/jpeg, image/jpg" required style="display: none;">
            <button type="submit" class="btn secondary-button small-button">Fazer upload</button>
        </form>

        <form action="../utils/update_user.php" method="POST" class="dashboard-center">
            <div class="user-data">
                <?php
                echo "<input class='dashboard-input' type='text' name='full_name' id='full-name' value='{$_SESSION['user']['full_name']}'>";
                echo "<span class='profile-data'>{$_SESSION['user']['email']}</span>";
                include "../utils/sanitizer.php";
                $role = sanitize_role($_SESSION['user']['role']);
                echo "<span class='profile-data'>$role</span>";
                ?>
            </div>
            <button type="submit" class="btn primary-button big-button">confirmar</button>
        </form>
    </div>
        
</div>