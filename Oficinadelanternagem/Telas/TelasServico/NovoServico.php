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
require_once BASE . '\Modelo\Servico.php';
require_once BASE . '\Database\Conexao.php';
require_once BASE . '\DAO\DAOServico.php';


$acre = $_POST['acrescimo'];
$des = $_POST['descricao'];
$cca = $_POST['codigocar'];
$ccl = $_POST['codigocli'];
$dde = $_POST['datadeentrada'];
$pre = $_POST['previsaodesaida'];
$dds = $_POST['datadesaida'];
$ter = $_POST['terceirizacao'];

$servico = new Servico(0,0,0,0, $des, $cca, $ccl,$dde,$pre,$dds,$ter);
$daoServico = new DAOServico();

if ($daoServico->inclui($servico)) {
   
    header ("location: http:/Oficinadelanternagem/Telas/TelasServico/ListaServico.php");
   
} else {
    echo 'Deu Zebra.';
}
?>
</body>
</html>
