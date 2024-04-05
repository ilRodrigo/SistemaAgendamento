<?php

require_once "conexao.php";

if(isset($_POST['id_agendamedico'])) {
    $id_agendamedico = $_POST['id_agendamedico'];

    $sql = "DELETE FROM agendamedico WHERE id_agendamedico = $id_agendamedico";

    if ($conn->query($sql) === TRUE) {
        echo "Agenda de Médico excluído com sucesso!";
    } else {
        echo "Erro ao excluir agenda de médico: " . $conn->error;
    }
} else {
    echo "ID da agenda de médico não recebido.";
}

$conn->close();
?>