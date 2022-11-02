<?php
    if (isset($_POST["agendar"])) {

        $conexao = mysqli_connect("localhost","root","","vet-abc");
        $nome_animal = $_POST['nome_animal'];
        $cpf_dono = $_POST['cpf_dono'];
        $medico = $_POST['medico'];
        $horas = $_POST['horas'];
        $data_consulta = $_POST['data_consulta'];
        $tipo_exame = $_POST['tipo_exame'];

          #num_rows mosta a qauntidadede linhas;
           
        
            $sql_cpf = "SELECT * FROM cadastro WHERE cpf= '$cpf_dono' ";
            $result1 = mysqli_query($conexao,$sql_cpf);
            $numlinhas = mysqli_num_rows($result1);
            if (mysqli_num_rows($result1) != 0){
                #num_rows mosta a qauntidadede linhas;
                echo "<script> alert (' cpf não existente')</script>";
            } else
            while ($linha = mysqli_fetch_array($result1)){
                    #guardar os dados em índices numéricos na matriz do resultado
                   
                        
           
                $sql_animal = "SELECT * FROM cadanimal WHERE nome_animal = '$nome_animal' ";
                $result2 = mysqli_query($conexao,$sql_email);
                if(mysqli_num_rows($result2) == 0){
                    echo "<script> alert ('animal não existente')</script>";}
                    else{
            while($linha = mysqli_fetch_array($result2)){
                    
              
                    $sql= "INSERT INTO cadconsulta (medico, horas, data_consulta, tipo_exame, nome_animal, cpf_dono) VALUES ('$medico', '$horas', '$data_consulta', '$tipo_exame', '$nome_animal', '$cpf_dono')";
                    
                }
                $result=mysqli_query($conexao,$sql);
                 echo "<script> window.Location.href=' ../html/cadastro_consulta.php')</script>;"
            }}
                   
    }
   
 
?>

     