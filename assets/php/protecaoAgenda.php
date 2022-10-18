<?php

    if(!isset($_SESSION)){
        session_start();
    }

    if(!isset($_SESSION['user'])){
        die("Você não está logado!");
    }

?>