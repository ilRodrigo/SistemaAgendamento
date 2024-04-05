<?php

require_once "conexao.php";

if(isset($_POST['id_procedimento']) && isset($_POST['nome_procedimento'])) {
    $id_procedimento = $_POST['id_procedimento'];
    $nome_procedimento = $_POST['nome_procedimento'];

    $sql = "UPDATE procedimento SET nome_procedimento = '$nome_procedimento' WHERE id_procedimento = $id_procedimento";

    if ($conn->query($sql) === TRUE) {
        echo "Procedimento atualizado com sucesso!";
    } else {
        echo "Erro ao atualizar procedimento: " . $conn->error;
    }
} else {
    echo "ID do procedimento não recebido.";
}

$conn->close();
?>