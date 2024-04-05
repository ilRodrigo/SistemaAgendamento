<?php

require_once "conexao.php";

if(isset($_POST['id_especialidade'])) {
    $id_especialidade = $_POST['id_especialidade'];

    $sql = "DELETE FROM especialidade WHERE id_especialidade = $id_especialidade";

    if ($conn->query($sql) === TRUE) {
        echo "Especialidade médica excluída com sucesso!";
    } else {
        echo "Erro ao excluir especialidade médica: " . $conn->error;
    }
} else {
    echo "ID da especialidade não recebido.";
}

$conn->close();
?>