<?php

    if(!isset($_SESSION)){ //inicia a sessão
        session_start();
    }

    session_destroy(); //destroi ela

    header("Location: ../html/index.php"); //leva para o index

?>