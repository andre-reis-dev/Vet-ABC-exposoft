

<?php

if (isset($_POST["cadastrar"]))
{
    $conexao=mysqli_connect("localhost","root","","vet-abc");
<<<<<<< Updated upstream
    $nome=$_POST['nome'];
    $cpf=$_POST['cpf'];
    $telefone=$_POST['telefone'];
    $email=$_POST['email'];
    $senha=$_POST['senha'];
=======
    $nome=$_POST["nome"];
    $cpf=$_POST["cpf"];
    $telefone=$_POST["telefone"];
    $email=$_POST["email"];
     $senha=$_POST["senha"];
     
>>>>>>> Stashed changes
    
    $sql= "INSERT INTO cadastro (nome, cpf, telefone, email, senha) VALUES ('$nome','$cpf', '$telefone', '$email','$senha')";
    
   $result=mysqli_query($conexao,$sql);

<<<<<<< Updated upstream
   header("Location: ../html/login.php");
=======
   header ("location: ../html/loguin.php")
>>>>>>> Stashed changes
}
?>