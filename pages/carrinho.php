<?php
include_once("../php/conexao.php");


////////////// VERIFY LOGADO
    session_start();
    if(!isset($_SESSION['user_id'])){
        echo '<script>alert("Você precisa estar logado para acessar o carrinho!")</script>';
        echo '<script>javascript:window.location="../pages/login.html";</script>';

    }




if(isset($_POST['update_qty'])){
   $cart_id = $_POST['cart_id'];
   $qty = $_POST['qty'];
   $qty = filter_var($qty, FILTER_SANITIZE_STRING);


    $sql = "UPDATE `carrinho` SET qnt='$qty' WHERE id = '$cart_id'";
    $executar = mysqli_query($conexao, $sql) or die (mysqli_error());

}


if(isset($_GET['deletar_item'])){
   $delete_cart_id = $_GET['deletar_item'];

  $sql = "DELETE FROM `carrinho` WHERE id = '$delete_cart_id'";
  $executar = mysqli_query($conexao, $sql) or die (mysqli_error());
  header('location:carrinho.php');
}


if(isset($_POST['fazer_pedido'])){

   if($_SESSION['user_id'] == null){
      echo '<script>alert("Realize login primeiro.")</script>';
   }else{
    $user_id = $_SESSION['user_id'];
    $sql = "SELECT * FROM carrinho WHERE usuario_id = '$user_id'";
    $executar = mysqli_query($conexao, $sql) or die (mysqli_error());
    $verificacao = mysqli_num_rows($executar);



      if($verificacao > 0){
    $sql = "DELETE FROM carrinho WHERE usuario_id = '$user_id'";
    $executar = mysqli_query($conexao, $sql) or die (mysqli_error());
    echo '<script>alert("Pedido realizado com sucesso.")</script>';
      }else{
         echo '<script>alert("Seu carrinho esta vazio.")</script>';
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
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/carrinho.css">

</head>
<body>  
    <header >
        <nav>
            <ul>
                <a href="../index.php"><li><img src="../assets/Pizza_F_K-logo.png" alt="logo" id="logo"></li></a>
            </ul>

            <ul id="options">
                <li><a href="../index.php">Home</a></li>
                <li><a href="cardapio.php">Cardápio</a></li>
                <li><a href='../php/logout.php'>Sair</a></li>

            </ul>

            <ul>
                <a href="carrinho.php"><li><img src="../assets/bag.png" alt="" id="bag"></li></a>
            </ul>
        </nav>
    </header>

	
   <main>


   <h1>Carrinho</h1>

  <?php
    $user_id = $_SESSION['user_id'];
    
    $sql = "SELECT * FROM `carrinho` WHERE usuario_id='$user_id'";
    $executar = mysqli_query($conexao, $sql) or die (mysqli_error());
    $verificacao = mysqli_num_rows($executar);
    $tt = 0;


         if($verificacao > 0){
            while($fetch_products = $executar-> fetch_array() ){ 
             $preco_total = ($fetch_products['preco']*$fetch_products['qnt']);
             $tt += $preco_total;
      ?>
      <div class="container">
         <div class="info">
               <img src="<?= $fetch_products['link'] ?>" alt="" width="100">
               <p class="a">Valor: $<?= $fetch_products['preco'] ?></p>
               <p class="b">Quantidade: <?= $fetch_products['qnt'] ?></p>
               <p class="c">Nome: <?= $fetch_products['nome'] ?></p>
               <p class="d">Preço: <?= $preco_total ?></p>
               <a href="carrinho.php?deletar_item=<?= $fetch_products['id']; ?>" id="del" class="fas fa-times" onclick="return confirm('Deletar do carrinho');">Deletar</a>
               <form action="" method="post">
                  <input type="hidden" name="cart_id" value="<?= $fetch_products['id']; ?>">
                 
                  <button type="submit" class="fas fa-edit" name="update_qty"><img src="../assets/refresh.png" alt=""></button>
                  <input type="number" name="qty" class="qty" min="1" max="99" value="<?= $fetch_products['qnt']; ?>" onkeypress="if(this.value.length == 2) return false;">
                     
               </form>
         </div>

      </div>
      <script type="text/javascript">
        


      </script>
      <div id="status_ccs"> </div>
      <div class="payout">
         <div class="finish">
               <?php
                     }
                        echo"<div class='f'>Preço Total:R$ $tt </div>";
                     }
                        ?>
                <form action="" method="post">
                <input type="submit" value="Finalizar" id="finish" name="fazer_pedido">
                </form>
                     
         </div>
      </div>



   </main>


</body>

