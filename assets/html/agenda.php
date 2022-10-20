<?php
    include('../php/protecaoAgenda.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
    <link rel="stylesheet" href="../css/style-global.css">
    <link rel="stylesheet" href="../css/rodape.css">
    <link rel="stylesheet" href="../css/agenda.css">
    <title>Agenda</title>
</head>
<body>
    <header class="area-logo"><!-- Aqui fica a logo da página -->
        <img class="col-sm-5 col-md-3 col-lg-2" src="../img/logo.png" alt="logo da empresa vet abc">
    </header>
    
    <nav class="main-nav-bar"><!-- Essa div vai conter o MENU -->
        <span class="material-symbols-outlined three-bars col-sm-2" onclick="toggleMenu()">menu</span>
        <ul id="menu">
            <li><a href="index.php">Home</a></li>
            <li><a href="agenda.php">Consulta</a></li>
            <li><a href="quemsomos.php">Quem Somos</a></li>
            <li><a class="login-cadastro" href="../php/logout.php">Sair</a></li>
        </ul>
    </nav>
    <nav class="nav-menu-mobile">
        <label for="three-bars" id="three-bars" class="material-symbols-outlined three-bars col-sm-2" onclick="toggleMenu()">menu</label>
        <ul id="menu-mobile">
            <li><a href="index.php">Home</a></li>
            <li><a href="agenda.php">Consulta</a></li>
            <li><a href="quemsomos.php">Quem Somos</a></li>
            <li><a class="login-cadastro" href="login.php">Login</a></li>
            <li><a class="login-cadastro" href="cadastro.php">Cadastro</a></li>
        </ul>
    </nav>

    <main>

    <div class="event-info col-sm-12 col-md-11 col-lg-4">
        <div class="title">
            <h1>Consulta do dia XX</h1>
        </div>
        <div class="event-content">
            <div>
                <h3>Nome do Cliente</h3>
                <span>Adalto Lourenço</span>
            </div>
            <div>
                <h3>Raça do Animal</h3>
                <span>Cão, Pitbull Terrié</span>
            </div>
            <div>
                <h3>Nome do Profissional</h3>
                <span>Roberto Carlos da Rocha Costa de Bourbon</span>
            </div>
            <div>
                <h3>Horário da Consulta </h3>
                <span><span class="material-symbols-outlined clock"> schedule </span>17:30</span>
            </div>
        </div>
    </main>

    <footer class="rodape col-sm-12 col-md-12 col-lg-12">
        <img src="../img/alcina.jpg" class="logo-alcina col-sm-12 col-md-12 col-lg-12"><!-- imagem alcina -->
        <img src="../img/logo-abc.png" class="logo-abc"><!-- imagem abc -->
        <div class="info"> <!-- classe onde estáarmazenado as informações -->
            <p class="r-name">Escola Municipal Alcina Dantas Feijão</p>
            <p class="r-endereco">Rua Capivari nº 500 - Bairro Mauá - São Caetano do Sul - SP</p>
            <p class="r-email">secretaria.alcina@gmail.com</p>
            <p class="r-tel">(11) 4224-0679</p>
        </div>
    </footer>
    
    <script src="../javascript/toggle_menu.js"></script>
    <script src="../javascript/agenda.js"></script>
</body>
</html>