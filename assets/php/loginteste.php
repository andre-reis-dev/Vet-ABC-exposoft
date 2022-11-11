<?php
    session_start(); //inicia uma sessão (isso permte saber se está logado ou não)
    $conexao=mysqli_connect("localhost","root","","vet-abc"); //leva a conexão até o banco de dados
    
    if(isset($_POST['email']) || isset($_POST['senha'])){ //esse email e senha é do html

        if(strlen($_POST['email']) == 0 ){ //caso a pessoa não tenha digitado nada aparecera isso
            echo "<script> alert('Preencha seu e-mail')</script>";
            header("Location: ../html/login.php");

        }else if(strlen($_POST['senha']) == 0 ){ // caso a pessoa não tenha digitado nehnhuma senha aparece isso
            echo "<script> alert('Preencha sua senha')</script>";

        }else{// se a pessoa digitou td certinho vai seguir o código abaixo
            $email = $_POST['email'];
            $senha = $_POST['senha'];

            $sql_code = "SELECT * FROM cadastro WHERE email = '$email' AND senha = '$senha'"; //verifico se o email e senha digitados tem no banco
            $result=mysqli_query($conexao,$sql_code);
            $quantidade = mysqli_num_rows($result); // pego a qtd de linhas (se tiver uma linha significa que tem um login)
            
            while ($linha = mysqli_fetch_array($result)){ 
            
                if($email == "babi@gmail.com" && $senha == "babi"){ //email de adm abaixo

                    $_SESSION['user'] = $linha['email'];
                    header("Location: ../htmlfun/agenda_nova_funcionarios.php"); //leva para a pag de funcionários

                }else if($quantidade == 1){ //parte de clientes abaixo

                    $_SESSION['user'] = $linha['email'];
                    echo "<style>.login-cadastro{display:none;}</style>";
                    header("Location: ../html/agenda.php"); //leva para a pag da agenda

                }
            }
            echo "<script> alert('Falha ao logar! E-mail ou senha incorretos') </script>"; //se a pessoa digitou algo errado aparece um alert
        }
    }

?>