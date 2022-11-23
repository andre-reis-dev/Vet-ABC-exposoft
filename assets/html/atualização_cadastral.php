<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="../css/atualizacao_cadastral.css">
    <link rel="stylesheet" href="../css/style-glob.css">
    <link rel="stylesheet" href="../css/style-rodape.css">
    <link rel="stylesheet" href="../css/style-global.css">
    <link rel="stylesheet" href="../css/rodape.css">
    <title>Atualização Cadastral</title>
</head>
<body>
    <div class="container">
        <header>
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
            </ul>
        </nav>
        
        <main>
            <form action="../php/atualizacao_cadastral.php" method="POST">
            <form action="../php/atualização_cadastral.php" method="POST">
                <h1>Atualização Cadastral</h1>
                <div>
                    <label for="campo1">Email anterior</label>
                    <input type="text" name="email">
                </div>
                <div>
                    <label for="campo2">Email atual</label>
                    <input type="text" name="novo">
                </div>
                
                <input class="botao" type="submit" name="cad" value="cadastrar">
            </form>
        </main>

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
    </div>

    <script src="../javascript/toggle_menu.js"></script>
</body>
</html>