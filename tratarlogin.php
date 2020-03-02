<?php
session_start();
?>
<?php
    $email = $_POST['email'];
    $password = $_POST['password'];

    try{
        require("conexao.php");
        $consulta =$pdo->prepare("SELECT * FROM pessoa WHERE email = '$email'");
        $consulta -> execute();

        $resultado= $consulta-> fetch();
       
//        var_dump($resultado);
        //die();

        if($email==$resultado['email'] and (password_verify($password, $resultado['senha']))){
            $_SESSION['logado']=true;
            header('location:home.php ');
        }
        else{
            header('location: login-page.php?erro=1');
        }
       /*if (password_verify($password, $resultado['senha'])){
            header('location: index2.php');
            
        }
        else {
            header('location: login-page.php');
        }*/
        
    }
    catch(Exception $e)
    {
        die("Erro de banco de dados: " .$e->getmessage());
    }
?>