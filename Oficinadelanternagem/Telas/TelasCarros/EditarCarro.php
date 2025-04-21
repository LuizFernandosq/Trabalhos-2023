<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Gagalin&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="../../Estilo/EstiloForms.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Maven+Pro:wght@500&family=Poppins:wght@300&display=swap" rel="stylesheet">
    <title>Alterar Carro</title>
</head>
<?php
    $cc = $_POST['codigocar'];
    $mar = $_POST['marca'];
    $mod = $_POST['modelo'];
    $pla = $_POST['placa'];
    $cha = $_POST['chassi'];
    $cor = $_POST['cor'];
    $adf = $_POST['anodefabricacao'];
    $pro = $_POST['proprietario'];
?>
<body>
    <h1>Editar Carros</h1>
    <form action="AlteraCarro.php" method="post">
        <fieldset>
    <input type="hidden" id="codigocar" name="codigocar" value="<?= $cc?>">
    <label action="marca" method="post"> Marca: </label>
    <input type="text" id="marca" name="marca" value="<?=$mar?>">
    <label action="modelo" method="post"> Modelo: </label>
    <input type="text" id="modelo" name="modelo" value="<?=$mod?>">
    <label action="placa" method="post"> Placa: </label>
    <input type="text" id="placa" name="placa" value="<?=$pla?>">
    <label action="chassi" method="post"> Chassi: </label>
    <input type="text" id="chassi" name="chassi" value="<?=$cha?>">
    <label action="cor" method="post"> Cor: </label>
    <input type="color" id="cor" name="cor" value="<?=$cor?>">
    <label action="anodefabricacao" method="post"> Ano de Fabricação: </label>
    <input type="number" id="anodefabricacao" name="anodefabricacao" value="<?=$adf?>">
    <label action="proprietario" method="post"> Proprietario: </label> 
    <select name="proprietario" id="proprietario" value="<?=$pro?>">
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
                <?= $cliente['nome'] ?></option>
                

            <?php
            }

            ?>
            
        </select>
        </fieldset>
        
    
    <button>Salvar</button>
</body>
</html>