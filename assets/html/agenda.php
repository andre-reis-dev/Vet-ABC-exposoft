<?php
    include('../php/conexao.php');
    include('../php/protecaoAgenda.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
    <link rel="stylesheet" href="../css/style-glob.css">
    <link rel="stylesheet" href="../css/style-rodape.css">
    <link rel="stylesheet" href="../css/style-agenda-cl.css">
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
            <li><a href="ajuda.php">Dúvidas</a></li>
            <li><a href="quemsomos.php">Quem Somos</a></li>
            <li><a class="login-cadastro" href="../php/logout.php">Sair</a></li>
        </ul>
    </nav>
    <nav class="nav-menu-mobile">
        <label for="three-bars" id="three-bars" class="material-symbols-outlined three-bars col-sm-2" onclick="toggleMenu()">menu</label>
        <ul id="menu-mobile">
            <li><a href="index.php">Home</a></li>
            <li><a href="agenda.php">Consulta</a></li>
            <li><a href="ajuda.php">Dúvidas</a></li>
            <li><a href="quemsomos.php">Quem Somos</a></li>
            <li><a class="login-cadastro" href="../php/logout.php">Sair</a></li>
        </ul>
    </nav>
    <div class='event-conteiner'>

    <?php

        if(!isset($_SESSION)){ //inicia a sessão
            session_start();
        }
        
        if(isset($_SESSION['user'])){

            $sql_email = "SELECT * FROM `cadastro` WHERE email LIKE '".$_SESSION['user']."'";//seleciono o cpf do email do usuário
            $resulta_email = mysqli_query($conexao,$sql_email); //faço a ação

            while ($linha1 = mysqli_fetch_array($resulta_email)){
                $cpf = $linha1['cpf'];
                $nome = $linha1['nome'];
                $sql_pesquisa = "SELECT date_format(data_consulta, '%d/%m/%Y'), data_consulta, nome_animal, medico, horas, tipo_exame FROM cadconsulta WHERE cpf_dono = '".$cpf."' ORDER BY data_consulta ASC "; //pego tudo da tabela cadconsulta onde o cpf é igual ao cpf do usuário
                $resulta_cpf = mysqli_query($conexao,$sql_pesquisa); //faço a ação
                $numero_linhas = mysqli_num_rows($resulta_cpf);
                
                if($numero_linhas != 0 && $numero_linhas <= 3){
                    while ($linha = mysqli_fetch_array($resulta_cpf)){

                    $data = $linha['data_consulta'];
                    $data = implode("/",array_reverse(explode("-",$data)));

                    echo "<main>
                        <div class='event-info col-sm-12 col-md-11 col-lg-12'>
                            <div class='title'>
                                <h1>Consulta ".$data."</h1>
                            </div>
                            <div class='event-content'>
                                <div>
                                    <h3>Nome do Cliente</h3>
                                    <span>".$linha1['nome']."</span>
                                </div>
                                <div>
                                    <h3>Nome do Animal</h3>
                                    <span>".$linha['nome_animal']."</span>
                                </div>
                                <div>
                                    <h3>Nome do Profissional</h3>
                                    <span>".$linha['medico']."</span>
                                </div>
                                <div>
                                    <h3>Horário da Consulta </h3>
                                    <span><span class='material-symbols-outlined clock'> schedule </span>".$linha['horas']."</span>
                                </div>
                                <div>
                                    <h3>Sobre a Consulta:</h3>
                                    <span>".$linha['tipo_exame']."</span>
                                </div>
                            </div>
                        </div>
                    
                    </main>";
                    echo "<br>";
                    }

                }else if($numero_linhas > 3){
                    while ($linha = mysqli_fetch_array($resulta_cpf)){

                        $data = $linha['data_consulta'];
                        $data = implode("/",array_reverse(explode("-",$data)));

                        echo "<main>
                            <div class='event-info col-sm-12 col-md-11 col-lg-12'>
                                <div class='title'>
                                    <h1>Consulta ".$data."</h1>
                                </div>
                                <div class='event-content'>
                                    <div>
                                        <h3>Nome do Cliente</h3>
                                        <span>".$linha1['nome']."</span>
                                    </div>
                                    <div>
                                        <h3>Nome do Animal</h3>
                                        <span>".$linha['nome_animal']."</span>
                                    </div>
                                    <div>
                                        <h3>Nome do Profissional</h3>
                                        <span>".$linha['medico']."</span>
                                    </div>
                                    <div>
                                        <h3>Horário da Consulta </h3>
                                        <span><span class='material-symbols-outlined clock'> schedule </span>".$linha['horas']."</span>
                                    </div>
                                    <div>
                                        <h3>Sobre a Consulta:</h3>
                                        <span>".$linha['tipo_exame']."</span>
                                    </div>
                                </div>
                            </div>
                        
                        </main>";
                    }
                
                }else{
                    echo "<link rel='stylesheet' href='../css/style-na-agenda.css'>";
                    echo "<div></div>"; //essa div foi criada para centralizar a div debaixo
                    echo "<div class='mensagem col-lg-12'><h3>Ops... parece que você não tem nenhuma consulta marcada. Acesse a página de ajuda e saiba como agendar uma consulta clicando <a class='duvida' href='ajuda.php'>aqui.</a></h3>
                        <img class='cao' src='../img/cao.png'>
                    </div>";
                    echo "<style>.rod{margin:0px;}</style>";
                }
            }
        }
    ?>
    </div>
    <footer class="rod rodape col-sm-12 col-md-12 col-lg-12">
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
    <script src="../javascript/agenda.js"></script>
</body>
</html>