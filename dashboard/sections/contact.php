<?php
session_start();
include "../utils/list_all_messages.php";
$all_messages = get_all_messages();

?>

<div class="dashboard-section">
    <span class="title">Contato</span>
    <div class="messages-list">
        <form action="" method="GET">
            <?php
                if (!empty($all_messages)) {
                    foreach ($all_messages as $message) {
                        $subject = htmlspecialchars($message['subject']);
                        $content = htmlspecialchars($message['content']);
                        echo "<div class='message'>";
                        echo "<span class='subtitle'>$subject</span>";
                        echo "<span>$content</span>";
                        echo "</div>";
                    }
                }
                else {
                    echo "<span>Nenhuma mensagem no momento</span>";
                }
            ?>
        </form>
    </div>
</div>