<?php

require_once "conexao.php";

if(isset($_POST['id_paciente']) && isset($_POST['id_medico']) && isset($_POST['data_consulta']) && isset($_POST['horario_consulta']) && isset($_POST['id_procedimento']) && isset($_POST['status_consulta'])) {
    $id_paciente = $_POST['id_paciente'];
    $id_medico = $_POST['id_medico'];
    $data_consulta = $_POST['data_consulta'];
    $horario_consulta = $_POST['horario_consulta'];
    $id_procedimento = $_POST['id_procedimento'];
    $status_consulta = $_POST['status_consulta'];

    $sql = "INSERT INTO consulta (id_paciente, id_medico, data_consulta, horario_consulta, id_procedimento, status_consulta) VALUES ('$id_paciente', '$id_medico', '$data_consulta', '$horario_consulta', '$id_procedimento', '$status_consulta')";

    if ($conn->query($sql) === TRUE) {
        echo "Consulta marcada com sucesso!";
    } else {
        echo "Erro ao marcar consulta: " . $conn->error;
    }
}

$conn->close();
?>

