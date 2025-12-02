<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Usuario</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>cadastro de usuario </h1>
    </header>
    <form action="processacadastro.php" method="POST">
        <labeL for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required><br><br>
        <labeL for="login">Login:</label>
        <input type="text" id="login" name="login" required><br><br>
        <labeL for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" required><br><br>
        <input type="submit" value="cadastrar!" href="cadastro_usuario.php">
        
    </form>


</body>
</html>