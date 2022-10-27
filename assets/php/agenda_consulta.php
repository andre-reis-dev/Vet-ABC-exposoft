<?php
    if (isset($_POST["agendar"])) {

        $conexao = mysqli_connect("localhost","root","","vet-abc");

        $nome = $_POST['nome_dono'];
        $email = $_POST['email_dono'];
        $tipo_animal = $_POST['tipo_animal'];
        $dtnasc_animal = $_POST['dtnasc_animal'];

        $dtnasc_animal = implode("-",array_reverse(explode("/",$dtnasc_animal))); //função para converter a data para o php

        $horario = $_POST['hora_consulta'];
        $data = $_POST['data_consulta'];

        $dtnasc_animal = implode("-",array_reverse(explode("/",$dtnasc_animal))); //função para converter a data para o php

        $tipo_exame = $_POST['tipo_consulta'];

        $sql = "INSERT INTO cadConsulta(nome, email, tipo_animal, nasc_animal, horas, data_consulta, tipo_exame) VALUES ('$nome', '$email', '$tipo_animal', '$dtnasc_animal', '$horario', '$data', '$tipo_exame')";

        $result = mysqli_query($conexao,$sql);
    }
?>