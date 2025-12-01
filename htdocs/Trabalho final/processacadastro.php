<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    if ( !isset($_POST["nome"]) ||
        !isset($_POST["login"]) ||
        !isset($_POST["senha"])
    ) {
        header("Location: cadastro_usuario.php?error=faltando_dados");
        exit;
    }

    require_once "conecxao.php";

    cadastro_usuario($_POST["nome"], $_POST["login"], $_POST["senha"]);
    exit;
} else {
    header("Location: cadastro_usuario.php");
    exit;
}
?>
