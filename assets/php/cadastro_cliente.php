<?php
if (isset($_POST["cadastrar"]))
{
    $conexao=mysqli_connect("localhost","root","","vet-abc");
    $nome=$_POST['nome'];
    $cpf=$_POST['cpf'];
    $telefone=$_POST['telefone'];
    $email=$_POST['email'];
    $senha=$_POST['senha'];
    $conf_senha = $_POST['conf_senha'];

    if ($conf_senha != $senha) {  #ver se as senhas conferem 
        echo "oi!";

        echo "<script>alert('Senhas não conferem, por favor, insira novamente!'); window.location='../html/cadastro.php'</script>";
        
    } else {  
            $sql_email = "SELECT * FROM cadastro WHERE email = '$email' ";
            $result = mysqli_query($conexao,$sql_email);
        
            If (mysqli_num_rows($result) != 0){ 
            
              echo "<script> alert ('email existente')</script>";
        } else {

        $sql= "INSERT INTO cadastro (nome, cpf, telefone, email, senha) VALUES ('$nome','$cpf', '$telefone', '$email','$senha')";
    
        $result=mysqli_query($conexao,$sql);

        header("Location: ../html/login.php");
        }
    }
}  
?>