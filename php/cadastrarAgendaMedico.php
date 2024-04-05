<?php

require_once "conexao.php";

if(isset($_POST['id_medico']) && isset($_POST['id_salaconsultorio']) && isset($_POST['data_agendamedico']) && isset($_POST['horainicio_agendamedico']) && isset($_POST['horafim_agendamedico']) && isset($_POST['atendimentomax_agendamedico'])) {
    $id_medico = $_POST['id_medico'];
    $id_salaconsultorio = $_POST['id_salaconsultorio'];
    $data_agendamedico = $_POST['data_agendamedico'];
    $horainicio_agendamedico = $_POST['horainicio_agendamedico'];
    $horafim_agendamedico = $_POST['horafim_agendamedico'];
    $atendimentomax_agendamedico = $_POST['atendimentomax_agendamedico'];

    $sql = "INSERT INTO agendamedico (id_medico, id_salaconsultorio, data_agendamedico, horainicio_agendamedico, horafim_agendamedico, atendimentomax_agendamedico) VALUES ('$id_medico', '$id_salaconsultorio', '$data_agendamedico', '$horainicio_agendamedico', '$horafim_agendamedico', '$atendimentomax_agendamedico')";

    if ($conn->query($sql) === TRUE) {
        echo "Agenda de Atendimento cadastrada com sucesso!";
    } else {
        echo "Erro ao cadastrar Agenda de Atendimento: " . $conn->error;
    }
}

$conn->close();
?>

