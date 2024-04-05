<?php

require_once "conexao.php";

if(isset($_POST['id_consulta'])) {
    $id_consulta = $_POST['id_consulta'];

    $sql = "DELETE FROM consulta WHERE id_consulta = $id_consulta";

    if ($conn->query($sql) === TRUE) {
        echo "Consulta cancelada com sucesso!";
    } else {
        echo "Erro ao excluir cancelar consulta: " . $conn->error;
    }
} else {
    echo "ID da consulta não recebido.";
}

$conn->close();
?>