<?php
    include_once('conexao.php');

    $email = mysqli_real_escape_string($conexao, $_POST['email']); 
    $senha = mysqli_real_escape_string($conexao, $_POST['senha']);


    $sql = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
    $executar = mysqli_query($conexao, $sql) or die (mysqli_error());
    $verificacao = mysqli_num_rows($executar);

    $row_usuario = mysqli_fetch_assoc($executar);


    $verify_admin = $row_usuario['admin'];
    $nome_admin = $row_usuario['nome'];
    


    if($verify_admin == 1){
        
    session_start();
    $_SESSION['admin_nome'] = $nome_admin;
    $_SESSION['admin_logado'] = true;
    header("Location: ../admin/adminpage.php");
        
    }else{
        echo '<script>alert("Login de admnistrador invalido.")</script>';
        echo '<script>javascript:window.location="../";</script>';
    }





?>
