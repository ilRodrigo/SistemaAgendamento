<?php

require_once "conexao.php";

if(isset($_POST['nome_paciente']) && isset($_POST['nascimento_paciente']) && isset($_POST['sexo_paciente'])) {
    $nome_paciente = $_POST['nome_paciente'];
    $nascimento_paciente = $_POST['nascimento_paciente'];
    $sexo_paciente = $_POST['sexo_paciente'];

    $sql = "INSERT INTO paciente (nome_paciente, nascimento_paciente, sexo_paciente) VALUES ('$nome_paciente', '$nascimento_paciente', '$sexo_paciente')";

    if ($conn->query($sql) === TRUE) {
        echo "Paciente cadastrado com sucesso!";
    } else {
        echo "Erro ao cadastrar Paciente: " . $conn->error;
    }
}

$conn->close();
?>