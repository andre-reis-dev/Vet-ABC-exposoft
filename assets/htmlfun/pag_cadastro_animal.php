<html>
    <head>
        <title>Cadastro</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
        <meta name="viewport" charset="utf-8"> <!-- IMG DO TRIBAR -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="stylesheet" href="../css/style-do-cadastro.css">
        <link rel="stylesheet" href="../css/style-glob.css">
        <link rel="stylesheet" href="../css/style-rodape.css">
    </head>
    <body>       
        <header class="area-logo"><!-- Aqui fica a logo da página -->
            <img class="col-sm-5 col-md-3 col-lg-2" src="../img/logo.png" alt="logo da empresa vet abc">
        </header>
        
        <nav class="main-nav-bar"><!-- Essa nav vai conter o MENU -->
            <span class="material-symbols-outlined three-bars col-sm-2" onclick="toggleMenu()">menu</span>
            <ul id="menu">
                <li><a href="index_fun.php">Home</a></li>
                <li><a href="quemsomos_funcionarios.php">Quem Somos</a></li>
                <li><a href="agenda_nova_funcionarios.php">Agenda</a></li>
                <li><a href="cadastro_consulta.php">Agendar Consulta</a></li>
                <li><a href="pag_cadastro_animal.php">Cadastrar Animal</a></li>
                <li><a class="login-cadastro" href="../php/logout.php">Sair</a></li>
            </ul>
        </nav>
        <nav class="nav-menu-mobile">
            <label for="three-bars" id="three-bars" class="material-symbols-outlined three-bars col-sm-2" onclick="toggleMenu()">menu</label>
            <ul id="menu-mobile">
                <li><a href="index_fun.php">Home</a></li>
                <li><a href="quemsomos_funcionarios.php">Quem Somos</a></li>
                <li><a href="agenda_nova_funcionarios.php">Agenda</a></li>
                <li><a href="cadastro_consulta.php">Agendar Consulta</a></li>
                <li><a href="pag_cadastro_animal.php">Cadastrar Animal</a></li>
                <li><a class="login-cadastro" href="../php/logout.php">Sair</a></li>
            </ul>
        </nav>
        
        <div class="cadastro col-sm-8 col-md-6 col-lg-4"><!-- Essa div vai conter os cadastros -->
            <form class="formulario" action="../php/cadastro_animal.php" method="post" name="formulario"> <!-- Cria um formulário -->
                <label>Cpf do dono: </label><br>
                <input class="resposta" type="text" name="cpf_dono" placeholder="Cpf do Dono" id="cpf_dono" ><br><br>

                <label>Nome do Animal:</label><br>
                <input class="resposta" type="text" name="nome_animal" placeholder="Nome do animal"><br><br>

                <label>Idade:</label><br>
                <input class="resposta" type="text"  name="idade"  placeholder="Idade do animal"><br><br>
        
                <label>Porte do Animal:</label><br>
                <select name="tamanho">
                    <option value="Bem Pequeno">Bem Pequeno</option>
                    <option value="Pequeno">Pequeno</option>
                    <option value="Médio">Médio</option>
                    <option value="Grande">Grande</option>
                </select><br><br>

                <label>Tipo do Animal:</label><br>
                <input class="resposta" type="text" name="tipo_animal" placeholder="Exemplo: Cachorro"><br><br>

                <label>Raça:</label><br>
                <input class="resposta" type="text" name="raca" placeholder="Exemplo: Labrador"><br>
                <!-- placeholder é o que aparece dentro da caixinha -->

                <br><input class="botao" type="submit" name="cadastrar_animal" value="cadastrar"> <!-- aqui eu crio um botão -->

                
            </form>
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
        <script type="text/javascript" src="../javascript/jquery.js "></script>
        <script type="text/javascript" src="../javascript/jquerycfp.js"></script> 
        <script type="text/javascript" src="../javascript/jquery.js "></script>
        <script type="text/javascript" src="../javascript/jquerycfp.js"></script> 
        <script> 
            $(document).ready(function(){
                $('#cpf_dono').mask('999.999.999-99');
            });
        </script>
    </body>
</html>