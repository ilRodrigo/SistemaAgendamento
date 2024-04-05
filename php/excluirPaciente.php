<?php

require_once "conexao.php";

if(isset($_POST['id_paciente'])) {
    $id_paciente = $_POST['id_paciente'];

    $sql = "DELETE FROM paciente WHERE id_paciente = $id_paciente";

    if ($conn->query($sql) === TRUE) {
        echo "Paciente excluído com sucesso!";
    } else {
        echo "Erro ao excluir paciente: " . $conn->error;
    }
} else {
    echo "ID do paciente não recebido.";
}

$conn->close();
?>