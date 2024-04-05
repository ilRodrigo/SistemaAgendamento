<?php

require_once "conexao.php";

if(isset($_POST['id_consulta']) && isset($_POST['status_autorizacaoplanosaude'])) {
    $id_consulta = $_POST['id_consulta'];
    $status_autorizacaoplanosaude = $_POST['status_autorizacaoplanosaude'];

    $sql_duplicado = "SELECT id_consulta FROM autorizacaoplanosaude WHERE id_consulta = '$id_consulta'";
    $resultado = $conn->query($sql_duplicado);

    if ($resultado->num_rows > 0) {
        $sql1 = "UPDATE autorizacaoplanosaude SET status_autorizacaoplanosaude = '$status_autorizacaoplanosaude' WHERE id_consulta = '$id_consulta'";
        $sql2 = "UPDATE consulta SET status_consulta = 'PlanoSaude' WHERE id_consulta = '$id_consulta'";

    } else {
        $sql1 = "INSERT INTO autorizacaoplanosaude (id_consulta, status_autorizacaoplanosaude) VALUES ('$id_consulta', '$status_autorizacaoplanosaude')";
        $sql2 = "UPDATE consulta SET status_consulta = 'PlanoSaude' WHERE id_consulta = '$id_consulta'";
    }

    if ($conn->query($sql1) === TRUE && $conn->query($sql2) === TRUE) {
        echo "Status da autorização realizado com sucesso!";
    } else {
        echo "Erro ao mudar status da autorização: " . $conn->error;
    }
}

$conn->close();
?>

