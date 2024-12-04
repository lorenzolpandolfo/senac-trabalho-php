<?php
include "utils/constants.php";
?>

<section class="page about" id="about">
    <div class="about-left">
        <span class="title">Sobre nós</span>
        <span class="description">
            <?php
            echo isset($_SESSION) ? "mensagem dinamica" : $DEFAULT_ABOUT_US_MESSAGE;
            ?>
        </span>
    </div>
    <img src="assets/images/about.svg" draggable="false">
</section>