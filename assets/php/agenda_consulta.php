<?php
    include('conexao.php');

    if (isset($_POST["agendar"])) {

        $nome_animal = $_POST['nome_animal'];
        $cpf_dono = $_POST['cpf_dono'];
        $medico = $_POST['medico'];
        $horas = $_POST['hora_consulta'];
        $data_consulta = $_POST['data_consulta'];
        $tipo_exame = $_POST['tipo_consulta'];
           
        $sql_cpf = "SELECT * FROM cadastro WHERE cpf= '$cpf_dono' ";
        $result1 = mysqli_query($conexao,$sql_cpf);
        $numlinhas = mysqli_num_rows($result1);

        if (mysqli_num_rows($result1) == 0){
            #num_rows mosta a qauntidadede linhas;
            echo "<script> alert ('cpf não cadastrado')</script>";
            echo "<script> window.location.href='../html/cadastro.php'</script>";
        } else {
            while ($linha = mysqli_fetch_array($result1)){
                #guardar os dados em índices numéricos na matriz do resultado

                $sql_animal = "SELECT * FROM cadanimal WHERE nome_animal = '$nome_animal' AND cpf_dono = '$cpf_dono' ";
                $result2 = mysqli_query($conexao,$sql_animal);

                if(mysqli_num_rows($result2) == 0){
                    echo "<script> alert ('animal não cadastrado')</script>";
                    echo "<script> window.location.href='../htmlfun/pag_cadastro_animal.php'</script>";
                }else {
                    while($linha = mysqli_fetch_array($result2)){
                        
                        $sql_dias = "SELECT * FROM cadconsulta WHERE data_consulta = '$data_consulta' AND horas = '$horas' ";
                        $result3 = mysqli_query($conexao, $sql_dias);

                        if(mysqli_num_rows($result3) == 0){

                            $sql= "INSERT INTO cadconsulta (medico, horas, data_consulta, tipo_exame, cpf_dono,nome_animal ) VALUES ('$medico', '$horas', '$data_consulta', '$tipo_exame', '$cpf_dono', '$nome_animal')";

                            $result=mysqli_query($conexao,$sql);
                        }else{
                            echo "<script> alert ('O horário desse dia já foi usado')</script>";
                        }
                    }
                echo "<script> window.location.href=' ../html/cadastro_consulta.php')</script>;";
                }
            }
        }           
    }
?>

     