<?php
    function connecta_bd(){
        $servername = "mysql-aluno";
        $username = "root";
        $password = "admin"
        $dbname = "web";
        //criar conexão
        return new PDO("mysql:host=$servername,dbname=$dbname", $username, $password);
    }
    connecta_bd();

    function cadastra_usuario($nome,$login,$senha){
        $con= connecta_bd();
        $stmt = $con->prepare("INSERT INTO usuarios(nome, login, senha)
                                VALUES(:nome, :login, :senha)");
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':login', $login);
        $stmt->bindParam(':senha', $senha);
        return $stmt->execute();
        
    }
    //cadastra_usuario("Julia","Julia","12345");

    function delete_usuario($id){
        $con= connecta_bd();
        $stmt= $con-.prepare("DELETE FROM usuarios WHERE id= :id");
        $stmt->bindParam('id', $id);
        return $stmt ->execute();
    }
    delete_usuario(1);



?>