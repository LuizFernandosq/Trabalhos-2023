<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Gagalin&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="../../Estilo/EstiloListas.css"
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Maven+Pro:wght@500&family=Poppins:wght@300&display=swap" rel="stylesheet">
    <title>Listagem das Tarefas</title>
</head>

<body>
<style>
        td{
    border: 1px solid #e5f2f9;
    max-width: 100px;
    text-align: center;
      
 }

    </style>
    <h1> Listagem de tarefas</h1>
    <table border="1">
        <tr>
            <td># Tarefa </td>
            <td>Descrição</td>
            <td>EXCLUIR</td>
            <td>ALTERAR</td>

            <?php
            define('BASE', $_SERVER['DOCUMENT_ROOT'] . '\Oficinadelanternagem');
            require_once BASE . '\Modelo\Tarefa.php';
            require_once BASE . '\Database\Conexao.php';
            require_once BASE . '\DAO\DAOTarefa.php';
            
            $daoTarefa = new DAOTarefa();
            $listatarefa = $daoTarefa->listaTodos();

            foreach ($listatarefa as $registro7) {
                echo '<tr>';
                echo '<td>' . $registro7['codigota'] . '</td>';
                echo '<td>' . $registro7['descricao'] . '</td>';
                ?>
                <td>
                <form action="ExcluiTarefa.php" method="post">
                        <input type="hidden" name="codigota" id="codigota" value="<?= $registro7['codigota'] ?>">
                        <button class= report-button><i class="fas fa-trash button-icon"></i></button>
                    </form>
            </td>
            <td>
            <form action="EditarTarefa.php" method="post">
                        <input type="hidden" name="codigota" id="codigota" value="<?= $registro7['codigota'] ?>">
                        <input type="hidden" name="descricao" id="descricao" value="<?= $registro7['descricao'] ?>">
                        <button class= report-button><i class="fas fa-edit button-icon"></i></button>
                    </form>
            </td>

            <?php
                echo '</tr>';
            }
            ?>
            
    </table>
    <br>
    <div class="button-grid">
            <a href="/Oficinadelanternagem/Telas/TelasTarefas/FormNovoTarefa.php"><button><i class="fas fa-plus button-icon"></i>  Cadastrar Tarefas</button></a>
            
            
            <a href="/Oficinadelanternagem/Database/"><button > <i class="fas fa-arrow-left button-icon"></i> Voltar Menu</button></a>
            </div>
</body>

</html>