<?php
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $peso = $_POST["peso"];
    $altura = $_POST["altura"];
    $IMC = $peso / ($altura * $altura);

    if($IMC < 18.5){
        $classificacao = "Abaixo do peso";
    } elseif ($IMC >= 18.5 && $IMC < 24.9){
        $classificacao = "Peso normal";
    } elseif ($IMC >= 25 && $IMC < 29.9){
        $classificacao = "Sobrepeso";
    } elseif ($IMC >= 30 && $IMC < 34.9){
        $classificacao = "Obesidade grau I";
    } elseif ($IMC >= 35 && $IMC < 39.9){
        $classificacao = "Obesidade grau II";
    } else {
        $classificacao = "Obesidade grau III";
    }

    echo "<h1>Resultado do Cálculo de IMC</h1>";
    echo "<p>Nome: " . htmlspecialchars($nome) . "</p>";    
    echo "<p>Email: " . htmlspecialchars($email) . "</p>"; 
    echo "<p>Peso: ". number_format($peso,1) ."kg</p>";
    echo "<p>Altura: ". number_format($altura,2) ."cm</p>";
    echo "<p>IMC: " . number_format($IMC, 2) . "</p>";
    echo "<p>Classificação: " . $classificacao . "</p>";   
?>