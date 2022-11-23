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
    <link rel="stylesheet" href="../css/style-ajudaa.css">
    <title>Vet ABC</title>
</head>
<body>
    <header>
        <img class="col-sm-5 col-md-3 col-lg-2" src="../img/logo.png" alt="logo da empresa vet abc">
    </header>

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
    
    <div class="box-branca">
        <h2>Marcar uma Consulta</h2>
        <p>Para marcar uma consulta, deverá ligar no número (11) 91234-1234 e o funcionário da nossa clínica lhe atender, em seguida irá efetuar o cadastro do seu bichinho caso o mesmo já não tenha um. Após efetuar o cadastro do seu bichinho, ele irá marcar uma consulta com o médico disponível.</p><br><br>
        <h2>Agenda</h2>
        <p>Para ter acesso às consultas dos seus bichinhos, o dono deverá efetuar o login, lá ele poderá acessar a aba referente a consultas, nele ele terá acesso às informações referentes às consultas marcadas.</p><br><br>
        <h2>Cadastro</h2>
        <p>Para efetuar o cadastro, só precisa clicar no botão superior, ao lado direito, escrito cadastrar. Ela irá abrir um formulário, onde todos os campos devem ser preenchidos adequadamente pelo cliente.</p><br><br>
        <h2>Login</h2>
        <p>Para ir ao login, deve-se apertar o botão superior, ao lado direito, escrito Login. Ou quando realizar o cadastro será brevemente redirecionado a página do Login. Na página em questão, deverá informar seu email e senha de cadastro.</p>
    </div>

    <footer class="rodape col-sm-12 col-md-12 col-lg-12">
        <div class="esquerda">
            <img src="../img/alcina.jpg" class="logo-alcina">
        </div>
        <div class="info">
            <p class="r-name">Escola Municipal Alcina Dantas Feijão</p>
            <p class="r-endereco">Rua Capivari nº 500 - Bairro Mauá - São Caetano do Sul - SP</p>
            <p class="r-email">secretaria.alcina@gmail.com</p>
            <p class="r-tel">(11) 4224-0679</p>
        </div>
        <div class="direita">
            <img src="../img/abc-lg.png" class="logo-abc">
        </div>
    </footer>

    <script src="../javascript/toggle_menu.js"></script>
</body>
</html>