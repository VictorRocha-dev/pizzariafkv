<?php

    
    include_once('conexao.php');
    error_reporting(0);
    $email = mysqli_real_escape_string($conexao, $_POST['email']);
    $senha = mysqli_real_escape_string($conexao, $_POST['senha']);
    $name = mysqli_real_escape_string($conexao, $_POST['nome']);
    $date = mysqli_real_escape_string($conexao, $_POST['data_nasc']);
    $endereco = mysqli_real_escape_string($conexao, $_POST['endereco']);
    $bairro = mysqli_real_escape_string($conexao, $_POST['bairro']);
    $cidade = mysqli_real_escape_string($conexao, $_POST['cidade']);
    $cep = mysqli_real_escape_string($conexao, $_POST['cep']);
    $uf = mysqli_real_escape_string($conexao, $_POST['uf']);
    $cpf = mysqli_real_escape_string($conexao, $_POST['cpf']);



    $sql = "INSERT INTO usuarios VALUES(null,'$email','$senha','$name','$date','$endereco','$bairro','$cidade','$cep','$uf','$cpf', 0)";
    $executar = mysqli_query($conexao, $sql) or die (mysqli_error());
    $verificacao = mysqli_num_rows($executar);


    if($verificacao == 1){
        echo '<script>alert("Cadastro não realizado!!")</script>';
        echo '<script>javascript:window.location="../pages/registro.html";</script>';
        
    }else{

        echo '<script>alert("Usuario criado com sucesso.")</script>';
        echo '<script>alert("Faça login para continuar.")</script>';
        echo '<script>javascript:window.location="../pages/login.html";</script>';
    }





?>