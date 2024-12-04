<?php
function sanitize_role($raw_role) {
    switch ($raw_role) {
        case "ADMIN":
            return "Administrador";
        case "NORMAL":
            return "Normal";
        default:
            return "Erro ao carregar cargo";
    }
}
?>