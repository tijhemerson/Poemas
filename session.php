<?php
    $dbhost     = "localhost:3306";
    $dbname     = "cadastro";
    $dbuser     = "root";
    $dbpass     = "";

    $conn = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);

    session_start();
    $user_check=$_SESSION[''];
    $result = $conn->prepare("SELECT * FROM login WHERE user_email = :user_check");                                             
    $result->execute(array(":usercheck"=>$user_check));

    $row = $result->fetch(PDO::FETCH_ASSOC);

    $login_session =$row['user_email'];
    $user_id =$row['log_id'];
    $user_passwords = $row['user_pass'];

    if(!isset($login_session))
        {
            $conn = null; 
            header('index2.php');
        }
?>