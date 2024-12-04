<?php
include "utils/constants.php";
?>

<section class="page services" id="services">
    <div class="services-left">
        <span class="title">Serviços</span>
        <span class="subtitle">
            <?php
            echo isset($_SESSION) ? "mensagem dinamica" : $DEFAULT_SERVICES_MESSAGE;
            ?>
        </span>
    </div>
    <img src="assets/images/services.svg" draggable="false">
</section>