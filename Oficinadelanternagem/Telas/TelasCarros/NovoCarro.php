<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo Carro</title>
</head>
<body>
    <?php
        define('BASE', $_SERVER['DOCUMENT_ROOT'] . '\Oficinadelanternagem');
        require_once BASE . '\Modelo\Carro.php';
        require_once BASE . '\Database\Conexao.php';
        require_once BASE . '\DAO\DAOCarro.php';

        $cc = $_POST['codigocar'];
        $mar = $_POST['marca'];
        $mod = $_POST['modelo'];
        $pla = $_POST['placa'];
        $cha = $_POST['chassi'];
        $cor = $_POST['cor'];
        $adf = $_POST['anodefabricacao'];
        $pro = $_POST['proprietario'];

        $carro = new Carro($cc,$mar,$mod,$pla,$cha,$cor,$adf,$pro);
        $daoCarro = new DAOCarro();

        if ($daoCarro->inclui($carro)) {
            header ("location: http:/Oficinadelanternagem/Telas/TelasCarros/ListaCarro.php");
        } else {
            echo 'Deu Zebra.';
        }
        
    ?>
</body>
</html>