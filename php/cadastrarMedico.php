<?php

require_once "conexao.php";

if(isset($_POST['nome_medico']) && isset($_POST['crm_medico']) && isset($_POST['id_especialidade'])) {
    $nome_medico = $_POST['nome_medico'];
    $crm_medico = $_POST['crm_medico'];
    $id_especialidade = $_POST['id_especialidade'];

    $sql = "INSERT INTO medico (nome_medico, crm_medico, id_especialidade) VALUES ('$nome_medico', '$crm_medico', '$id_especialidade')";

    if ($conn->query($sql) === TRUE) {
        echo "Médico cadastrado com sucesso!";
    } else {
        echo "Erro ao cadastrar Médico:  " . $conn->error;
    }
}

$conn->close();
?>