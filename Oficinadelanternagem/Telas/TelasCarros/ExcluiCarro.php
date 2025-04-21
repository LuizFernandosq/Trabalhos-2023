<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir carro</title>
</head>
<body>
    <?php
 define('BASE', $_SERVER['DOCUMENT_ROOT'].'\Oficinadelanternagem');
 
 
 
 require_once BASE . '\modelo\Carro.php';
 require_once BASE . '\database\Conexao.php';
 require_once BASE . '\DAO\DAOCarro.php';

 $cc = $_POST['codigocar'];

$dao = new DAOCarro();
if($dao-> exclui($cc)){
    header ("location: http:/Oficinadelanternagem/Telas/TelasCarros/ListaCarro.php");
       
} else {
    echo 'Deu Zebra.';
}
?>
</body>
</html>