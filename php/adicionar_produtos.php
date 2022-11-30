<?php 
include_once("conexao.php");
session_start();

if(!isset($_SESSION['admin_logado'])){
echo '<script>javascript:window.location="./";</script>';
}


if(isset($_POST['addproduct'])){

   $name = $_POST['nome_produto'];
   $price = $_POST['preco_produto'];
   $link = $_POST['link_produto'];
   $descricao = $_POST['descricao_produto'];


	$sql = "INSERT INTO `produtos` (id_produto, descricao, valor, image, nome) VALUES(null, '$descricao', '$price', '$link', '$name')";
    $executar = mysqli_query($conexao, $sql) or die (mysqli_error());
    echo '<script>alert("Pizza Adicionada")</script>';
}




?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar produtos</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Oswald&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/add.css">
</head>
<body>
    <a href="../admin/adminpage.php" id="voltar">Voltar</a><br>
    <h1> Adicionar Produtos </h1>

   <form action="" method="post">
      <input type="text" required maxlength="100" placeholder="Digite o nome do produto" name="nome_produto">
      <input type="text" required  placeholder="Digite a descrição" name="descricao_produto">
      <input type="number" min="0" class="box" required max="999" placeholder="Preço" name="preco_produto">
      <input type="text" required  placeholder="Link da imagem" name="link_produto">
      <input type="submit" value="Adicionar" class="btn" name="addproduct" id="enviar">
   </form>

</body>
</html>