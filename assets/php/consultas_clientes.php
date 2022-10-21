<?php
if (!isset($_SESSION)) {
    session_start();   
}
$conexao = mysqli_connect("localhost", "andre", "@sR290905", "vet-abc");

$_SESSION['nome_usuário'] = $_POST['$nome'];








?>