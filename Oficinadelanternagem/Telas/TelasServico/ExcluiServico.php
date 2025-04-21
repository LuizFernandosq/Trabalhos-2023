<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir serviços</title>
</head>
<body>
    <?php
 define('BASE', $_SERVER['DOCUMENT_ROOT'].'\Oficinadelanternagem');
 
 
 
 require_once BASE . '\modelo\Servico.php';
 require_once BASE . '\database\Conexao.php';
 require_once BASE . '\DAO\DAOServico.php';

 $cser = $_POST['codigoser'];

$dao = new DAOServico();
if($dao-> exclui($cser)){
    header ("location: http:/Oficinadelanternagem/Telas/TelasServico/ListaServico.php");
       
} else {
    echo 'Deu Zebra.';
}
?>
</body>
</html>