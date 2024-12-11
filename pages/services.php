<?php
include "utils/constants.php";

$message = get_content("SERVICES") ?? $DEFAULT_SERVICES_MESSAGE;
?>

<section class="page services" id="services">
    <div class="services-left">
        <span class="title">Serviços</span>
        <span class="subtitle"><?php echo htmlspecialchars($message); ?></span>
    </div>
    <img src="assets/images/services.svg" draggable="false">
</section>