<?php
if (isset($_POST["cadastrar_animal"])){ #se o botão 'cadastrar_animal' for apertado aconte: 

    $conexao=mysqli_connect("localhost","root","","vet-abc"); #cria a conexão com o banco de dados

    $cpf_dono = $_POST['cpf_dono']; #cria a váriavel $email e da pra ela o valor do que foi digitado no campo email dono
    $nome_animal=$_POST['nome_animal']; //
    $idade=$_POST['idade']; //
    $tamanho=$_POST['tamanho']; // 
    $tipo_animal=$_POST['tipo_animal']; //
    $raca=$_POST['raca']; //

    $sql_cpf_existe =  "SELECT * FROM cadastro WHERE cpf = '$cpf_dono''"; //essa variavel verifica se o email digitado existe na tabela de cadastro de clientes
    
    $result = mysqli_query($conexao,$sql_cpf_existe); //testa a conexão

    $quantidade = mysqli_num_rows($result); //da a variavel $quantidade, a qtd de linhas encontradas

    if($quantidade != 1){ // se a $quantidade for diferente de 1 significa que não tem nenhum email de dono cadastrado

        echo "<script> alert('Cpf não existente')</script>";

    }else{ // se já tiver um email segue o cadastro normalmente
    $sql= "INSERT INTO cadanimal (nome_animal, idade, tamanho, tipo_animal, raca, cpf_dono) VALUES ('$nome_animal','$idade', '$tamanho','$tipo_animal','$raca','$cpf_dono')";
    
        $result=mysqli_query($conexao,$sql);
        echo "<script> window.location='../htmlfun/index_fun.php'</script>";
    }
}
?>