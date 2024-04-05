<?php

require_once "conexao.php";

if(isset($_POST['id_medico']) && isset($_POST['nome_medico']) && isset($_POST['crm_medico']) && isset($_POST['id_especialidade'])) {
    $id_medico = $_POST['id_medico'];
    $nome_medico = $_POST['nome_medico'];
    $crm_medico = $_POST['crm_medico'];
    $id_especialidade = $_POST['id_especialidade'];

    $sql = "UPDATE medico SET nome_medico = '$nome_medico', crm_medico = '$crm_medico', id_especialidade = '$id_especialidade' WHERE id_medico = $id_medico";

    if ($conn->query($sql) === TRUE) {
        echo "Médico atualizado com sucesso!";
    } else {
        echo "Erro ao atualizar médico: " . $conn->error;
    }
} else {
    echo "ID do médico não recebido.";
}

$conn->close();
?>