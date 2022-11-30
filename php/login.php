<?php

    include_once('conexao.php');

    $email = mysqli_real_escape_string($conexao, $_POST['email']); 
    $senha = mysqli_real_escape_string($conexao, $_POST['senha']);


    $sql = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
    $executar = mysqli_query($conexao, $sql) or die (mysqli_error());
    $verificacao = mysqli_num_rows($executar);

    $row_usuario = mysqli_fetch_assoc($executar);


    $user_id = $row_usuario['id'];
    


    if($verificacao == 1){
        
    session_start();
    $_SESSION['user_id'] = $user_id;
    header("Location: ../index.php");
        
    }else{
        echo '<script>alert("Login ou senha invalido.")</script>';
        echo '<script>javascript:window.location="./";</script>';
    }





?>