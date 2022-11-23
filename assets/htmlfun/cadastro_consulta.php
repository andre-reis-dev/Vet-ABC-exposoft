<?php
    include('../php/protecaoAgenda.php');
    include('../php/agenda_consulta.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/style-glob.css">
        <link rel="stylesheet" href="../css/style-rodape.css">
        <link rel="stylesheet" href="../css/cad_consultas.css">
        <title>Cadastro de Consultas</title>
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

        <form class="col-sm-12 col-md-11 col-lg-10" action="" method="post">
            <h1>Cadastro de Consulta</h1>
            <p>
                <label for="Nome">Cpf do dono</label>
                <input type="text" name="cpf_dono" id="cpf_dono" class="cpf_dono">
            </p>
            <p>
                <label for="Nome">Nome do Animal</label>
                <input type="text" name="nome_animal">
            </p>
            <p>
                <label for="Nome">Nome do Médico</label>
                <select name="medico">
                    <option value="Gabriel">Gabriel</option>
                    <option value="Gustavo">Gustavo</option>
                </select>
            </p>
            <p>
                <label for="Nome">Horário da Consulta</label>
                <input type="time" name="hora_consulta">
            </p>
            <p>
                <label for="Nome">Dia da Consulta</label>
                <input type="date" name="data_consulta">
            </p>
            <p>
                <label for="Nome">Tipo de Consulta</label>
                <input type="text" name="tipo_consulta">
            </p>
            <input class="button-submit col-sm-12 col-md-6 col-lg-4" type="submit" name="agendar" value="Marcar Consulta">
        </form>

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
        <script type="text/javascript" src="../javascript/jquery.js "></script>
        <script type="text/javascript" src="../javascript/jquerycfp.js"></script> 
        <script> $(document).ready(function(){
    $('#cpf_dono').mask('999.999.999-99');
});</script>
    </body>
</html>