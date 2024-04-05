<?php

require_once "conexao.php";

if(isset($_POST['id_procedimento'])) {
    $id_procedimento = $_POST['id_procedimento'];

    $sql = "DELETE FROM procedimento WHERE id_procedimento = $id_procedimento";

    if ($conn->query($sql) === TRUE) {
        echo "Procedimento excluído com sucesso!";
    } else {
        echo "Erro ao excluir procedimento: " . $conn->error;
    }
} else {
    echo "ID do procedimento não recebido.";
}

$conn->close();
?>