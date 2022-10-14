
<?php

if (isset($_POST["cadastro"]))
{
    $conexao=mysqli_connect("localhost","root","","vet-abc");
    $nome=$_POST['nome'];
    $cpf=$_POST['cpf'];
    $telefone=$_POST['telefone'];
    $email=$_POST['email'];
     $senha=$_POST['senha'];
     $conf_senha=$_POST['conf_senha'];
    
    $sql= "INSERT INTO cadastro(nome, cpf, telefone, email, senha, conf_senha) VALUES ('$nome','$cpf', '$telefone', '$email','$senha', '$conf_senha')";
    
   $result=mysqli_query($conexao,$sql);
}
?>