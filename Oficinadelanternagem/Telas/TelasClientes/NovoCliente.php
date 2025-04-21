<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    define('BASE', $_SERVER['DOCUMENT_ROOT'] . '\Oficinadelanternagem');
    require_once BASE . '\Modelo\Cliente.php';
    require_once BASE . '\Database\Conexao.php';
    require_once BASE . '\DAO\DAOCliente.php';

    $cl = $_POST['codigocli'];
    $cpf = $_POST['cpf'];
    $nom = $_POST['nome'];
    $est = $_POST['estado'];
    $cep = $_POST['cep'];
    $cid = $_POST['cidade'];
    $bai = $_POST['bairro'];
    $rua = $_POST['rua'];
    $num = $_POST['numcasa'];
    $ema = $_POST['email'];
    $tel = $_POST['telefone'];
   


    $cliente = new Cliente($cl, $cpf, $nom, $est, $cep, $cid, $bai, $rua, $num, $ema, $tel);
    $daoCliente = new DAOCliente();

    if ($daoCliente->inclui($cliente)) {
       
        header ("location: http:/Oficinadelanternagem/Telas/TelasClientes/ListaCliente.php");
       
    } else {
        echo 'Deu Zebra.';
    }
    ?>
</body>

</html>