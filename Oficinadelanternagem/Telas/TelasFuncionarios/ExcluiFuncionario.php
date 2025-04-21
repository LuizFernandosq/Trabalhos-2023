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
 
 
 
 require_once BASE . '\modelo\Funcionario.php';
 require_once BASE . '\database\Conexao.php';
 require_once BASE . '\DAO\DAOFuncionario.php';

 $cf = $_POST['codigofun'];

$dao = new DAOFuncionario();
if($dao-> exclui($cf)){
    header ("location: http:/Oficinadelanternagem/Telas/TelasFuncionarios/ListaFuncionario.php");
       
} else {
    echo 'Deu Zebra.';
}
?>
</body>
</html>