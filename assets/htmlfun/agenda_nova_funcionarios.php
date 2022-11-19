<?php
    include('../php/protecaoAgenda.php'); //inclui o php de proteção da agenda
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
        <link rel="stylesheet" href="../css/style-na-agenda.css">
        <link rel="stylesheet" href="../css/style-global.css">
        <link rel="stylesheet" href="../css/rodape.css">
        
        <title>Agenda</title>
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


        <h1 class="h1_consulta">Consultas Marcadas</h1>
                <main id='monthBanner'></main>

        <form method="post"> 
            <div id="selecionar">
            <span class='month'><strong>Selecione o Mês</strong></span><br><br>
                <select id="escolher"  name="escolher"> <!--o value é o valor do option,o q esta dentro é o nome do que aparece na tela-->
                    <option value ='01'>Janeiro</option> 
                    <option value ='02'>Fevereiro</option>
                    <option value ='03'>Março</option>
                    <option value ='04'>Abril</option>
                    <option value ='05'>Maio</option>
                    <option value ='06'>Junho</option>
                    <option value ='07'>Julho</option>
                    <option value ='08'>Agosto</option>
                    <option value ='09'>Setembro</option>
                    <option value ='10'>Outubro</option>
                    <option value ='11'>Novembro</option>
                    <option value ='12'>Dezembro</option>
                </select>
                <input type='submit' value='Procurar' name='conclui'></input>
            </div>
        </form>

        <img class="images" src="../img/fundo.png">

        <?php
            if(!isset($_SESSION)){ //inicia a sessão
                session_start();
            }

            if (isset($_POST["conclui"])){ //se a pessoa apertou o botao 'conclui' vai seguir o cdg abaixo

            $escolher = $_POST['escolher']; //crio a variavel escolher e jogo dentro dela o valor da opção q foi escolhida (mes selecionado)

            $conexao=mysqli_connect("localhost","root","","vet-abc"); //leva a conexão ao banco de dados

            $sql = "SELECT date_format(data_consulta, '%d/%m/%Y'), data_consulta, nome_animal, medico, horas, cpf_dono, tipo_exame FROM cadconsulta WHERE data_consulta LIKE '%-".$escolher."-%' ORDER BY data_consulta ASC "; //seleciona o nome do cadastro consulta onde o nascimento do animal é da variavel escolher

            $cont = 0; //variavel que ajuda a separar as colunas
            
            $result=mysqli_query($conexao,$sql); //resultado

                while ($linha = mysqli_fetch_array($result)){

                    $date = $linha['data_consulta'];
                    $date = implode("/",array_reverse(explode("-",$date))); //troco o - por / no dia e mes

                    echo "<style>.images{display:none;}</style>";

                    echo "<main class='col-lg-11'>
                        <div class='day-container'> 
                            <div id='top' class='top' onclick='showEvent(".$cont.")'>
                                <h2>"; //chamo td isso na tela (style) | usa o cont para enviar o valor do parametro n na função do javascript

                    echo $date."</h2> 
                                <span class='material-symbols-outlined show-buttons'>expand_more</span>
                                <hr>
                            </div>
                            <div id='event-content' class='event-content'>
                                <p>
                                    <h4><strong>Nome do Médico: </strong></h4>
                                    <span>"; //aqui eu coloco a data da consulta acomulada no array (data_consulta)
                    echo $linha['medico']."</span>
                                </p>
                                <p>
                                    <h4><strong>Cpf do Dono: </strong></h4>
                                    <span>"; 

                    echo $linha['cpf_dono']."</span>
                                </p>
                                <p>
                                    <h4><strong>Horário da Consulta </strong></h4>
                                    <span>"; //coloca o cpf do dono

                    echo $linha['horas']."</span> 
                                </p>
                                <p>
                                    <h4><strong>Tipo do Exame: </strong></h4>
                                    <span>"; //horario tbm acomulado do array (horas)

                    echo $linha['tipo_exame']."</span>
                                </p>
                                <p>
                                    <h4><strong>Nome do Animal: </strong></h4>
                                    <span>"; //tipo do exame acomulado do array
                                    
                    echo $linha['nome_animal']."</span>
                                </p>
                            </div>
                        </div>
                    </main>"; //tudo está sendo puxado pelo banco de dados pela tabela de cad_consulta

                    $cont++; //soma a variavel
                }
            }
        ?>

        <div class="footer">
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
        </div>
    
        <script src="../javascript/toggle_menu.js"></script>
        <script src="../javascript/show_consultas.js"></script>
    </body>
</html>