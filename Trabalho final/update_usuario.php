
<?php
require_once "conecxao.php";

if ($_SERVER["REQUEST_METHOD"] !== "POST" || !isset($_POST['id'])) {
    header("Location: listar_usuario.php");
    exit;
}

$id = $_POST['id'];

if (delete_usuario($id)) {
    header("Location: listar_usuario.php?success=apagado");
} else {
    header("Location: listar_usuario.php?error=erro_excluir");
}
exit;
?>
