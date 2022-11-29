<html>
    <head>
        <link rel="stylesheet" href="../css/style_agenda_nova.css">
        <link rel="stylesheet" href="../css/style-global.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">   
    </head>
    <body>
        <script src="../javascript/show_consultas.js"></script>
    </body>
</html>

<?php

    include('conexao.php');

    if(!isset($_SESSION)){ //inicia a sessão
        session_start();
    }

    $sql = "SELECT * FROM `cadconsulta` WHERE nasc_animal LIKE '%-06-%'"; //seleciona o nome do cadastro consulta onde o nascimento do animal é em outubro (-10-)

    $result=mysqli_query($conexao,$sql); //resultado

        while ($linha = mysqli_fetch_array($result)){  //cria um while para guardar os valores

            echo "<main class='col-lg-11'>
            <div class='month-container'>
                <span class='material-symbols-outlined' id='arrow-left' onclick='toggleMonth(0)'>chevron_left</span>
                <span class='month' id='monthBanner'><strong>Outubro</strong></span>
                <span class='material-symbols-outlined' id='arrow-right' onclick='toggleMonth(1)'>chevron_right</span>
            </div>
            <div class='day-container'>
                <div id='top' class='top' onclick='showEvent(0)'>
                    <h2>Hoje</h2> 
                    <span class='material-symbols-outlined show-buttons'>expand_more</span>
                    <hr>
                </div>
                <div id='event-content' class='event-content'>
                    <p>
                        <h4><strong>Nome do Dono: </strong></h4>
                        <span>Fulaninho</span>
                    </p>
    
                    <p>
                        <h4><strong>Horário da Consulta </strong></h4>
                        <span>12:45</span>
                    </p>
    
                    <p>
                        <h4><strong>Raça do Pet: </strong></h4>
                        <span>Pitbull</span>
                    </p>
                </div>
            </div>
            <div class='day-container'>
                <div class='top' onclick='showEvent(1)'>
                    <h2>Dia 26</h2>
                    <span class='material-symbols-outlined show-buttons'>expand_more</span>
                    <hr>
                </div>
                <div class='event-content'>
                    <p>
                        <h4><strong>Nome do Dono: </strong></h4>
                        <span>Fulaninho</span>
                    </p>
    
                    <p>
                        <h4><strong>Horário da Consulta </strong></h4>
                        <span>12:45</span>
                    </p>
    
                    <p>
                        <h4><strong>Raça do Pet: </strong></h4>
                        <span>Pitbull</span>
                    </p>
                </div>
            </div>
            <div class='day-container'>
                <div class='top' onclick='showEvent(2)'>
                    <h2>Dia 26</h2>
                    <span class='material-symbols-outlined show-buttons'>expand_more</span>
                    <hr>
                </div>
                <div class='event-content'>
                    <p>
                        <h4><strong>Nome do Dono: </strong></h4>
                        <span>Fulaninho</span>
                    </p>
    
                    <p>
                        <h4><strong>Horário da Consulta </strong></h4>
                        <span>12:45</span>
                    </p>
    
                    <p>
                        <h4><strong>Raça do Pet: </strong></h4>
                        <span>Pitbull</span>
                    </p>
                </div>
            </div>
            <div class='day-container'>
                <div class='top' onclick='showEvent(3)'>
                    <h2>Dia 26</h2>
                    <span class='material-symbols-outlined show-buttons'>expand_more</span>
                    <hr>
                </div>
                <div class='event-content'>
                    <p>
                        <h4><strong>Nome do Dono: </strong></h4>
                        <span>Fulaninho</span>
                    </p>
    
                    <p>
                        <h4><strong>Horário da Consulta </strong></h4>
                        <span>12:45</span>
                    </p>
    
                    <p>
                        <h4><strong>Raça do Pet: </strong></h4>
                        <span>Pitbull</span>
                    </p>
                </div>
            </div>
        </main>";
                        
            
        }
?>