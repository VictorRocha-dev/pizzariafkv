<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/loginadmin.css">
    <link rel="shortcut icon" href="">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
   

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@3/dark.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9/dist/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

  
    <style> #toast-container > .toast-warning { background-color: #14151A; } </style>
    <style> #toast-container > .toast-success { background-color: #14151A; } </style>
    <style> #toast-container > .toast-error { background-color: #14151A; } </style>
    <title>Pizza F'K'V</title>
</head>
<body>
    <div class="container">

        <div id="LoginClass" class="logar">
            <div class="title">
                <h3>Pizzaria F'K'V</h3>
            </div>

            <form name="Login" id="Login" method="POST" action="../php/login_admin.php">
            <div class="text">
                <p>Bem Vindo
                <p>Faça Login Para Acessar!</p>
                <input id="UsuarioL" name="email" class="usuario" type="text" placeholder="Usuario" required>
                <input id="SenhaL" name="senha" class="senha" type="password" placeholder="Senha" required>
                <input class="g-recaptcha" type="Submit" name="Submit" id="Submit" value="Login"></input>
                            </div>
        </form>
        </div>

        <div id="CadastroClass" class="cadastrar">
            <div class="title">
                <h3>Pizza F&K</h3>
            </div>

            <div class="button">
                <button class="login">Login</button>
                <button class="cadastro">Cadastrar</button>
            </div>

            
        </div>
        
    </div>
    
</body>
</html>