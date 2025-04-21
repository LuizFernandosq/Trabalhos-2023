<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo Serviço</title>
</head>
<body>
    <?php

define('BASE', $_SERVER['DOCUMENT_ROOT'] . '\Oficinadelanternagem');
require_once BASE . '\Modelo\ItensServico.php';
require_once BASE . '\Database\Conexao.php';
require_once BASE . '\DAO\DAOItensServico.php';

$cids = $_POST['codigoids'];
$cta = $_POST['codigota'];
$cser = $_POST['codigoser'];
$cgp = $_POST['codigogp'];
$csg = $_POST['codigosg'];
$cfun = $_POST['codigofun'];
$sit = $_POST['situacao'];
$val = $_POST['valor'];

$itensservico = new ItensServico($cids, $cta, $cser, $cgp, $csg,$cfun,$sit,$val);
$daoItensServico = new DAOItensServico();

if ($daoItensServico->inclui($itensservico)) {
   
    header ("location: http://localhost/Oficinadelanternagem/Telas/TelasServico/ListaServico.php");
   
} else {
    echo 'Deu Zebra.';
}
?>
</body>
</html>