<?php
    if(!isset($_POST["nome"]) || !isset($_POST["login"]) || isset($_POST["senha"])){
        header("Location:cadastro_usuario.php?error=faltando_dados");
    }
    require_once "index.php";

    cadastro_usuario($_POST("nome"), $_POST["login"], $_POST["senha"]);
?>