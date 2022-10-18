
<?php
    session_start();

    $conexao=mysqli_connect("localhost","root","","vet-abc"); 
    
    if(isset($_POST['email']) || isset($_POST['senha'])){ //esse email e senha é do html debaixo

        if(strlen($_POST['email']) == 0 ){ //caso a pessoa não tenha digitado nada aparecera isso

            echo "<script> alert('Preencha seu e-mail')</script>";
            header("Location: ../html/login.php");

        }else if(strlen($_POST['senha']) == 0 ){ // caso a pessoa não tenha digitado nehnhuma senha aparece isso

            echo "<script> alert('Preencha sua senha')</script>";

        }else{                                     // se a pessoa digitou td certinho vai seguir o código abaixo
            $email = $_POST['email'];
            $senha = $_POST['senha'];

            $sql_code = "SELECT * FROM cadastro WHERE email = '$email' AND senha = '$senha'";
            $result=mysqli_query($conexao,$sql_code);
            $quantidade = mysqli_num_rows($result);

            while ($linha = mysqli_fetch_array($result)){
            
                if($email == "babi@gmail.com" && $senha == "babi"){

                    $_SESSION['user'] = $linha['email'];

                    header("Location: ../htmlfun/agenda_funcionarios.php");

                }else if($quantidade == 1){ 

                    $_SESSION['user'] = $linha['email'];

                    header("Location: ../html/agenda.php");

                }
            }

            echo "<script> alert('Falha ao logar! E-mail ou senha incorretos') </script>";

        }
    }

?>