<?php

require_once "conexao.php";

if(isset($_POST['id_especialidade']) && isset($_POST['atualizar_especialidade'])) {
    $id_especialidade = $_POST['id_especialidade'];
    $atualizar_especialidade = $_POST['atualizar_especialidade'];

    $sql = "UPDATE especialidade SET nome_especialidade = '$atualizar_especialidade' WHERE id_especialidade = $id_especialidade";

    if ($conn->query($sql) === TRUE) {
        echo "Especialidade médica atualizada com sucesso!";
    } else {
        echo "Erro ao atualizar especialidade médica: " . $conn->error;
    }
} else {
    echo "ID da especialidade não recebido.";
}

$conn->close();
?>