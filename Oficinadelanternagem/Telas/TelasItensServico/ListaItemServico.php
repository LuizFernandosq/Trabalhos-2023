<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Gagalin&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="../../Estilo/EstiloListas.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Maven+Pro:wght@500&family=Poppins:wght@300&display=swap" rel="stylesheet">
    <title>Listagem de Serviços</title>
</head>
<body>
<style>
        td{
    border: 1px solid #e5f2f9;
    max-width: 100px;
    text-align: center;
      
 }

    </style>
    <h1>Lista de item de serviços</h1>
    <table border="1">
    <tr>
        <td># Item do serviço</td>
        <td># Tarefa</td>
        <td># Serviço</td>
        <td># Grupo</td>
        <td># Subgrupo</td>
        <td># Funcionario</td>
        <td>Situação</td>
        <td>Valor</td>
        <td>EXCLUIR</td>
        <td>ALTERAR</td>
        
        

        <?php
            define('BASE', $_SERVER['DOCUMENT_ROOT'] . '\Oficinadelanternagem');
            require_once BASE . '\Modelo\ItensServico.php';
            require_once BASE . '\Database\Conexao.php';
            require_once BASE . '\DAO\DAOItensServico.php';
            
            $daoItensServico = new DAOItensServico();
            $listaitensservico = $daoItensServico->listaTodos();

            foreach ($listaitensservico as $registro8) {
                echo '<tr>';
                echo '<td>' . $registro8['codigoids'] . '</td>';
                echo '<td>' . $registro8['codigota'] . '</td>';
                echo '<td>' . $registro8['codigoser'] . '</td>';
                echo '<td>' . $registro8['codigogp'] . '</td>';
                echo '<td>' . $registro8['codigosg'] . '</td>';
                echo '<td>' . $registro8['codigofun'] . '</td>';
                echo '<td>' . $registro8['situacao'] . '</td>';
                echo '<td>' . $registro8['valor'] . '</td>';
                ?>
                <td>
                    <form action="ExcluiItensServico.php" method="post">
                        <input type="hidden" name="codigoids" id="codigoids" value="<?= $registro8['codigoids'] ?>">
                        <button class= report-button><i class="fas fa-trash button-icon"></i></button>
                    </form>
                </td>
                <td>
                    <form action="EditarItensServico.php" method="post">
                        <input type="hidden" name="codigoids" id="codigoids" value="<?= $registro8['codigoids'] ?>">
                        <input type="hidden" name="codigota" id="codigota" value="<?= $registro8['codigota'] ?>">
                        <input type="hidden" name="codigoser" id="codigoser" value="<?= $registro8['codigoser'] ?>">
                        <input type="hidden" name="codigogp" id="codigogp" value="<?= $registro8['codigogp'] ?>">
                        <input type="hidden" name="codigosg" id="codigosg" value="<?= $registro8['codigosg'] ?>">
                        <input type="hidden" name="codigofun" id="codigofun" value="<?= $registro8['codigofun'] ?>">
                        <input type="hidden" name="situacao" id="situacao" value="<?= $registro8['situacao'] ?>">
                        <input type="hidden" name="valor" id="valor" value="<?= $registro8['valor'] ?>">

                        <button class= report-button><i class="fas fa-edit button-icon"></i></button>
                    </form>
                </td>
                <?php
                echo '</tr>';

            }
            ?>

    </tr>
    </table>
    <br>
    <div class="button-grid">
    <a href="http://localhost/Oficinadelanternagem/Telas/TelasItensServico/FormNovoItemServico.php"><button> <i class="fas fa-plus button-icon"></i> Cadastrar Item Serviço</button></a>

    
    <a href="/Oficinadelanternagem/Database/"><button> <i class="fas fa-arrow-left button-icon"></i> Voltar Menu</button></a>
    
    
    <a href="http://localhost/Oficinadelanternagem/Telas/TelasServico/ListaServico.php"><button><i class="fas fa-list button-icon"></i> Voltar lista
                    Servico</button></a>
                    </div>
</body>
</html>