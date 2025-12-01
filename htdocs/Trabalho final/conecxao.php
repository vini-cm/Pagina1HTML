<?php
     function connecta_bd(){
        $servername = "127.0.0.1";
        $username = "root";
        $password = "";
        $dbname = "web";
        $port = 3307;

        try {
            $pdo = new PDO("mysql:host=$servername;port=$port;dbname=$dbname;charset=utf8", $username, $password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (PDOException $e) {
            die("Erro na conexão: " . $e->getMessage());
        }
    }
    function cadastro_usuario($nome, $login, $senha) {
        $con = connecta_bd();
        $stmt = $con->prepare("INSERT INTO usuarios (nome, login, senha)
                            VALUES (:nome, :login, :senha)");

        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':login', $login);
        $stmt->bindParam(':senha', $senha);

        return $stmt->execute();
    }

    function delete_usuario($id) {
        $con = connecta_bd();
        $stmt = $con->prepare("DELETE FROM usuarios WHERE id = :id");
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }

    function update_usuario($id, $nome, $login, $senha) {
    $con = connecta_bd();

    $stmt = $con->prepare("UPDATE usuarios
                           SET nome = :nome, login = :login, senha = :senha
                           WHERE id = :id");

    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':login', $login);
    $stmt->bindParam(':senha', $senha);

    return $stmt->execute();
}


    function get_usuario($id) {
        $con = connecta_bd();
        $stmt = $con->prepare("SELECT * FROM usuarios WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    function get_usuarios() {
        $con = connecta_bd();
        $stmt = $con->prepare("SELECT * FROM usuarios");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

?>
