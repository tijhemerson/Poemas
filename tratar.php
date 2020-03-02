<?php
    var_dump($_POST);
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    try{
        require("conexao.php");
        $consulta = $pdo->prepare("INSERT INTO pessoa
        (nome,email,senha)
        VALUES (:nome, :email, :senha)");

        $consulta->bindValue(":nome", $nome);
        $consulta->bindValue(":email", $email);
        $consulta->bindValue(":senha", password_hash($password, PASSWORD_DEFAULT));

        $consulta->execute();
    }
    catch(Exception $e){
        die("Erro de banco de dados: " .$e->getmessage());
    }
    header('location: home.php#usuario');
?>