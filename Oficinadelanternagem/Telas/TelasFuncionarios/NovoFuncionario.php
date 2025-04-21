<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo Funcionario </title>
</head>

<body>
    <?php
    define('BASE', $_SERVER['DOCUMENT_ROOT'] . '\Oficinadelanternagem');
    require_once BASE . '\Modelo\Funcionario.php';
    require_once BASE . '\Database\Conexao.php';
    require_once BASE . '\DAO\DAOFuncionario.php';
    

        $cf = $_POST['codigofun'];
        $nom = $_POST['nome'];
        $sal = $_POST['salario'];
        $cpf = $_POST['cpf'];
        $esp = $_POST['especializacao'];
        $tel = $_POST['telefone'];
        $est = $_POST['estado'];
        $cep = $_POST['cep'];
        $cid = $_POST['cidade'];
        $bai = $_POST['bairro'];
        $rua = $_POST['rua'];
        $num = $_POST['numcasa'];
        $ema = $_POST['email'];
        $dat = $_POST['datadeingresso'];

$funcionario = new Funcionario($cf, $nom, $sal, $cpf, $esp, $tel, $est, $cep, $cid, $bai, $rua, $num, $ema, $dat);
$daoFuncionario = new DAOFuncionario();

        if ($daoFuncionario->inclui($funcionario)) {
            header ("location: http:/Oficinadelanternagem/Telas/TelasFuncionarios/ListaFuncionario.php");
        } else {
            echo 'Deu Zebra.';
        }
        ?>
</body>

</html>