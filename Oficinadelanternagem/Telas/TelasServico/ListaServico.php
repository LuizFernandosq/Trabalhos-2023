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
    <h1>Lista de serviços</h1>
    <table border="1">
        <tr>
            <td>#</td>
            <td>Acrescimo</td>
            <td>itens somados</td>
            <td>Valor Final</td>
            <td>Descrição</td>
            <td># Carro</td>
            <td># Cliente</td>
            <td>Data de entrada</td>
            <td>Previsão de saida</td>
            <td>Data de Saida</td>
            <td>Terceirizacao</td>
            <td>EXCLUIR</td>
            <td>ALTERAR</td>
            <td>ITENS</td>
</tr>

            <?php
            define('BASE', $_SERVER['DOCUMENT_ROOT'] . '\Oficinadelanternagem');
            require_once BASE . '\Modelo\Servico.php';
            require_once BASE . '\Database\Conexao.php';
            require_once BASE . '\DAO\DAOServico.php';

            $daoServico = new DAOServico();
            $listaservico = $daoServico->listaTodos();

            foreach ($listaservico as $registro6) {
                echo '<tr>';
                echo '<td>' . $registro6['codigoser'] . '</td>';
                echo '<td>' . $registro6['acrescimo'] . '</td>';
                echo '<td>' . $registro6['soma'] . '</td>';
                echo '<td>' . $registro6['valorfinal'] . '</td>';
                echo '<td>' . $registro6['descricao'] . '</td>';
                echo '<td>' . $registro6['codigocar'] . '</td>';
                echo '<td>' . $registro6['codigocli'] . '</td>';
                echo '<td>' . $registro6['datadeentrada'] . '</td>';
                echo '<td>' . $registro6['previsaodesaida'] . '</td>';
                echo '<td>' . $registro6['datadesaida'] . '</td>';
                echo '<td>' . $registro6['terceirizacao'] . '</td>';
                
                ?>
                <td>
                    <form action="ExcluiServico.php" method="post">
                        <input type="hidden" name="codigoser" id="codigoser" value="<?= $registro6['codigoser'] ?>">
                        <button class= report-button><i class="fas fa-trash button-icon"></i></button>
                    </form>
                </td>
                <td>
                    <form action="EditarServico.php" method="post">
                        <input type="hidden" name="codigoser" id="codigoser" value="<?= $registro6['codigoser'] ?>">
                        <input type="hidden" name="acrescimo" id="acrescimo" value="<?= $registro6['acrescimo'] ?>">
                        <input type="hidden" name="soma" id="soma" value="<?= $registro6['soma'] ?>">
                        <input type="hidden" name="valorfinal" id="valorfinal" value="<?= $registro6['valorfinal'] ?>">
                        <input type="hidden" name="descricao" id="descricao" value="<?= $registro6['descricao'] ?>">
                        <input type="hidden" name="codigocar" id="codigocar" value="<?= $registro6['codigocar'] ?>">
                        <input type="hidden" name="codigocli" id="codigocli" value="<?= $registro6['codigocli'] ?>">
                        <input type="hidden" name="datadeentrada" id="datadeentrada" value="<?= $registro6['datadeentrada'] ?>">
                        <input type="hidden" name="previsaodesaida" id="previsaodesaida"value="<?= $registro6['previsaodesaida'] ?>">
                        <input type="hidden" name="datadesaida" id="datadesaida" value="<?= $registro6['datadesaida'] ?>">
                        <input type="hidden" name="terceirizacao" id="terceirizacao" value="<?= $registro6['terceirizacao'] ?>">





                        <button class= report-button><i class="fas fa-edit button-icon"></i></button>
                    </form>
                </td>
                
                <td>
                <form action="TelasItens.php" method="post">
                <input type="hidden" name="codigoser" id="codigoser" value="<?= $registro6['codigoser'] ?>">
                    <button class= report-button><i class="fa fa-check-square"></i></button>
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
            <a href="http://localhost/Oficinadelanternagem/Telas/TelasServico/FormNovoServico.php"><button><i class="fas fa-plus button-icon"></i> Cadastrar
                    Servico</button></a>
            
            
            <a href="/Oficinadelanternagem/Database/"><button><i class="fas fa-arrow-left button-icon"></i> Voltar Menu</button></a>
            
            
            <a href="http://localhost/Oficinadelanternagem/Telas/TelasItensServico/FormNovoItemServico.php"><button><i class="fas fa-plus button-icon"></i> Cadastrar 
                    item serviço para algum  serviço</button></a>
            </div>

</body>

</html>