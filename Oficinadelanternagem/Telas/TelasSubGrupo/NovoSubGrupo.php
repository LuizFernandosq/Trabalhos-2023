<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo Sub Grupo</title>
</head>
<body>
<?php

define('BASE', $_SERVER['DOCUMENT_ROOT'] . '\Oficinadelanternagem');
require_once BASE . '\Modelo\SubGrupo.php';
require_once BASE . '\Database\Conexao.php';
require_once BASE . '\DAO\DAOSubGrupo.php';

$csg = $_POST['codigoser'];
$cg = $_POST['codigogp'];
$nom = $_POST['nome'];

$subgrupo = new SubGrupo($csg, $cg, $nom);
$daoSubGrupo = new DAOSubGrupo();

if ($daoSubGrupo->inclui($subgrupo)) {
   
    header ("location: http:/Oficinadelanternagem/Telas/TelasSubGrupo/ListaSubGrupo.php");
   
} else {
    echo 'Deu Zebra.';
}
?>

</body>
</html>