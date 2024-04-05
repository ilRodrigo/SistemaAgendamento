<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chamar Pacientes</title>
</head>
<body>
    <h2>Pacientes Confirmados</h2>
    <table border="1">
        <tr>
            <th>ID Paciente</th>
            <th>Nome do Paciente</th>
            <th>Status Consulta</th>
            <th>Ação</th>
        </tr>
        <?php
        require_once "conexao.php";
        
        $sql = "SELECT c.id_paciente, p.nome_paciente, c.id_consulta FROM consulta c 
        INNER JOIN paciente p ON c.id_paciente = p.id_paciente 
        WHERE c.status_consulta = 'Confirmada'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["id_paciente"] . "</td>";
                echo "<td>" . $row["nome_paciente"] . "</td>";
                echo "<td>Confirmada</td>";
                echo "<td><button class='chamar-btn' data-nome='" . $row["nome_paciente"] . "' data-id='" . $row["id_consulta"] . "'>Chamar</button></td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='4'>Não há pacientes agendados e confirmados no momento.</td></tr>";
        }
        $conn->close();
        ?>
    </table>

    <div id="pacienteEmAtendimento" class="hidden">
        <h2>Paciente em Atendimento</h2>
        <table border="1">
            <tr>
                <th>Nome do Paciente</th>
                <th>ID Consulta</th>
                <th>Ação</th>
            </tr>
            <tr>
                <td id="nomePacienteAtendimento"></td>
                <td id="idConsultaAtendimento"></td>
                <td><a id="autorizacaoLink" href="../html/AutorizacaoPlanoSaude.html">Autorização Plano de Saúde</a></td>
            </tr>
        </table>
    </div>

    <script>
        document.querySelectorAll('.chamar-btn').forEach(button => {
            button.addEventListener('click', () => {
                const nomePaciente = button.getAttribute('data-nome');
                const idConsulta = button.getAttribute('data-id');
                document.getElementById('nomePacienteAtendimento').textContent = nomePaciente;
                document.getElementById('idConsultaAtendimento').textContent = idConsulta;
                document.getElementById('autorizacaoLink').href = "../html/AutorizacaoPlanoSaude.html?id_consulta=" + idConsulta;
                document.getElementById('pacienteEmAtendimento');
            });
        });
    </script>
</body>
</html>
