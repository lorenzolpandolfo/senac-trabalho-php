<?php
include "utils/get_content.php";
include "utils/constants.php";

$message = get_content("HOME") ?? $DEFAULT_HOME_MESSAGE;
?>

<section class="page home" id="home">
    <div class="home-left">
        <span class="title"><?php echo htmlspecialchars($message); ?></span>
        
        <a href="#about" class="btn primary-button">conhecer</a>
        <a href="#contact" class="btn secondary-button">entre em contato</a>
    </div>
    <img src="assets/images/home.svg" draggable="false">
</section>