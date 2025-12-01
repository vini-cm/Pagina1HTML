<?php
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: listar_usuario.php");
    exit;
}
if (
    !isset($_POST["id"]) ||
    !isset($_POST["nome"]) ||
    !isset($_POST["login"]) ||
    !isset($_POST["senha"])
) {
    header("Location: editar_usuario.php?error=faltando_dados");
    exit;
}
require_once "conecxao.php"; 
$id = $_POST["id"];
$nome = $_POST["nome"];
$login = $_POST["login"];
$senha = $_POST["senha"];
if (update_usuario($id, $nome, $login, $senha)) {
    header("Location: listar_usuario.php?success=atualizado");
    exit;
} else {
    header("Location: editar_usuario.php?id=$id&error=erro_atualizar");
    exit;
}
?>

