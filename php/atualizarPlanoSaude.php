<?php

require_once "conexao.php";

if(isset($_POST['id_planosaude']) && isset($_POST['nome_planosaude'])) {
    $id_planosaude = $_POST['id_planosaude'];
    $nome_planosaude = $_POST['nome_planosaude'];

    $sql = "UPDATE planosaude SET nome_planosaude = '$nome_planosaude' WHERE id_planosaude = $id_planosaude";

    if ($conn->query($sql) === TRUE) {
        echo "Plano de Saúde atualizado com sucesso!";
    } else {
        echo "Erro ao atualizar Plano de Saúde: " . $conn->error;
    }
} else {
    echo "ID do Plano de Saúde não recebido.";
}

$conn->close();
?>