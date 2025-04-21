<?php
define('BASE', $_SERVER['DOCUMENT_ROOT'] . '\Oficinadelanternagem');
require_once BASE . '\Modelo\Servico.php';
require_once BASE . '\Database\Conexao.php';
require_once BASE . '\DAO\DAOServico.php';

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

$servico = new Servico($cser,$acre,$soma,$val, $des, $cca, $ccl, $dde, $pre, $dds, $ter);


$dao = new DAOServico();
if ($dao->altera($servico)) {
    header("location: http:/Oficinadelanternagem/Telas/TelasServico/ListaServico.php");
} else {
    echo 'Algum erro.';
}