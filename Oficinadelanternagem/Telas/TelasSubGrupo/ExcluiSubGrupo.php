<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir Sub Grupo</title>
</head>
<body>
    <?php
 define('BASE', $_SERVER['DOCUMENT_ROOT'].'\Oficinadelanternagem');
 
 
 
 require_once BASE . '\modelo\SubGrupo.php';
 require_once BASE . '\database\Conexao.php';
 require_once BASE . '\DAO\DAOSubGrupo.php';

 $csg = $_POST['codigosg'];

$dao = new DAOSubGrupo();
if($dao-> exclui($csg)){
    header ("location: http:/Oficinadelanternagem/Telas/TelasSubGrupo/ListaSubGrupo.php");
       
} else {
    echo 'Deu Zebra.';
}
?>
</body>
</html>