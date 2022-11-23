<?php
    include('../php/loginteste.php'); //estou chamando o php que configura o login

    echo "<style>.sair{display:none;}</style>"; //deixar o botão sair invisivel enquanto a pessoa não está logada
    if(isset($_SESSION['user'])){ //se a pessoa logar aconte:
        echo "<style>.logout{display:none;}</style>"; // deixa btns de cadastro e login invisiveis
        echo "<style>.sair{display:block;}</style>"; // deixa visivel o btn sair
    }
?> 
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="../css/style-glob.css">
    <link rel="stylesheet" href="../css/style-rodape.css">
    <title>Vet ABC</title>
</head>
<body>
    <header>
        <img class="col-sm-5 col-md-3 col-lg-2" src="../img/logo.png" alt="logo da empresa vet abc">
    </header>

    <div class="page-top">
        <nav class="main-nav-bar">
            <ul id="menu">
                <li><a href="index.php">Home</a></li>
                <li><a href="agenda.php">Consulta</a></li>
                <li><a href="ajuda.php">Dúvidas</a></li>
                <li><a href="quemsomos.php">Quem Somos</a></li>
                <li><a class="login-cadastro logout" href="login.php">Login</a></li>
                <li><a class="login-cadastro logout" href="cadastro.php">Cadastro</a></li>
                <li><a class="login-cadastro sair" href="../php/logout.php">Sair</a></li> 
            </ul>
        
        </nav>
        <nav class="nav-menu-mobile">
            <label for="three-bars" id="three-bars" class="material-symbols-outlined three-bars col-sm-2" onclick="toggleMenu()">menu</label>
            <ul id="menu-mobile">
                <li><a href="index.php">Home</a></li>
                <li><a href="agenda.php">Consulta</a></li>
                <li><a href="ajuda.php">Dúvidas</a></li>
                <li><a href="quemsomos.php">Quem Somos</a></li>
                <li><a class="login-cadastro logout" href="login.php">Login</a></li>
                <li><a class="login-cadastro logout" href="cadastro.php">Cadastro</a></li>
                <li><a class="login-cadastro sair" href="../php/logout.php">Sair</a></li>
            </ul>
        </nav>
    </div>

    <div class="start-page-container">
        <div class="start-page col-sm-12 col-md-12 col-lg-8"></div>
        <div class="links">
            <div class="box-agenda col-md-2 col-lg-2">
                <a href="../html/agenda.php">
                    <h2>Consulta</h2>
                    <img src="../img/agenda.png" alt="">
                </a>
            </div>
            <div class="box-sobre col-md-2 col-lg-2">
                <a href="../html/quemsomos.php">
                    <h2>Sobre</h2>
                    <img src="../img/grupo-fundo-branco.png" alt="">
                </a>
            </div>
            <div class="box-login col-md-2 col-lg-2">
                <a href="../html/cadastro.php">
                    <h2>Cadastro</h2>
                    <img src="../img/cadastro.png" alt="">
                </a>
            </div>
        </div>
    </div>

    <main>
        <div id="first-row" class="row">
            <img class="col-sm-8 col-md-7 col-lg-4" src="../img/pet-buldog.jpg" alt="">
            <div class="row-content">
                <h2 class="col-sm-12 col-md-12 col-lg-12">Somos uma Empresa com Valores</h2>
                <p class="col-sm-12 col-md-10 col-lg-8">A <strong>Vet ABC</strong> presa pela segurança do pet, pela qualidade no seu atendimento, e pelo bem-estar do pet. Damos máxima importância para a confiança do cliente em nós.</p>
            </div>
        </div>
        <hr>
        <div class="row">
            <img class="col-sm-8 col-md-7 col-lg-4" src="../img/gato.jpeg" alt="">
            <div class="row-content col-sm-12 col-lg-8">
                <h2 class="col-sm-12 col-md-12 col-lg-12">Aqui você sempre encontrará:</h2>
                <p class="col-sm-12 col-md-10 col-lg-8">Profissionais qualificados, ótimo atendimento, responsabilidade com os pets, equipamento de alta tecnologia e muito amor com seu bichinho.</p>
            </div>
        </div>
    </main>

    <footer class="rodape col-sm-12 col-md-12 col-lg-12">
        <div class="esquerda">
            <img src="../img/alcina.jpg" class="logo-alcina">
        </div>
        <div class="info">
            <p>Escola Municipal Alcina Dantas Feijão</p>
            <p>Rua Capivari nº 500 - Bairro Mauá - São Caetano do Sul - SP</p>
            <p>secretaria.alcina@gmail.com</p>
            <p>(11) 4224-0679</p>
        </div>
        <div class="direita">
            <img src="../img/abc-lg.png" class="logo-abc">
        </div>
    </footer>

    <script src="../javascript/toggle_menu.js"></script>
</body>
</html>