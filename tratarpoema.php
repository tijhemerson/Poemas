<?php
    //var_dump($_POST);   
    $autor= $_POST['autor']; 
    $poema = $_POST['poema'];
    $titulo= $_POST['titulo'];
    try{
        require("conexaopoema.php");
        $consulta = $pdo->prepare("INSERT INTO poema 
        (autor,titulo,poema)
        VALUES(:autor,:titulo,:poema)");
        $consulta->bindValue(":autor", $autor);
        $consulta->bindValue(":titulo", $titulo);
        $consulta->bindValue(":poema", $poema);
        $consulta->execute();
    }
    catch(Exception $e){
        die("Erro de banco de dados: " .$e->getmessage());
    }
    header('location: home.php#addpoema');

?>