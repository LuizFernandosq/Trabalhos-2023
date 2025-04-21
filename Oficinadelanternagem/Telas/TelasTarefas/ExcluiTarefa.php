<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir tarefas</title>
</head>
<body>
    <?php
 define('BASE', $_SERVER['DOCUMENT_ROOT'].'\Oficinadelanternagem');
 
 
 
 require_once BASE . '\modelo\Tarefa.php';
 require_once BASE . '\database\Conexao.php';
 require_once BASE . '\DAO\DAOTarefa.php';

 $cta = $_POST['codigota'];

$dao = new DAOTarefa();
if($dao-> exclui($cta)){
    header ("location: http:/Oficinadelanternagem/Telas/TelasTarefas/ListaTarefa.php");
       
} else {
    echo 'Deu Zebra.';
}
?>
</body>
</html>