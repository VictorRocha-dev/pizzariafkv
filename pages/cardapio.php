<?php
include_once("../php/conexao.php");


////////////// VERIFY LOGADO
session_start();
error_reporting(0);

    if(!isset($_SESSION['user_id'])){
        $message = "<a href='../pages/login.html'>Login</a>";
       
    }else{
        $message = "<a href='../php/logout.php'>Sair</a>";
    }


if(isset($_POST['add_to_cart'])){

 if($_SESSION['user_id'] == null){
      echo '<script>alert("Realize login primeiro.")</script>';
   }else{
      $user_id = $_SESSION['user_id'];
      $pid = $_POST['pid'];
      $name = $_POST['nome'];
      $price = $_POST['preco'];
      $image = $_POST['image'];
      $qty = $_POST['qnt'];
      $qty = filter_var($qty, FILTER_SANITIZE_STRING);

    $sql = "SELECT * FROM carrinho WHERE usuario_id = '$user_id' AND nome = '$name'";
    $executar = mysqli_query($conexao, $sql) or die (mysqli_error());
    $verificacao = mysqli_num_rows($executar);



      if($verificacao > 0){
         echo '<script>alert("Já adicionado ao carrinho.")</script>';
      }else{

    $sql = "INSERT INTO `carrinho` (id, usuario_id, pid, nome, preco, qnt, link) VALUES(null,'$user_id','$pid','$name','$price','$qty','$image')";
    $executar = mysqli_query($conexao, $sql) or die (mysqli_error());
    header('location:carrinho.php');

      }

   }

}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizzaria FK | Home</title>

    <!--Links do Site-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Oswald&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/cardapio.css">

</head>
<body>  
    <header >
        <nav>
            <ul>
                <a href="../index.php"><li><img src="../assets/Pizza_F_K-logo.png" alt="logo" id="logo"></li></a>
            </ul>

            <ul id="options">
                <li><a href="../index.php">Home</a></li>
                <li><a href="#">Cardápio</a></li>
                <li><?php echo$message; ?></li>

            </ul>

            <ul>
                <a href="carrinho.php"><li><img src="../assets/bag.png" alt="" id="bag"></li></a>
            </ul>
        </nav>
    </header>
   
   <main>
      <h1>Nosso cardapio</h1>
      <?php

         $sql = "SELECT * FROM `produtos`";
         $executar = mysqli_query($conexao, $sql) or die (mysqli_error());
         $verificacao = mysqli_num_rows($executar);



            if($verificacao > 0){
               while($fetch_products = $executar-> fetch_array() ){    
         ?>

                  <div class="container">
                   
                     <img class="imagem" src="<?= $fetch_products['image'] ?>" alt="">
                     <div class="price"><p>$<?= $fetch_products['valor'] ?></p></div>
                     <div class="name"><p><?= $fetch_products['nome'] ?></p></div>
                     <form action="" method="post">
                        <input type="hidden" name="pid" value="<?= $fetch_products['id_produto'] ?>">
                        <input type="hidden" name="nome" value="<?= $fetch_products['nome'] ?>">
                        <input type="hidden" name="preco" value="<?= $fetch_products['valor'] ?>">
                        <input type="hidden" name="image" value="<?= $fetch_products['image'] ?>">
                        <input type="number" name="qnt" class="qty" min="1" max="99" value="1">
                        <input type="submit" class="btn" name="add_to_cart" value="adicionar ao carrinho" >
                     </form>
                  </div>



         <?php
            }
         }
      ?>
   </main>
   <footer class="footer">
        <!-- 3 divs pra separar os 3 elementos do footer, 
            onde será possível adicionar um display 
            flex, permitindo que os 3 elementos possam ficar 
            um ao lado do outro -->
        <div id="logo_footer">
            <img src="../assets/Pizza_F_K-logo.png" alt="PizzaHyt">
        </div>
        <div id="contact">
            <strong>Contatos</strong>
            <p>contato@fkpizzaria.com</p>
            <p>+55 11 9999-9999</p>         
        </div>
        <div id="social-media">
            <strong>Redes Sociais</strong>
            <div class="icons">
                <img src="../assets/instagram-logo.svg" alt="Instagram">
                <img src="../assets/facebook-logo.svg" alt="Facebook">
            </div>
            
            
        </div>
    </footer>


</body>



