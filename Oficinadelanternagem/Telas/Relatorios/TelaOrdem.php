<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Gagalin&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="../../Estilo/EstiloListas.css">
    <title>Ordem Serviço</title>
</head>
<body>
<h1>Ordem dos Serviços</h1>
    <table border="1">
        <tr>
            <td># Item do serviço</td>
            <td># Serviço</td>
            <td># Tarefa</td>
            <td>Placa</td>
            <td>Cliente</td>
            <td>Funcionário</td>
            <td>Previsão de Saída</td>

            <?php
            define('BASE', $_SERVER['DOCUMENT_ROOT'] . '\Oficinadelanternagem');
            require_once BASE . '\Modelo\Servico.php';
            require_once BASE . '\Database\Conexao.php';
            require_once BASE . '\DAO\DAOServico.php';
            $daoServico = new DAOServico();
            $ordenar = $daoServico->ordenar('situacao');

             foreach ($ordenar as $registroordenar) {
                echo '<tr>';
                echo '<td>' . $registroordenar['itens_servico'] . '</td>';
                echo '<td>' . $registroordenar['servico'] . '</td>';
                echo '<td>' . $registroordenar['tarefa'] . '</td>';
                echo '<td>' . $registroordenar['placa'] . '</td>';
                echo '<td>' . $registroordenar['nome'] . '</td>';
                echo '<td>' . $registroordenar['codigofun'] . '</td>';
                echo '<td>' . $registroordenar['previsaodesaida'] . '</td>';
                echo '</tr>';
            }
            ?>
    </table>
    <br>
    <div class="button-grid">
    <a href="/Oficinadelanternagem/Database/relatorios.php">
    <button><i class="fas fa-chart-bar button-icon"></i>Voltar Relatórios</button>
</a>
</div>
    
</body>
</html>