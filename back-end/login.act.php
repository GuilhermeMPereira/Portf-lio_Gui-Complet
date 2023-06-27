<?php
require('connect.php');
    extract($_POST);
    $email = $_POST['email'];
    $senha = md5($senha);

    $busca = mysqli_query($con, "SELECT * FROM `cliente` WHERE `email` = '$email'");
    session_start();

    if($busca->num_rows == 1){
        $conta = mysqli_fetch_array($busca);
        if($senha === $conta['senha']){
            echo "E-mail e senha corretos";
            $_SESSION['login'] = true;
            $_SESSION['nome'] = $conta['nome'];
            $_SESSION['foto'] = $conta['foto'];
            $_SESSION['descricao'] = $conta['descricao'];
            $_SESSION['bio'] = $conta['bio'];
            $_SESSION['funcao'] = $conta['funcao'];
            $target = "location:../templates/index.php";
        }else{
            echo "E-mail ou senha incorretos";
            $target = "location:../templates/login.php";
        }
    }
@session_start();
$_SESSION['msg'] = $msg;
header($target);
?>