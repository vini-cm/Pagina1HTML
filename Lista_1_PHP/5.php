
<?php
            function sorteio(){
                if (isset($_POST["num1"], $_POST["num2"])) {
                    $min = $_POST["num1"];
                    $max = $_POST["num2"];

                    if (is_numeric($min) && is_numeric($max)) {
                        $sorteado = rand($min, $max);
                        echo "Número sorteado: ".$sorteado;
                    } else {
                        echo "Os campos devem ser numéricos";
                    }
                }
            } 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aleatório no intervalo</title>
</head>
<body>
    <form action="" method="POST">
    <label for="num1">Número inicial:</label>
    <input type="number" name="num1">
    <label for="num2">Número final:</label>
    <input type="number" name="num2">
    <input type="submit" value="Sortear">
    </form>
    <?php sorteio(); ?>
</body>
</html>