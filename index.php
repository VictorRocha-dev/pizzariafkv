<?php
    session_start();
    if(!isset($_SESSION['user_id'])){
        $message = "<a href='pages/login.html'>Login</a>";
       
    }else{
        $message = "<a href='php/logout.php'>Sair</a>";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizzaria FK | Home</title>

    <!--Links do Site-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Oswald&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/footer.css">

</head>
<body>  

    <header >
        <nav>
            <ul>
                <a href="index.html"><li><img src="assets/Pizza_F_K-logo.png" alt="logo" id="logo"></li></a>
            </ul>

            <ul id="options">
                <li><a href="#">Home</a></li>
                <li><a href="pages/cardapio.php">Cardápio</a></li>
                <li><?php echo $message;?></li>

            </ul>

            <ul>
                <a href="pages/carrinho.php"><li><img src="assets/bag.png" alt="" id="bag"></li></a>
            </ul>
        </nav>
    </header>

    <main>
        <section id="background">
  
            <div id="content">
                <img src="assets/Pizza_F_K-logo.png" alt="">
                <h1>MODERNIZANDO A TRADICIONAL PIZZA ITALIANA</h1>
                <p>
                    Trabalhamos sempre com ingredientes de primeira linha e nossos processos estão constantemente sendo avaliados, afim de  garantir a higiene, agilidade e sobre tudo a satisfação de nossos clientes
                </p>
                <a href="pages/cardapio.php">Ver menu</a>
            </div>
        </section>

        <section id="history">
            <div id="imghistory">
                
                <img src="assets/history-pizza.jpg" alt="">
            </div>
            <div id="texthistory">
                
                <h1 id="destaque" name="destaque">Servindo Fatia de Pizzas desde 1987</h1>
                <p>
                    Desde sua inauguração em 1987, a Pizzaria F&K  por sua qualidade. São 30 anos de tradição, trabalhando sempre com os melhores produtos e oferecendo um atendimento diferenciado. Hoje a Fornalenha Pizzaria está entre as melhores pizzarias da região do ABC. Caracterizada por sua massa fina e crocante, a pizza é coberta com as mais deliciosas e fartas combinações de ingredientes.
                </p>
                <p>
                    Fazendo jus ao nome da pizzaria, nossos produtos são assados em forno a lenha, o que confere à esta pizza um visual e sabor inigualáveis.
                </p>
                <img src="assets/assinatura.png" alt="" id="assinatura">

            </div>
        </section>

        <section id="maps">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29230.49234893469!2d-46.625301888387376!3d-23.682696564257128!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce44b8d2c28375%3A0x62ad42f9e48b975e!2sPizzaria%20%C3%81rtico%20-%20Prestes%20Maia!5e0!3m2!1spt-BR!2sbr!4v1669521013102!5m2!1spt-BR!2sbr" width="1500" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </section>
    </main>
    <footer class="footer">
        <!-- 3 divs pra separar os 3 elementos do footer, 
            onde será possível adicionar um display 
            flex, permitindo que os 3 elementos possam ficar 
            um ao lado do outro -->
        <div id="logo_footer">
            <img src="assets/Pizza_F_K-logo.png" alt="PizzaHyt">
        </div>
        <div id="contact">
            <strong>Contatos</strong>
            <p>contato@fkpizzaria.com</p>
            <p>+55 11 9999-9999</p>         
        </div>
        <div id="social-media">
            <strong>Redes Sociais</strong>
            <div class="icons">
                <img src="assets/instagram-logo.svg" alt="Instagram">
                <img src="assets/facebook-logo.svg" alt="Facebook">
            </div>
            
            
        </div>
    </footer>

</body>
</html>