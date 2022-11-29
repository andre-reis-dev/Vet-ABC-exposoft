<?php
include('conexao.php');

if (isset($_POST["cadastrar_animal"])){ #se o botão 'cadastrar_animal' for apertado aconte: 

    $cpf_dono = $_POST['cpf_dono']; #cria a váriavel $email e da pra ela o valor do que foi digitado no campo email dono
    $nome_animal=$_POST['nome_animal']; //
    $idade=$_POST['idade']; //
    $tamanho=$_POST['tamanho']; // 
    $tipo_animal=$_POST['tipo_animal']; //
    $raca=$_POST['raca']; //

    $sql_cpf_existe =  "SELECT * FROM cadastro WHERE cpf = '$cpf_dono'"; //essa variavel verifica se o email digitado existe na tabela de cadastro de clientes
    
    $result = mysqli_query($conexao,$sql_cpf_existe); //testa a conexão

    $quantidade = mysqli_num_rows($result); //da a variavel $quantidade, a qtd de linhas encontradas

    if($quantidade == 0){ // se a $quantidade for diferente de 1 significa que não tem nenhum email de dono cadastrado

        echo "<script> alert('Cpf não cadastrado')</script>";
        echo "<script> window.location.href='../html/cadastro.php'</script>";

    }else{
        $sql_animal =  "SELECT * FROM cadanimal WHERE nome_animal = '$nome_animal'";
        $result2 = mysqli_query($conexao,$sql_animal);
        $quantidade2 = mysqli_num_rows($result2);
        if($quantidade2 != 0){
            echo "<script> alert('Animal já cadastrado')</script>";
            echo "<script> window.location.href='../htmlfun/cadastro_consulta.php'</script>";}
        else{ // se já tiver um email segue o cadastro normalmente
            $sql= "INSERT INTO cadanimal (nome_animal, idade, tamanho, tipo_animal, raca, cpf_dono) VALUES ('$nome_animal','$idade', '$tamanho','$tipo_animal','$raca','$cpf_dono')";
            
                $result=mysqli_query($conexao,$sql);
                echo "<script> window.location='../htmlfun/cadastro_consulta.php'</script>";
            }
        
    }
}
?>