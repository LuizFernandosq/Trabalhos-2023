<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir itens de serviços</title>
</head>
<body>
    <?php
 define('BASE', $_SERVER['DOCUMENT_ROOT'].'\Oficinadelanternagem');
 
 
 
 require_once BASE . '\modelo\ItensServico.php';
 require_once BASE . '\database\Conexao.php';
 require_once BASE . '\DAO\DAOItensServico.php';

 $cids = $_POST['codigoids'];

$dao = new DAOItensServico();
if($dao-> exclui($cids)){
    header ("location: http:/Oficinadelanternagem/Telas/TelasItensServico/ListaItemServico.php");
       
} else {
    echo 'Deu Zebra.';
}
?>
</body>
</html>