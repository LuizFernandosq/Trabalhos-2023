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


$dao = new DAOItensServico();
if ($dao->altera($itensservico)) {
    header("location: http:/Oficinadelanternagem/Telas/TelasItensServico/ListaItemServico.php");
} else {
    echo 'Algum erro.';
}