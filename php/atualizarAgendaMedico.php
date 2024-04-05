<?php

require_once "conexao.php";

if(isset($_POST['id_agendamedico']) && isset($_POST['id_medico']) && isset($_POST['id_salaconsultorio']) && isset($_POST['data_agendamedico']) && isset($_POST['horainicio_agendamedico']) && isset($_POST['horafim_agendamedico']) && isset($_POST['atendimentomax_agendamedico'])) {
    $id_agendamedico = $_POST['id_agendamedico'];
    $id_medico = $_POST['id_medico'];
    $id_salaconsultorio = $_POST['id_salaconsultorio'];
    $data_agendamedico = $_POST['data_agendamedico'];
    $horainicio_agendamedico = $_POST['horainicio_agendamedico'];
    $horafim_agendamedico = $_POST['horafim_agendamedico'];
    $atendimentomax_agendamedico = $_POST['atendimentomax_agendamedico'];

    $sql = "UPDATE agendamedico SET id_medico = '$id_medico', id_salaconsultorio = '$id_salaconsultorio', data_agendamedico = '$data_agendamedico', horainicio_agendamedico = '$horainicio_agendamedico', horafim_agendamedico = '$horafim_agendamedico', atendimentomax_agendamedico = '$atendimentomax_agendamedico' WHERE id_agendamedico = '$id_agendamedico'";

    if ($conn->query($sql) === TRUE) {
        echo "Agenda de Atendimento atualizada com sucesso!";
    } else {
        echo "Erro ao atualizar Agenda de Atendimento: " . $conn->error;
    }
} else {
    echo "ID Agenda de Médico não recebido.";
}

$conn->close();
?>
