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
    <title>Formulario de Carros </title>
</head>

<body>
    <h1>Novo Carro</h1>

    <form action="NovoCarro.php" method="post">
        <fieldset>

            <div class="campo">
                <label for="marca">Marca </label>
                <input type="text" class="form-control" placeholder="Coloque a marca do veiculo"
                    aria-label="Coloque a marca do veiculo" aria-describedby="basic-addon2" id=marca name="marca">
            </div>

            <div class="campo">
                <label for="modelo">Modelo </label>
                <input type="text" class="form-control" placeholder="Coloque o modelo do veiculo"
                    aria-label="Coloque o modelo" aria-describedby="basic-addon2" id=modelo name="modelo">

            </div>
            <div class="campo">
                <label for="placa">Placa </label>
                <input type="text" class="form-control" placeholder="Coloque a placa do veiculo(sem formatação)"
                    aria-label="Coloque a placa do veiculo(sem formatação)" aria-describedby="basic-addon2" id=placa
                    name="placa">
            </div>

            <div class="campo">
                <label for="chassi">Chassi </label>
                <input type="text" class="form-control" placeholder="Coloque o chassi do veiculo(sem formatação)"
                    aria-label="Coloque o chassi do veiculo(sem formatação)" aria-describedby="basic-addon2" id=chassi
                    name="chassi">
            </div>
            <div class="campo">
                <label for="cor">Cor </label>
                <input type="color" id=cor name="cor">
            </div>
            <div class="campo">
                <label for="anodefabricacao">Ano de Fabricação </label>
                <input type="number" class="form-control" placeholder="Coloque o ano do veiculo"
                    aria-label="Coloque o ano do veiculo" aria-describedby="basic-addon2" id=anodefabricacao
                    name="anodefabricacao">

            </div>


            <div class="campo">
                <label for="proprietario">Proprietario </label>
                <select name="proprietario" id="proprietario">
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
            </div>

        </fieldset>

        <button>Salvar</button>





</body>

</html>