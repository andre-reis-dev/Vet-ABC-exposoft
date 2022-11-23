<?php
include('conexao.php');

if (isset($_POST["cad"])){
    
    $email= $_POST['email'];
    $novo = $_POST['novo'];

    $atua = "UPDATE cadastro SET email='$novo' WHERE email = '$email' ";
    $resultado = mysqli_query($conexao,$atua);

    echo "<script> window.location.href=' ../html/login.php'</script>";

}
?>  