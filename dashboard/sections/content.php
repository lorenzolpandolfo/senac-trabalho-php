<?php
include "../utils/get_content.php";

$msg_homepage = get_content("HOME");
$msg_about = get_content("ABOUT");
$msg_services = get_content("SERVICES");

echo $message;
?>

<div class="dashboard-section">
    <span class="title">Conteúdo</span>
    <div class="content-list">
        <form action="utils/add_content.php" method="post">
            <div class="content">
                <span class="subtitle">Homepage</span>
                <textarea name="new_content_message"><?php echo htmlspecialchars($msg_homepage); ?></textarea>
                <input type="hidden" name="new_content_location" value="HOME">
                <button type="submit" class="btn primary-button">confirmar</button>
            </div>
        </form>
        <form action="utils/add_content.php" method="post">
            <div class="content">
                <span class="subtitle">Sobre</span>
                <textarea name="new_content_message"><?php echo htmlspecialchars($msg_about); ?></textarea>
                <input type="hidden" name="new_content_location" value="ABOUT">
                <button type="submit" class="btn primary-button">confirmar</button>
            </div>
        </form>
        <form action="utils/add_content.php" method="post">
            <div class="content">
                <span class="subtitle">Serviços</span>
                <textarea name="new_content_message"><?php echo htmlspecialchars($msg_services); ?></textarea>
                <input type="hidden" name="new_content_location" value="SERVICES">
                <button type="submit" class="btn primary-button">confirmar</button>
            </div>
        </form>
    </div>
</div>