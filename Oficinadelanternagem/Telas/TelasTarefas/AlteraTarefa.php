<?php
define('BASE', $_SERVER['DOCUMENT_ROOT'].'\Oficinadelanternagem');
require_once BASE . '\modelo\Tarefa.php';
require_once BASE . '\database\Conexao.php';
require_once BASE . '\DAO\DAOTarefa.php';

$cta = $_POST['codigota'];
$des = $_POST['descricao'];

$tarefa = new Tarefa($cta,$des);

$dao =  new DAOTarefa();
if($dao->altera($tarefa)){
    header ("location: http:/Oficinadelanternagem/Telas/TelasTarefas/ListaTarefa.php");
} else {
    echo 'Algum erro.';
}