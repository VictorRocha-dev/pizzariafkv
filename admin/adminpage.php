<?php
include_once("../php/conexao.php");
session_start();

if(!isset($_SESSION['admin_logado'])){
echo '<script>javascript:window.location="./";</script>';
}


$admin_nome = $_SESSION['admin_nome'];

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>

    <link rel="stylesheet" href="../css/admin.css">
</head>
<body>

   <h1>Olá, <?php echo"$admin_nome" ?></h1>
    <nav class="menu">
        <input type="checkbox" href="#" class="menu-open" name="menu-open" id="menu-open" />
        <label class="menu-open-button" for="menu-open">
         <span class="lines line-1"></span>
         <span class="lines line-2"></span>
         <span class="lines line-3"></span>
       </label>
     
        <a href="../php/adicionar_produtos.php" class="menu-item blue"><img src="../assets/mais (1).png" alt=""></a>
        <a href="./crud/index.php" class="menu-item green"><img src="../assets/user.png" alt=""></a>
        <a href="../php/logout.php" class="menu-item red"><img src="../assets/logout.png" alt=""></a>
        <a href="#" class="menu-item purple"> <i class="fa fa-microphone"></i> </a>
        <a href="#" class="menu-item orange"> <i class="fa fa-star"></i> </a>
        <a href="#" class="menu-item lightblue"> <i class="fa fa-diamond"></i> </a>
     </nav>

    
</body>
</html>
