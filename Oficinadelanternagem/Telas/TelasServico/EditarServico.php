<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Gagalin&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="../../Estilo/EstiloForms.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Maven+Pro:wght@500&family=Poppins:wght@300&display=swap" rel="stylesheet">
    
    <title>Alterar Serviço</title>
</head>
<?php
$cser = $_POST['codigoser'];
$acre = $_POST['acrescimo'];
$soma = $_POST['soma'];
$val = $_POST['valorfinal'];
$des = $_POST['descricao'];
$cca = $_POST['codigocar'];
$ccl = $_POST['codigocli'];
$dde = $_POST['datadeentrada'];
$pre = $_POST['previsaodesaida'];
$dds = $_POST['datadesaida'];
$ter = $_POST['terceirizacao'];
?>

<body>
    <h1>Editar Serviço</h1>
    <form action="AlteraServico.php" method="post">
        <fieldset>
        <input type="hidden" id="codigoser" name="codigoser" value="<?= $cser?>">
        <label action="acrescimo" method="post"> Acrescimo </label>
        <input type="number" id="acrescimo" name="acrescimo" value="<?= $acre?>">
        <label action="descricao" method="post"> Descrição </label>
        <input type="text" id="descricao" name="descricao" value="<?= $des?>">
        <label action="codigocar" method="post"> Codigo do Carro </label>
        <select name="codigocar" id="codigocar">
            <option value=""></option>
            <?php
            define('BASE', $_SERVER['DOCUMENT_ROOT'] . '\Oficinadelanternagem');
            require_once BASE . '\Modelo\Carro.php';
            require_once BASE . '\Database\Conexao.php';
            require_once BASE . '\DAO\DAOCarro.php';

            $daocarro = new DAOCarro();
            $listadecarro = $daocarro->listaTodos();
            foreach ($listadecarro as $carro) {
                ?>
                <option value="<?= $carro['codigocar'] ?>">
                    <?= $carro['codigocar'] ?> <label> / </label>
                    <?= $carro['marca'] ?>
                    <?= $carro['modelo'] ?> <label> / </label>
                    <?= $carro['placa'] ?>
                </option>

                <?php
            }

            ?>
        </select>
        <br>
        <br>
        <label action="codigocli" method="post"> Codigo do Cliente </label>
        <select name="codigocli" id="codigocli">
            <option value=""></option>
            <?php
            define('BASE', $_SERVER['DOCUMENT_ROOT'] . '\Oficinadelanternagem');
            require_once BASE . '\Modelo\Cliente.php';
            require_once BASE . '\Database\Conexao.php';
            require_once BASE . '\DAO\DAOCliente.php';

            $daocliente = new DAOCliente();
            $listadecliente = $daocliente->listaTodos();
            foreach ($listadecliente as $cliente) {
                ?>
                <option value="<?= $cliente['codigocli'] ?>">
                    <?= $cliente['codigocli'] ?> <label> / </label>
                    <?= $cliente['nome'] ?>
                </option>

                <?php
            }

            ?>
        </select>
        <label action="datadeentrada" method="post"> Data de entrada </label>
        <input type="date" id="datadeentrada" name="datadeentrada" value="<?=$dde?>">
        <label action="previsaodesaida" method="post"> Previsão de Saida </label>
        <input type="date" id="previsaodesaida" name="previsaodesaida" value="<?=$pre?>">
        <label action="datadesaida" method="post"> Data de Saida </label>
        <input type="date" id="datadesaida" name="datadesaida" value="<?=$dds?>">
        <label action="terceirizacao" method="post"> Terceirização </label>
        <input type="text" id="terceirizacao" name="terceirizacao" value="<?=$ter?>">
        </fieldset>
        <button>Salvar</button>
</body>

</html>