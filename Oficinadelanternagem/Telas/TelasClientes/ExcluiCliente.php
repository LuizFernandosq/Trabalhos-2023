<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir cliente</title>
</head>
<body>
    <?php
 define('BASE', $_SERVER['DOCUMENT_ROOT'].'\Oficinadelanternagem');
 
 
 
 require_once BASE . '\modelo\Cliente.php';
 require_once BASE . '\database\Conexao.php';
 require_once BASE . '\DAO\DAOCliente.php';

 $cl = $_POST['codigocli'];

$dao = new DAOCliente();
if($dao-> exclui($cl)){
    header ("location: http:/Oficinadelanternagem/Telas/TelasClientes/ListaCliente.php");
       
} else {
    echo 'Deu Zebra.';
}
?>
</body>
</html>
