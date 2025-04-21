<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Gagalin&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="../../Estilo/EstiloListas.css">
    <title>Listagem de Serviços</title>
</head>

<body>
    <h1>Lista de item de serviços</h1>
    <table border="1">
        <tr>
            <td># Item do serviço</td>
            <td># Serviço</td>
            <td>Valor</td>
            <td># Tarefa</td>




            <?php
            define('BASE', $_SERVER['DOCUMENT_ROOT'] . '\Oficinadelanternagem');
            require_once BASE . '\Modelo\ItensServico.php';
            require_once BASE . '\Database\Conexao.php';
            require_once BASE . '\DAO\DAOItensServico.php';
            $cser = $_POST['codigoser'];
            $daoItensServico = new DAOItensServico();
            $listaitens = $daoItensServico->listaitens($cser);

            foreach ($listaitens as $registroitens) {
                echo '<tr>';
                echo '<td>' . $registroitens['itens_servico'] . '</td>';
                echo '<td>' . $registroitens['codigoser'] . '</td>';
                echo '<td>' . $registroitens['valor'] . '</td>';
                echo '<td>' . $registroitens['tarefa'] . '</td>';
                echo '</tr>';
            }
            ?>
    </table>
    <br>
    <div class="button-grid">
        <a href="http://localhost/Oficinadelanternagem/Telas/TelasItensServico/FormNovoItemServico.php"><button><i class="fas fa-plus button-icon"></i> Cadastrar
                Item Serviço para algum Serviço</button></a>


                <a href="/Oficinadelanternagem/Database/"><button><i class="fas fa-arrow-left button-icon"></i> Voltar Menu</button></a>
                
                <a href="http://localhost/Oficinadelanternagem/Telas/TelasServico/ListaServico.php"><button><i class="fas fa-list button-icon"></i> Listar Servico</button></a>
    </div>