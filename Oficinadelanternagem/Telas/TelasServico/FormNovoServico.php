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
    <title>Formulario de servico</title>
</head>
<body>
    <h1>Formulario de Novo Serviços</h1>

    <form action="NovoServico.php" method="post">
        <fieldset>
    <label action="acrescimo" method="post"> Acrescimo </label>
    <input type="number" class="form-control" placeholder="Caso o serviço tenha um valor a ser acrescido coloque-o aqui"
                    aria-label="Caso o serviço tenha um valor a ser acrescido coloque-o aqui" aria-describedby="basic-addon2" id="acrescimo" name="acrescimo"><br>
    <br>
    <label action="descricao" method="post"> Descrição </label>
    <input type="text" class="form-control" placeholder="Coloque a descrição do serviço"
                    aria-label="Coloque a descrição do serviço" aria-describedby="basic-addon2" id="descricao" name="descricao"><br>
    <br>
    <label action="codigocar" method="post"> Codigo do carro </label>
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
                <?= $carro['modelo'] ?><label> / </label>
                <?= $carro['placa'] ?>
            </option>
                
            <?php
            }

            ?>
        </select>
        <br>
        <br>
    <label action="codigocli" method="post"> Codigo do cliente </label>
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
                <?= $cliente['nome'] ?></option>
                
            <?php
            }

            ?>
        </select>
        <br>
        <br>
    <label action="datadeentrada" method="post"> Data de entrada </label>
    <input type="date" id="datadeentrada" name="datadeentrada"><br>
    <br>
    <label action="previsaodesaida" method="post"> Previsão de saida </label>
    <input type="date" id="previsaodesaida" name="previsaodesaida"><br>
    <br>
    <label action="datadesaida" method="post"> Data de saida </label>
    <input type="date" id="datadesaida" name="datadesaida"><br>
    <br>
    <label action="terceirizacao" method="post"> Terceirização </label>
    <input type="text" class="form-control" placeholder="Coloque a terceirização do serviço caso tenha"
                    aria-label="Coloque a terceirização do serviço caso tenha" aria-describedby="basic-addon2" id="terceirizacao" name="terceirizacao">
    </fieldset>

    <button>Salvar</button>
    

</body>
</html>