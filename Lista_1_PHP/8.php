<?php
    function retorno(){
        if(isset($_POST["string"])){
            $tamanho = strlen($_POST["string"]);
            $invertida = strrev(strtolower($_POST["string"]));
            $vogais = preg_match_all('/[aeiouáéíóúàãõâêîôû]/iu', $_POST["string"]);
            $consoantes = preg_match_all('/[bcdfghjklmnpqrstvwxyz]/iu', $_POST["string"]);
            
            echo "<h3>Resultados:</h3>";
            echo "Tamanho da string: " . $tamanho . "<br>";
            if($invertida === strtolower($_POST["string"])){
                $invertida .= " SIM (é um palíndromo)";
            }else{
                $invertida .= " NÃO (não é um palíndromo)";
            }
            echo "É um palíndromo? " . $invertida . "<br>";
            echo "Número de vogais: " . $vogais . "<br>";
            echo "Número de consoantes: " . $consoantes . "<br>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String</title>
</head>
<body>
    <form action="" method="POST">
        <label for="texto">Insira o texto:</label>
        <input type="text" name="string">
        <input type="submit" value="Pesquisar">
    </form>
    <?php retorno(); ?>
</body>
</html>