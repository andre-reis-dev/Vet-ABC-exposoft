<?php
    if(!isset($_SESSION)){ ///inicia sessão
        session_start();
    }

    if(!isset($_SESSION['user'])){ //se a pessoa não estiver logada ocorre:
        die(header("Location: ../html/login.php")); //leva para a pag de login
    } 
?>