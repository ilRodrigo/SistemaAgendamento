<?php

require_once "conexao.php";

if(isset($_POST['cadastrar_procedimento'])) {
    $cadastrar_procedimento = $_POST['cadastrar_procedimento'];

    $sql = "INSERT INTO procedimento (nome_procedimento) VALUES ('$cadastrar_procedimento')";

    if ($conn->query($sql) === TRUE) {
        echo "Procedimento cadastrado com sucesso!";
    } else {
        echo "Erro ao cadastrar procedimento:  " . $conn->error;
    }
}

$conn->close();
?>