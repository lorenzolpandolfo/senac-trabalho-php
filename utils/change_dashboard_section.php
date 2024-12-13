<?php
session_start();
$_SESSION["dashboard_section"] = $_POST["section_to"];
header("Location: ../dashboard");
?>