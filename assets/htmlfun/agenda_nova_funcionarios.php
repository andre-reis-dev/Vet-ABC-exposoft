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
    <link rel="stylesheet" href="../css/style_agenda_nova.css">
    <link rel="stylesheet" href="../css/style-global.css">
    <link rel="stylesheet" href="../css/rodape.css">
    <title>Agenda</title>
</head>
<body>
    <header class="area-logo"><!-- Aqui fica a logo da página -->
        <img class="col-sm-5 col-md-3 col-lg-2" src="../img/logo.png" alt="logo da empresa vet abc">
    </header>
    
    <nav class="main-nav-bar"><!-- Essa div vai conter o MENU -->
            <span class="material-symbols-outlined three-bars col-sm-2" onclick="toggleMenu()">menu</span>
            <ul id="menu">
                <li><a href="index_fun.php">Home</a></li>
                <li><a href="quemsomos_funcionarios.php">Quem Somos</a></li>
                <li><a href="agenda_nova_funcionarios.php">Agenda</a></li>
                <li><a class="login-cadastro" href="pag_cadastro_animal.php">Cadastro do animal</a></li>
                <li><a class="login-cadastro" href="../php/logout.php">Sair</a></li>
                <li><a href="cadastro_consulta.php">Agendar Consulta</a></li>
            </ul>
        </nav>
        <nav class="nav-menu-mobile">
            <label for="three-bars" id="three-bars" class="material-symbols-outlined three-bars col-sm-2" onclick="toggleMenu()">menu</label>
            <ul id="menu-mobile">
                <li><a href="index_fun.php">Home</a></li>
                <li><a href="quemsomos_funcionarios.php">Quem Somos</a></li>
                <li><a href="agenda_nova_funcionarios.php">Agenda</a></li>
                <li><a class="login-cadastro" href="pag_cadastro_animal.php">Cadastro</a></li>
                <li><a class="login-cadastro" href="../php/logout.php">Sair</a></li>
                <li><a href="cadastro_consulta.php">Agendar Consulta</a></li>
            </ul>
        </nav>


    <h1>Consultas Marcadas</h1>

                <main class='col-lg-11'>
                    <div class='month-container'>
                        <span class='material-symbols-outlined' id='arrow-left' onclick='toggleMonth(0)'>chevron_left</span>
                        <span class='month' id='monthBanner'><strong>Outubro</strong></span>
                        <span class='material-symbols-outlined' id='arrow-right' onclick='toggleMonth(1)'>chevron_right</span>
                    </div>
                </main>

    <?php

        if(!isset($_SESSION)){ //inicia a sessão
            session_start();
        }
    
        $verifica_meses = ["-01-","-02-","-03-","-04-","-05-","-06-","-07-","-08-","-09-","-10-","-11-","-12-"];

        $conexao=mysqli_connect("localhost","root","","vet-abc"); //leva a conexão ao banco de dados
    
        $sql = "SELECT * FROM `cadconsulta` WHERE data_consulta LIKE '%-10-%'"; //seleciona o nome do cadastro consulta onde o nascimento do animal é em outubro (-10-)
    
        $cont = 0; //variavel que ajuda a separar as colunas
        
        $result=mysqli_query($conexao,$sql); //resultado
    
            while ($linha = mysqli_fetch_array($result)){

                echo "<main class='col-lg-11'>
                    <div class='day-container'> 
                        <div id='top' class='top' onclick='showEvent(".$cont.")'>
                            <h2>"; //chamo td isso na tela (style)

                echo $linha['data_consulta']."</h2>
                            <span class='material-symbols-outlined show-buttons'>expand_more</span>
                            <hr>
                        </div>
                        <div id='event-content' class='event-content'>
                            <p>
                                <h4><strong>Nome do Dono: </strong></h4>
                                <span>"; //aqui eu coloco a data da consulta acomulada no array (data_consulta)

                echo $linha['nome']."</span>
                            </p>
            
                            <p>
                                <h4><strong>Horário da Consulta </strong></h4>
                                <span>"; //coloca o nome do dono (nome)

                echo $linha['horas']."</span> 
                            </p>
                            <p>
                                <h4><strong>Tipo do Exame: </strong></h4>
                                <span>"; //horario tbm acomulado do array (horas)

                echo $linha['tipo_exame']."</span>
                            </p>
                            <p>
                                <h4><strong>Tipo Animal: </strong></h4>
                                <span>"; //tipo do exame acomulado do array
                                
                echo $linha['tipo_animal']."</span>
                            </p>
                        </div>
                    </div>
                </main>"; //tudo está sendo puxado pelo banco de dados pela tabela de cad_consulta

                    $cont++; //soma a variavel
            }
    ?>

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
    <script src="../javascript/show_consultas.js"></script>
</body>
</html>