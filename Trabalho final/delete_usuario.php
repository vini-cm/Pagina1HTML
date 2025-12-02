
<?php
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: listar_usuario.php");
    exit;
}

if (!isset($_POST["id"])) {
    die("ID do usuário não informado!");
}

require_once "conecxao.php";

$id = $_POST["id"];

if (delete_usuario($id)) {
    header("Location: listar_usuario.php?msg=usuario_excluido");
    exit;
} else {
    echo "Erro ao excluir usuário!";
}
