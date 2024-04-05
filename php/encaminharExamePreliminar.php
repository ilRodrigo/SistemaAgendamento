<?php

require_once "conexao.php";

if(isset($_POST['id_consulta'])) {
    $id_consulta = $_POST['id_consulta'];

    $sql = "INSERT INTO examepreliminar (id_consulta) VALUES ('$id_consulta')";

    if ($conn->query($sql) === TRUE) {
        echo "Pré-exame encaminhado com sucesso!";
    } else {
        echo "Erro ao encaminhar pré-exame:  " . $conn->error;
    }
}

$conn->close();
?>