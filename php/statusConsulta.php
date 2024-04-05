<?php

require_once "conexao.php";

if(isset($_POST['id_consulta']) && isset($_POST['status_consulta'])) {
    $id_consulta = $_POST['id_consulta'];
    $status_consulta = $_POST['status_consulta'];

    $sql = "UPDATE consulta SET status_consulta = '$status_consulta' WHERE id_consulta = $id_consulta";

    if ($conn->query($sql) === TRUE) {
        echo "Status atualizado com sucesso!";
    } else {
        echo "Erro ao atualizar status: " . $conn->error;
    }
} else {
    echo "ID da consulta não recebido.";
}

$conn->close();
?>