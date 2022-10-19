<?php
    include('../php/loginteste.php');
    echo "<style>.sair{display:none;}</style>";
    if(isset($_SESSION['user'])){
        echo "<style>.logout{display:none;}</style>";
        echo "<style>.sair{display:block;}</style>";
    }
?>

<html lang=pt-br>
    <head>
        <meta charset="utf-8">
         <title>Quem somos</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" /> <!-- aparecer o sinal do menu para celular -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- da uma limitação pro site -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge"> <!-- compatibilidade com navegadores-->
        <link rel="stylesheet" href="../css/style-quemsomos.css" > 
        <link rel="stylesheet" href="../css/style-global.css">
        <link rel="stylesheet" href="../css/rodape.css">
    
    </head>
    
    <body>
        <header class="area-logo"> <!-- parte branca da logo -->
            <img class="col-sm-5 col-md-3 col-lg-2" src="../img/logo.png" alt="logo da empresa vet abc"><!-- imagem logo -->
        </header>
        
        <nav class="main-nav-bar"><!-- Essa div vai conter o MENU -->
            <span class="material-symbols-outlined three-bars col-sm-2" onclick="toggleMenu()">menu</span>
            <ul id="menu">
                <li><a href="../../index.php">Home</a></li>
                <li><a href="quemsomos.php">Quem Somos</a></li>
                <li><a href="agenda.php">Agenda</a></li>
                <li><a class="login-cadastro logout" href="login.php">Login</a></li>
                <li><a class="login-cadastro logout" href="cadastro.php">Cadastro</a></li>
                <li><a class="login-cadastro sair" href="../php/logout.php">Sair</a></li>
            </ul>
        </nav>
        <nav class="nav-menu-mobile">
            <label for="three-bars" id="three-bars" class="material-symbols-outlined three-bars col-sm-2" onclick="toggleMenu()">menu</label>
            <ul id="menu-mobile">
                <li><a href="../../index.php">Home</a></li>
                <li><a href="quemsomos.php">Quem Somos</a></li>
                <li><a href="agenda.php">Agenda</a></li>
                <li><a class="login-cadastro logout" href="login.php">Login</a></li>
                <li><a class="login-cadastro logout" href="cadastro.php">Cadastro</a></li>
                <li><a class="login-cadastro sair" href="../php/logout.php">Sair</a></li>
            </ul>
        </nav>
            

        <div class="caixote"><!-- armazena todas as caixinhas -->
            <!-- ANDRÉ -->
            <div class="box-andre col-sm-8 col-md-6 col-lg-3"> <!--  toda a caxinha-->
                <div class="cor-foto-a box-andre col-sm-12 col-md-12 col-lg-12"> </div> <!-- barrinha verde da caixinha -->
                <div  class="foto-a" style="background-image: url(../img/andr%C3%A9.jpg)"></div><!-- bolinha que contém imagem -->
                <div class="texto"><!-- div de texto -->
                    <p class="text-a"> <br> Eu sou o André Reis, desenvolvedor front-end do projeto. Apesar de estar encarregado do layout das páginas, também dei uma ajudinha às minhas colegas com o back-end do projeto. Fui responsável também por desenvolver nosso aplicativo móvel. </p><br>
                </div> <!-- texto de informação -->
                <div class="guarda-logo">
                    <a href="https://pt-br.facebook.com/"><img src="../img/facebook.png" class="logos"></a>
                    <a href="https://www.instagram.com/"><img src="../img/instagram.png" class="logos"></a>
                    <a href="https://mail.google.com/mail/"><img src="../img/gmail.png" class="logos"></a>
                    <a href="https://twitter.com/login?lang=pt"><img src="../img/ttw.png" class="logos"></a>
                </div>    
            </div>

            <!-- BÁRBARA -->
            <div class="box-barbara col-sm-8 col-md-6 col-lg-3"><!--  toda a caxinha-->
                <div class="cor-foto-b box-andre col-sm-12 col-md-12 col-lg-12"> </div><!-- barrinha verde da caixinha -->
                <div  class="foto-b" style="background-image: url(../img/barbara.jpeg)"></div><!-- bolinha que contém imagem -->
                <div class="texto">
                    <p class="text-b"> <br> Eu sou a Bárbara, a gerente deste projeto. Minha principal função no projeto foi no desenvolvimento back-end do site, além de ter ajudado também no seu layout. Como gerente, fui responsável por organizar nossos cronogramas e tarefas.</p><br>
                </div> <!-- texto de informação -->
                <div class="guarda-logo">
                    <a href="https://pt-br.facebook.com/"><img src="../img/facebook.png" class="logos"></a>
                    <a href="https://www.instagram.com/"><img src="../img/instagram.png" class="logos"></a>
                    <a href="https://mail.google.com/mail/"><img src="../img/gmail.png" class="logos"></a>
                    <a href="https://twitter.com/login?lang=pt"><img src="../img/ttw.png" class="logos"></a>
                </div>    
            </div>

            <!-- CAMILA -->
            <div class="box-camila col-sm-8 col-md-6 col-lg-3"><!--  toda a caxinha-->
                <div class="cor-foto-c box-andre col-sm-12 col-md-12 col-lg-12"> </div><!-- barrinha verde da caixinha -->
                <div  class="foto-c" style="background-image: url(../img/camila.jpg)"></div><!-- bolinha que contém imagem -->
                <div class="texto">
                    <p class="text-c"><br> Eu sou a Camila, desenvolvedora back-end do projeto. Além de desenvolver as funcionalidades internas do site, exerci também o papel de designer do grupo, sendo responsável pelos logos (do site e do grupo) e pela paleta de cores.
                    </p><br>
                </div> <!-- texto de informação -->
                <div class="guarda-logo">
                    <a href="https://pt-br.facebook.com/"><img src="../img/facebook.png" class="logos"></a>
                    <a href="https://www.instagram.com/"><img src="../img/instagram.png" class="logos"></a>
                    <a href="https://mail.google.com/mail/"><img src="../img/gmail.png" class="logos"></a>
                    <a href="https://twitter.com/login?lang=pt"><img src="../img/ttw.png" class="logos"></a>
                </div>    
            </div>
        
        </div>

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
    </body>
</html>