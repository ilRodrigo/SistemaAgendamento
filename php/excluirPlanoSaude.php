<?php

require_once "conexao.php";

if(isset($_POST['id_planosaude'])) {
    $id_planosaude = $_POST['id_planosaude'];

    $sql = "DELETE FROM planosaude WHERE id_planosaude = $id_planosaude";

    if ($conn->query($sql) === TRUE) {
        echo "Plano de Sáude excluído com sucesso!";
    } else {
        echo "Erro ao excluir Plano de Sáude: " . $conn->error;
    }
} else {
    echo "ID do Plano de Sáude não recebido.";
}

$conn->close();
?>