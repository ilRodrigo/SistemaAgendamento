<?php

require_once "conexao.php";

if(isset($_POST['nome_planosaude'])) {
    $nome_planosaude = $_POST['nome_planosaude'];

    $sql = "INSERT INTO planosaude (nome_planosaude) VALUES ('$nome_planosaude')";

    if ($conn->query($sql) === TRUE) {
        echo "Plano de Saúde cadastrado com sucesso!";
    } else {
        echo "Erro ao cadastrar plano de saúde:  " . $conn->error;
    }
}

$conn->close();
?>