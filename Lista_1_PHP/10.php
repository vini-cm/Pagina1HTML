<style>
    .linha {
        display: inline-block;
        width: 50px;
        text-align: center;
        border: 3px solid black;
        background-color: red;
    }
</style>
<?php
    function intervalo() {

        if (isset($_POST["num1"]) && $_POST["num2"]){
            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];
            for ($i = $num1; $i <= $num2; $i++){
                echo '<span class="linha">' . $i . '</span><br>';
            }
        }
            
       
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Span's</title>
</head>
<body>
    <form action="" method="POST">
        <label for="num1">Número 1: </label><br>
        <input type="number" name="num1"><br>
        <label for="num2">Número 2: </label><br>    
        <input type="number" name="num2"><br><br>
        <input type="submit" value="Exibir Intervalo"><br><br>
        <h3>Sequência do Intervalo: </h3>
        <?php intervalo(); ?>
    </form>
</body>
</html>