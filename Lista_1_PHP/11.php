<?php
    function triangulo(){

        if (isset($_POST["lado1"]) && isset($_POST["lado2"]) && isset($_POST["lado3"])) {

        $lado1 = $_POST["lado1"];
        $lado2 = $_POST["lado2"];
        $lado3 = $_POST["lado3"];

            if (($lado1 < $lado2 + $lado3) && ($lado2 < $lado1 + $lado3) && ($lado3 < $lado1 + $lado2)){
                echo "<h3>Os lados formam um triângulo.</h3>";
                if($lado1 == $lado2 && $lado2 == $lado3){
                    echo "<p>Tipo: Equilátero</p>";
                } elseif ($lado1 == $lado2 || $lado1 == $lado3 || $lado2 == $lado3){
                    echo "<p>Tipo: Isósceles</p>";
                } else {
                    echo "<p>Tipo: Escaleno</p>";
                }
            } else {
                echo "<h3>Os lados não formam um triângulo.</h3>";
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Triângulos</title>
</head>
<body>
    <form action="" method="POST">
        <label for="lado1">Lado 1: </label><br>
        <input type="number" name="lado1" step="0.01"><br>
        <label for="lado2">Lado 2: </label><br>
        <input type="number" name="lado2" step="0.01"><br>
        <label for="lado3">Lado 3: </label><br>
        <input type="number" name="lado3" step="0.01"><br></br>
        <input type="submit" value="Verificar Triângulo">
        <?php triangulo(); ?>
    </form>
</body>
</html>