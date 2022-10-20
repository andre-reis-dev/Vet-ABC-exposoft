<html>
    <head>
        <title>Cadastro</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
        <meta name="viewport" charset="utf-8"> <!-- IMG DO TRIBAR -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="stylesheet" href="../css/style-cadastro.css">
        <link rel="stylesheet" href="../css/style-global.css">
        <link rel="stylesheet" href="../css/rodape.css">
    </head>
    <body>       
        <header class="area-logo"><!-- Aqui fica a logo da página -->
            <img class="col-sm-5 col-md-3 col-lg-2" src="../img/logo.png" alt="logo da empresa vet abc">
        </header>
        
        <nav class="main-nav-bar">
            <ul id="menu">
                <li><a href="index.php">Home</a></li>
                <li><a href="agenda.php">Consulta</a></li>
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
                <li><a href="quemsomos.php">Quem Somos</a></li>
                <li><a class="login-cadastro logout" href="login.php">Login</a></li>
                <li><a class="login-cadastro logout" href="cadastro.php">Cadastro</a></li>
                <li><a class="login-cadastro sair" href="../php/logout.php">Sair</a></li>
            </ul>
        </nav>
        
        <div class="cadastro col-sm-8 col-md-6 col-lg-4"><!-- Essa div vai conter os cadastros -->
            <form class="formulario" action="../php/cadastro_cliente.php" method="post" name="formulario"> <!-- Cria um formulário -->
                <label>Nome Completo:</label><br>
                <input class="resposta" type="text" name="nome" placeholder="Digite o nome"><br><br>

                <label> CPF:</label><br>
                <input class="resposta" type="text" name="cpf" placeholder="Digite o CPF"><br><br>

                <label> Telefone:</label><br>
                <input class="resposta" type="text" name="telefone" placeholder="Digite o telefone"><br><br>

                <label>Email:</label><br>
                <input class="resposta" type="text" name="email" placeholder="Digite o email"><br><br>

                <label>Senha:</label><br>
                <input class="resposta" type="password" name="senha" placeholder="Digite a senha"><br><br>

                <label>Confirmação da Senha:</label><br>
                <input class="resposta" type="password" name="conf_senha" placeholder="Confirme a senha"><br>
                <!-- placeholder é o que aparece dentro da caixinha -->

                <br><input class="botao" type="submit" name="cadastrar" value="cadastrar"> <!-- aqui eu crio um botão -->

                
            </form>
        </div>

        <footer class="rodape col-sm-12 col-md-12 col-lg-12"> <!-- rodapé -->
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


    