<?php

require_once "conexao.php";

if(isset($_POST['id_salaconsultorio']) && isset($_POST['nome_salaconsultorio'])) {
    $id_salaconsultorio = $_POST['id_salaconsultorio'];
    $nome_salaconsultorio = $_POST['nome_salaconsultorio'];

    $sql = "UPDATE salaconsultorio SET nome_salaconsultorio = '$nome_salaconsultorio' WHERE id_salaconsultorio = $id_salaconsultorio";

    if ($conn->query($sql) === TRUE) {
        echo "Sala/Consutório atualizado com sucesso!";
    } else {
        echo "Erro ao nome Sala/Consutório: " . $conn->error;
    }
} else {
    echo "ID do Sala/Consutório não recebido.";
}

$conn->close();
?>