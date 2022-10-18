
<?php

if (isset($_POST["cadastrar"]))
{
    $conexao=mysqli_connect("localhost","root","","vet-abc");
    $nome=$_POST['nome'];
    $cpf=$_POST['cpf'];
    $telefone=$_POST['telefone'];
    $email=$_POST['email'];
    $senha=$_POST['senha'];
    
    $sql= "INSERT INTO cadastro (nome, cpf, telefone, email, senha) VALUES ('$nome','$cpf', '$telefone', '$email','$senha')";
    
   $result=mysqli_query($conexao,$sql);

   header("Location: ../html/login.php");
}
?>