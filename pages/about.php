<?php
include "utils/constants.php";

$message = get_content("ABOUT") ?? $DEFAULT_ABOUT_US_MESSAGE;
?>

<section class="page about" id="about">
    <div class="about-left">
        <span class="title">Sobre nós</span>
        <span class="description"><?php echo htmlspecialchars($message); ?></span>
    </div>
    <img src="assets/images/about.svg" draggable="false">
</section>