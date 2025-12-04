<?php
    $nome = $_GET["nome"];
    $email = $_GET["email"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página 2</title>
</head>
<body>
    <form action="pagina3.php" method="POST">
    <input type="hidden" name="nome" value="<?php echo $nome; ?>">
    <input type="hidden" name="email" value="<?php echo $email; ?>">

    <label for="peso">Peso (kg): </label>
    <input type="number" name="peso">

    <label for="altura">Altura (m): </label>
    <input type="number" step="0.01" name="altura">
    
    <input type="submit" value="Próximo">
    </form>
</body>
</html>