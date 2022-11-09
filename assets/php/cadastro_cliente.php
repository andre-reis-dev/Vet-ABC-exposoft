<?php

if (isset($_POST["cadastrar"])){
    $conexao=mysqli_connect("localhost","root","","vet-abc");
    $nome=$_POST['nome'];
    $cpf=$_POST['cpf'];
    $telefone=$_POST['telefone'];
    $email=$_POST['email'];
    $senha=$_POST['senha'];
    $conf_senha = $_POST['conf_senha'];

 
        $sql_email = "SELECT * FROM cadastro WHERE email = '$email' ";
        $result1 = mysqli_query($conexao,$sql_email);
        
        if (mysqli_num_rows($result1) != 0){  
         
            echo "<script>
                alert ('email ja cadastrado')</script>";

                while ($linha = mysqli_fetch_array($result1)){
                    if ($cpf == $linha['cpf']){
                        echo "<script>
                        alert ('cpf ja cadastrado')</script>";
                    } 
              

                $sql_cpf = "SELECT * FROM cadastro WHERE cpf = '$cpf'";
            $result2 = mysqli_query($conexao,$sql_cpf);
            if(mysqli_num_rows($result2) != 0){
                echo "<script> alert (' cpf ja cadastrado')</script>";
                
                echo "<script> window.location.href= '../html/login.php'</script>"; 

            }
                                    }
    }else{
            $sql_cpf = "SELECT * FROM cadastro WHERE cpf = '$cpf'";
            $result2 = mysqli_query($conexao,$sql_cpf);
            if(mysqli_num_rows($result2) != 0){
                echo "<script> alert (' cpf ja cadastrado, cadastrar novo email')</script>"; }
              else {         
              $sql=" INSERT INTO cadastro(nome, cpf, telefone, email, senha) VALUES ('$nome', '$cpf','$telefone', '$email', '$senha')";
            $result=mysqli_query($conexao,$sql);
            echo "<script> window.location.href=' ../html/login.php'</script>"; }
              }
        
}      

?>