<div class="dashboard-section">
    <span class="title">Meu perfil</span>
    <div class="dashboard-center">
        <div class="top-div">
            <?php
                echo "<img src='{$_SESSION['user']['pfp_path']}' alt='user profile'>";
            ?>
            <input type="button" value="upload" class="btn secondary-button small-button">
        </div>
        <div>
            <div>
                <input type="button" value="editar" class="btn secondary-button small-button">
                <?php
                    echo "<span>{$_SESSION['user']['full_name']}</span>";
                ?>
            </div>
            <div>
                <input type="button" value="editar" class="btn secondary-button small-button">
                <?php
                    echo "<span>{$_SESSION['user']['email']}</span>";
                ?>
            </div>
            <div>
                <input type="button" value="editar" class="btn secondary-button small-button">
                <span>Administrador</span>    
            </div>
        </div>
        <button type="submit" class="btn primary-button big-button">confirmar</button>
    </div>
</div>