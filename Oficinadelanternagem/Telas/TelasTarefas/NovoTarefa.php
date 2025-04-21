<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nova Tarefa</title>
</head>

<body>
    <?php
    define('BASE', $_SERVER['DOCUMENT_ROOT'] . '\Oficinadelanternagem');
    require_once BASE . '\Modelo\Tarefa.php';
    require_once BASE . '\Database\Conexao.php';
    require_once BASE . '\DAO\DAOTarefa.php';


    $cta = $_POST['codigota'];
    $des = $_POST['descricao'];

    $tarefa = new Tarefa($cta,$des);
    $daoTarefa = new DAOTarefa();

    if ($daoTarefa->inclui($tarefa)) {

        header("location: http:/Oficinadelanternagem/Telas/TelasTarefas/ListaTarefa.php");
        
    } else {
        echo 'Deu Zebra.';
    }
    ?>
</body>

</html>