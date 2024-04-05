<?php

require_once "conexao.php";

if(isset($_POST['cadastrar_especialidade'])) {
    $cadastrar_especialidade = $_POST['cadastrar_especialidade'];

    $sql = "INSERT INTO especialidade (nome_especialidade) VALUES ('$cadastrar_especialidade')";

    if ($conn->query($sql) === TRUE) {
        echo "Especialidade médica inserida com sucesso!";
    } else {
        echo "Erro ao inserir especialidade médica:  " . $conn->error;
    }
}

$conn->close();
?>