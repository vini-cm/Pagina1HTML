<link rel="stylesheet" href="style.css">
<?php
require_once "conecxao.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (!isset($_POST["id"], $_POST["nome"], $_POST["login"], $_POST["senha"])) {
        header("Location: editar_usuario.php?error=faltando_dados&id=" . $_POST['id']);
        exit;
    }
    $id = $_POST["id"];
    $nome = $_POST["nome"];
    $login = $_POST["login"];
    $senha = $_POST["senha"];

    if (update_usuario($id, $nome, $login, $senha)) {
        header("Location: listar_usuario.php?success=atualizado");
    } else {
        header("Location: editar_usuario.php?id=$id&error=erro_atualizar");
    }
    exit;
}
//////////////////////////////////
if (!isset($_GET['id'])) {
    header("Location: listar_usuario.php");
    exit;
}
//////////////////////volta se der errado o bagulho !lembrar
$id = $_GET['id'];
$usuario = get_usuario($id);
if (!$usuario) {
    header("Location: listar_usuario.php?error=usuario_nao_encontrado");
    exit;
}
////////////////////////////memo bagulho
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuário</title>
</head>
<body>
    <header>
        <h1>Edição de Usuário</h1>
    </header>

    <form action="editar_usuario.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $usuario['id']; ?>">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required><br><br>
        <label for="login">Login:</label>
        <input type="text" id="login" name="login"  required><br><br>
        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" required><br><br>
        <input type="submit" value="Salvar alterações">
    </form>

    <form action="delete_usuario.php" method="POST" onsubmit="return confirm('Realmente quer excluir?');">
        <input type="hidden" name="id" value="<?php echo $usuario['id']; ?>" class="btn">
        <input type="submit" value="Apagar usuário" class="btn">
    </form>

    <a href="listar_usuario.php" class="btn"><button type="button">Cancelar </button></a>
    <a href="listar_usuario.php"class="btn"><button type="button">Retornar a Listagem</button></a>
   
</body>
</html>
