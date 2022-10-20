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
    <link rel="stylesheet" href="../css/style-global.css">
    <link rel="stylesheet" href="../css/rodape.css">
    <title>Vet ABC</title>
</head>
<body>
    <header>
        <img class="col-sm-5 col-md-3 col-lg-2" src="../img/logo.png" alt="logo da empresa vet abc">
    </header>

    <div class="page-top">
        <nav class="main-nav-bar"><!-- Essa div vai conter o MENU -->
            <span class="material-symbols-outlined three-bars col-sm-2" onclick="toggleMenu()">menu</span>
            <ul id="menu">
                <li><a href="index_fun.php">Home</a></li>
                <li><a href="quemsomos_funcionarios.php">Quem Somos</a></li>
                <li><a href="agenda_funcionarios.php">Agenda</a></li>
                <li><a class="login-cadastro" href="cadastro_funcionarios.php">Cadastro</a></li>
                <li><a class="login-cadastro" href="../php/logout.php">Sair</a></li>
                <li><a href="cadastro_consulta.php">Agendar Consulta</a></li>
            </ul>
        </nav>
        <nav class="nav-menu-mobile">
            <label for="three-bars" id="three-bars" class="material-symbols-outlined three-bars col-sm-2" onclick="toggleMenu()">menu</label>
            <ul id="menu-mobile">
                <li><a href="index_fun.php">Home</a></li>
                <li><a href="quemsomos_funcionarios.php">Quem Somos</a></li>
                <li><a href="agenda_funcionarios.php">Agenda</a></li>
                <li><a class="login-cadastro" href="cadastro_funcionarios.php">Cadastro</a></li>
                <li><a class="login-cadastro" href="../php/logout.php">Sair</a></li>
                <li><a href="cadastro_consulta.php">Agendar Consulta</a></li>
            </ul>
        </nav>
        
        <div class="start-page-container">
            <div class="start-page col-sm-12 col-md-12 col-lg-8"></div>
            <div class="links">
                <div class="box-agenda col-md-2 col-lg-2">
                    <a href="../html/agenda.php">
                        <h2>Agenda</h2>
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
                <h2 class="col-sm-12 col-md-12 col-lg-12">Nossa Localização</h2>
                <p class="col-sm-12 col-md-10 col-lg-8">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Blanditiis necessitatibus aliquam at, excepturi magnam maiores fugiat, rerum tenetur pariatur nesciunt nisi beatae porro provident ducimus omnis aperiam quod itaque nihil.</p>
            </div>
        </div>
    </main>

    <footer class="rodape col-sm-12 col-md-12 col-lg-12">
        <img src="../img/alcina.jpg" class="logo-alcina">
        <img src="../img/logo-abc.png" class="logo-abc">
        <div class="info">
          <p class="r-name">Escola Municipal Alcina Dantas Feijão</p>
          <p class="r-endereco">Rua Capivari nº 500 - Bairro Mauá - São Caetano do Sul - SP</p>
          <p class="r-email">secretaria.alcina@gmail.com</p>
          <p class="r-tel">(11) 4224-0679</p>
       </div>
    </footer>

    <script src="../javascript/toggle_menu.js"></script>
</body>
</html>