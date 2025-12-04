<?php
    function ehPar(){
        if (isset($_POST["num"])) {
            $num = $_POST["num"];

            if ($num % 2 == 0) {
                echo $num . " é par.";
                return true;
            } else {
                echo $num . " é ímpar.";
                return false;
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ímpar ou Par</title>
</head>
<body>
    <form action="" method="POST">
    <label for="num">Informe o número: </label>
    <input type="number" name="num">
    <input type="submit" value="Verificar">
    </form>
    <?php ehPar(); ?>
</body>
</html>