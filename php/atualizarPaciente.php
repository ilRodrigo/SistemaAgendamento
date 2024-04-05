<?php

require_once "conexao.php";

if(isset($_POST['id_paciente']) && isset($_POST['nome_paciente']) && isset($_POST['nascimento_paciente']) && isset($_POST['sexo_paciente'])) {
    $id_paciente = $_POST['id_paciente'];
    $nome_paciente = $_POST['nome_paciente'];
    $nascimento_paciente = $_POST['nascimento_paciente'];
    $sexo_paciente = $_POST['sexo_paciente'];

    $sql = "UPDATE paciente SET nome_paciente = '$nome_paciente', nascimento_paciente = '$nascimento_paciente', sexo_paciente = '$sexo_paciente' WHERE id_paciente = $id_paciente";

    if ($conn->query($sql) === TRUE) {
        echo "Paciente atualizado com sucesso!";
    } else {
        echo "Erro ao atualizar paciente: " . $conn->error;
    }
} else {
    echo "ID do paciente não recebido.";
}

$conn->close();
?>