<?php
if (isset($_POST["cad"])){
    $conexao=mysqli_connect("localhost","root","","vet-abc");
    
    $email= $_POST['email'];
    $novo = $_POST['novo'];

    $atua = "UPDATE cadastro SET email='$novo' WHERE email = '$email' ";
    $resultado = mysqli_query($conexao,$atua);

}
?>  