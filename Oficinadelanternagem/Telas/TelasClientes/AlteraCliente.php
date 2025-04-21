<?php
define('BASE', $_SERVER['DOCUMENT_ROOT'].'\Oficinadelanternagem');
require_once BASE . '\modelo\Cliente.php';
require_once BASE . '\database\Conexao.php';
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

$dao =  new DAOCliente();
if($dao->altera($cliente)){
    header ("location: http:/Oficinadelanternagem/Telas/TelasClientes/ListaCliente.php");
} else {
    echo 'Algum erro.';
}