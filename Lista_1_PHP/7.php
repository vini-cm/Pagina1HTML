<?php

    function tabuada(){
        if(isset($_POST["num"])){
            $num = $_POST["num"];
            echo "<h3>Tabuada do ".$num.":</h3>";
            for($i = 1; $i <= 10; $i++){
                $resultado = $num * $i;
                echo $num . " x " . $i . " = " . $resultado . "<br>";
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
</head>
<body>
    <form action="" method="POST">
        <label for="num">Informe o número: </label>
        <input type="number" name="num">
        <input type="submit" value="Tabuada">
    </form>
    <?php tabuada(); ?>
</body>
</html>