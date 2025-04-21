<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo Grupo</title>
</head>

<body>
    <?php
    define('BASE', $_SERVER['DOCUMENT_ROOT'] . '\Oficinadelanternagem');
    require_once BASE . '\Modelo\Grupo.php';
    require_once BASE . '\Database\Conexao.php';
    require_once BASE . '\DAO\DAOGrupo.php';


    $cg = $_POST['codigogp'];
    $nom = $_POST['nome'];

    $grupo = new Grupo($cg,$nom);
    $daoGrupo = new DAOGrupo();

    if ($daoGrupo->inclui($grupo)) {

        header("location: http:/Oficinadelanternagem/Telas/TelasGrupo/ListaGrupo.php");
        
    } else {
        echo 'Deu Zebra.';
    }
    ?>
</body>

</html>