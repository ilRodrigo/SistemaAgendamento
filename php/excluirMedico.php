<?php

require_once "conexao.php";

if(isset($_POST['id_medico'])) {
    $id_medico = $_POST['id_medico'];

    $sql = "DELETE FROM medico WHERE id_medico = $id_medico";

    if ($conn->query($sql) === TRUE) {
        echo "Médico excluído com sucesso!";
    } else {
        echo "Erro ao excluir médico: " . $conn->error;
    }
} else {
    echo "ID do médico não recebido.";
}

$conn->close();
?>