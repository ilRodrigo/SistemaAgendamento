<?php

require_once "conexao.php";

if(isset($_POST['cadastrar_salaconsultorio'])) {
    $cadastrar_salaconsultorio = $_POST['cadastrar_salaconsultorio'];

    $sql = "INSERT INTO salaconsultorio (nome_salaconsultorio) VALUES ('$cadastrar_salaconsultorio')";

    if ($conn->query($sql) === TRUE) {
        echo "Sala/Consultório cadastrado com sucesso!";
    } else {
        echo "Erro ao cadastrar Sala/Consultório:  " . $conn->error;
    }
}

$conn->close();
?>