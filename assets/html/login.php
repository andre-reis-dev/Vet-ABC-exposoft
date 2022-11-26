<html>
    <head>
        <title>Login</title>
        <meta name="viewport" charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"><!-- IMG DO TRIBAR -->
        <link rel="stylesheet" href="../css/style-login.css">
        <link rel="stylesheet" href="../css/style-glob.css">
        <link rel="stylesheet" href="../css/style-rodape.css">
    </head>
    <body>
        
        <header class="area-logo"><!-- Aqui fica a logo da página -->
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
            </ul>
        </nav>
            
        <form class="formulario" action="../php/loginteste.php" method="post" name="formulario"> <!-- Cria um formulário -->
            <h1>Login</h1>

            <div>
                <label>Email de Cadastro:</label>
                <input class="resposta" type="text" name="email" placeholder="Digite o nome">
            </div>

            <div>
                <label>Senha:</label>
                <input class="resposta" type="password" name="senha" placeholder="Confirme a senha">
            </div>
            <!-- placeholder é o que aparece dentro da caixinha -->

            <input class="botao" type="submit" name="cadastrar" value="Logar"> <!-- botão -->
        </form>
        
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