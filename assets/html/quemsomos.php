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
        <title>Login</title>
        <meta name="viewport" charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"><!-- IMG DO TRIBAR -->
        <link rel="stylesheet" href="../css/style-rodape.css">
        <link rel="stylesheet" href="../css/style-qemsomos.css">
        <link rel="stylesheet" href="../css/style-glob.css">
    </head>
    
    <body>
        <header class="area-logo"> <!-- parte branca da logo -->
            <img class="col-sm-5 col-md-3 col-lg-2" src="../img/logo.png" alt="logo da empresa vet abc"><!-- imagem logo -->
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
            

        <div class="caixote"><!-- armazena todas as caixinhas -->
            <!-- ANDRÉ -->
            <div class="box-andre col-sm-8 col-md-6 col-lg-4"> <!--  toda a caxinha-->
                <div class="cor-foto-a box-andre col-sm-12 col-md-12 col-lg-12"> </div> <!-- barrinha verde da caixinha -->
                <div  class="foto-a" style="background-image: url(../img/andr%C3%A9.jpg)"></div><!-- bolinha que contém imagem -->
                <div class="texto"><!-- div de texto -->
                    <p class="text-a"> <br> Eu sou o André Reis, desenvolvedor front-end do projeto. Apesar de estar encarregado do layout das páginas, também dei uma ajudinha com o back-end do projeto. Fui responsável também por desenvolver nosso aplicativo móvel. </p><br>
                </div> <!-- texto de informação -->
                <div class="guarda-logo">
                    <a href="https://pt-br.facebook.com/"><img src="../img/facebook.png" class="logos"></a>
                    <a href="https://www.instagram.com/"><img src="../img/instagram.png" class="logos"></a>
                    <a href="https://mail.google.com/mail/"><img src="../img/gmail.png" class="logos"></a>
                    <a href="https://twitter.com/login?lang=pt"><img src="../img/ttw.png" class="logos"></a>
                </div>    
            </div>

            <!-- BÁRBARA -->
            <div class="box-barbara col-sm-8 col-md-6 col-lg-4"><!--  toda a caxinha-->
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
            <div class="box-camila col-sm-8 col-md-6 col-lg-4"><!--  toda a caxinha-->
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