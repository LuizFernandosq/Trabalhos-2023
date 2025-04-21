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
    <title>Lista de sub grupos</title>
</head>

<body>
    
    <h1> Listagem de Sub Grupos</h1>
    <style>
        td{
    border: 1px solid #e5f2f9;
    max-width: 275px;
    text-align: center;
    
    
 }
    </style>
    <table border="1">
        <tr>
            <td>#</td>
            <td>Codigo do Grupo </td>
            <td>Nome</td>
            <td>EXCLUIR</td>
            <td>EDITAR</td>
        </tr>

        <?php
        define('BASE', $_SERVER['DOCUMENT_ROOT'] . '\Oficinadelanternagem');
        require_once BASE . '\Modelo\SubGrupo.php';
        require_once BASE . '\Database\Conexao.php';
        require_once BASE . '\DAO\DAOSubGrupo.php';

        $daoSubGrupo = new DAOSubGrupo();
        $listasubgrupo = $daoSubGrupo->listaTodos();

        foreach ($listasubgrupo as $registro5) {
            echo '<tr>';
            echo '<td>' . $registro5['codigosg'] . '</td>';
            echo '<td>' . $registro5['codigogp'] . '</td>';
            echo '<td>' . $registro5['nome'] . '</td>';
            ?>
            <td>
                <form action="ExcluiSubGrupo.php" method="post">
                    <input type="hidden" name="codigosg" id="codigosg" value="<?= $registro5['codigosg'] ?>">
                    <button class=report-button><i class="fas fa-trash button-icon"></i></button>
                </form>
            </td>
            <td>
                <form action="EditarSubGrupo.php" method="post">
                    <input type="hidden" name="codigosg" id="codigosg" value="<?= $registro5['codigosg'] ?>">
                    <input type="hidden" name="codigogp" id="codigogp" value="<?= $registro5['codigogp'] ?>">
                    <input type="hidden" name="nome" id="nome" value="<?= $registro5['nome'] ?>">
                    <button class=report-button><i class="fas fa-edit button-icon"></i></button>
                </form>
            </td>
            <?php
            echo '</tr>';
        }
        ?>




    </table>
    <br>
    <div class="button-grid">
    <a href="/Oficinadelanternagem/Telas/TelasSubGrupo/FormNovoSubGrupo.php"><button>
        <i class="fas fa-plus button-icon"></i> Cadastrar SubGrupo</button></a>


    <a href="/Oficinadelanternagem/Database/"><button>
        <i class="fas fa-arrow-left button-icon"></i> Voltar
            Menu</button></a>
            </div>
</body>


</html>