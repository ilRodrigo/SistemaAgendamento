<?php

require_once "conexao.php";

if(isset($_POST['id_salaconsultorio'])) {
    $id_salaconsultorio = $_POST['id_salaconsultorio'];

    $sql = "DELETE FROM salaconsultorio WHERE id_salaconsultorio = $id_salaconsultorio";

    if ($conn->query($sql) === TRUE) {
        echo "Sala/Consultório excluído com sucesso!";
    } else {
        echo "Erro ao excluir Sala/Consultório: " . $conn->error;
    }
} else {
    echo "ID do Sala/Consultório não recebido.";
}

$conn->close();
?>