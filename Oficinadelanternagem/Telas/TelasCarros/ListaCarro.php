<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Gagalin&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="../../Estilo/EstiloListas.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Maven+Pro:wght@500&family=Poppins:wght@300&display=swap" rel="stylesheet">
    <title>Document</title>
    
</head>
<body>
<style>
        td{
    border: 1px solid #e5f2f9;
    max-width: 275px;
    text-align: center;
    
    
 }
    </style>
    <h1> Listagem de Carros</h1>
    <table >
      
        <tr  class="list-group">
            <td class="list-group-item">#</td>
            <td  class="list-group-item">Marca</td>
            <td  class="list-group-item">Modelo</td>
            <td  class="list-group-item">Placa</td>
            <td  class="list-group-item">Chassi</td>
            <td  class="list-group-item">Cor</td>
            <td  class="list-group-item">Ano de Fabricação</td>
            <td  class="list-group-item">Proprietario</td>
            <td  class="list-group-item">EXCLUIR</td>
            <td  class="list-group-item">ALTERAR</td>
        </tr>
        
        
        
        <?php
        define('BASE', $_SERVER['DOCUMENT_ROOT'] . '\Oficinadelanternagem');
        require_once BASE . '\Modelo\Carro.php';
        require_once BASE . '\Database\Conexao.php';
        require_once BASE . '\DAO\DAOCarro.php';

        $daoCarro = new DAOCarro();
        $listacarro = $daoCarro->listaTodos();

        foreach ($listacarro as $registro2) {
            echo '<tr>';
            echo '<td>' . $registro2['codigocar'] . '</td>';
            echo '<td>' . $registro2['marca'] . '</td>';
            echo '<td>' . $registro2['modelo'] . '</td>';
            echo '<td>' . $registro2['placa'] . '</td>';
            echo '<td>' . $registro2['chassi'] . '</td>';
            echo '<td>' . $registro2['cor'] . '</td>';
            echo '<td>' . $registro2['anodefabricacao'] . '</td>';
            echo '<td>' . $registro2['proprietario'] . '</td>';
            ?>
            <td>
                <form action="ExcluiCarro.php" method="post">
                    <input type="hidden" name="codigocar" id="codigocar" value="<?= $registro2['codigocar'] ?>">
                    <button class= report-button><i class="fas fa-trash button-icon"></i></button>
                </form>
            </td>
            <td>
                <form action="EditarCarro.php" method="post">
                    <input type="hidden" name="codigocar" id="codigocar" value="<?= $registro2['codigocar'] ?>">
                    <input type="hidden" name="marca" id="marca" value="<?= $registro2['marca'] ?>">
                    <input type="hidden" name="modelo" id="modelo" value="<?= $registro2['modelo'] ?>">
                    <input type="hidden" name="placa" id="placa" value="<?= $registro2['placa'] ?>">
                    <input type="hidden" name="chassi" id="chassi" value="<?= $registro2['chassi'] ?>">
                    <input type="hidden" name="cor" id="cor" value="<?= $registro2['cor'] ?>">
                    <input type="hidden" name="anodefabricacao" id="anodefabricacao" value="<?= $registro2['anodefabricacao'] ?>">
                    <input type="hidden" name="proprietario" id="proprietario" value="<?= $registro2['proprietario'] ?>">

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
        <a href="/Oficinadelanternagem/Telas/TelasCarros/FormNovoCarro.php">
            <button><i class="fas fa-plus button-icon"></i> Cadastrar Carro</button>
        </a>
        <a href="/Oficinadelanternagem/Database/">
            <button><i class="fas fa-arrow-left button-icon"></i> Voltar Menu</button>
        </a>
    </div>
</body>
</html>
