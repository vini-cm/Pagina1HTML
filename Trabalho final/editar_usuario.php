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
        <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required><br><br>
        <label for="login">Login:</label>
        <input type="text" id="login" name="login" required><br><br>
        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" required><br><br>
        <input type="submit" value="Salvar alterações">
    </form>
</body>
</html>
