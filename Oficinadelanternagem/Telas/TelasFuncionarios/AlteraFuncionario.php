<?php
define('BASE', $_SERVER['DOCUMENT_ROOT'] . '\Oficinadelanternagem');
require_once BASE . '\modelo\Funcionario.php';
require_once BASE . '\database\Conexao.php';
require_once BASE . '\DAO\DAOFuncionario.php';

$cf = $_POST['codigofun'];
$nom = $_POST['nome'];
$sal = $_POST['salario'];
$cpf = $_POST['cpf'];
$esp = $_POST['especializacao'];
$tel = $_POST['telefone'];
$est = $_POST['estado'];
$cep = $_POST['cep'];
$cid = $_POST['cidade'];
$bai = $_POST['bairro'];
$rua = $_POST['rua'];
$num = $_POST['numcasa'];
$ema = $_POST['email'];
$dat = $_POST['datadeingresso'];

$funcionario = new Funcionario($cf, $nom, $sal, $cpf, $esp, $tel, $est, $cep, $cid, $bai, $rua, $num, $ema, $dat);

$dao = new DAOFuncionario();
if ($dao->altera($funcionario)) {
    header ("location: http:/Oficinadelanternagem/Telas/TelasFuncionarios/ListaFuncionario.php");;
} else {
    echo 'Algum erro.';
}