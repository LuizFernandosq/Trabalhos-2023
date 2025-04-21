<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Gagalin&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="../../Estilo/EstiloListas.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Maven+Pro:wght@500&family=Poppins:wght@300&display=swap" rel="stylesheet">
    <title>Listagem Funcionarios</title>
</head>

<body>
<body>
    <style>
        td{
    border: 1px solid #e5f2f9;
    max-width: 265px;
    text-align: center;
    
    
 }
 </style>
    <h1> Listagem de Funcionario</h1>
    <table >
        <tr>
            <td>#</td>
            <td>Nome</td>
            <td>Salario</td>
            <td>CPF</td>
            <td>Especialização</td>
            <td>Telefone</td>
            <td>Endereço</td>
            <td>E-mail</td>
            <td>Ingresso</td>
            <td>EXCLUIR</td>
            <td>ALTERAR</td>
</tr>

            <?php
            define('BASE', $_SERVER['DOCUMENT_ROOT'] . '\Oficinadelanternagem');
            require_once BASE . '\Modelo\Funcionario.php';
            require_once BASE . '\Database\Conexao.php';
            require_once BASE . '\DAO\DAOFuncionario.php';

            $daoFuncionario = new DAOFuncionario();
            $listafuncionario = $daoFuncionario->listaTodos();

            foreach ($listafuncionario as $registro3) {
                echo '<tr>';
                echo '<td>' . $registro3['codigofun'] . '</td>';
                echo '<td>' . $registro3['nome'] . '</td>';
                echo '<td>' . $registro3['salario'] . '</td>';
                echo '<td>' . $registro3['cpf'] . '</td>';
                echo '<td>' . $registro3['especializacao'] . '</td>';
                echo '<td>' . $registro3['telefone'] . '</td>';
                echo '<td>' . $registro3['estado'] . ' '.
                 $registro3['cep'] . '-'.
                 $registro3['cidade'] . '-'.  
                 $registro3['bairro'] . '-'.
                 $registro3['rua'] . '-'.
                 $registro3['numcasa'] ;
                echo '<td>' . $registro3['email'] . '</td>';
                echo '<td>' . $registro3['datadeingresso'] . '</td>';
                ?>
                <td>
                    <form action="ExcluiFuncionario.php" method="post">
                        <input type="hidden" name="codigofun" id="codigofun" value="<?= $registro3['codigofun'] ?>">
                        <button class= report-button><i class="fas fa-trash button-icon"></i></button>
                    </form>
                </td>
                <td>
                    <form action="EditarFuncionario.php" method="post">
                        <input type="hidden" name="codigofun" id="codigofun" value="<?= $registro3['codigofun'] ?>">
                        <input type="hidden" name="nome" id="nome" value="<?= $registro3['nome'] ?>">
                        <input type="hidden" name="salario" id="salario" value="<?= $registro3['salario'] ?>">
                        <input type="hidden" name="cpf" id="cpf" value="<?= $registro3['cpf'] ?>">
                        <input type="hidden" name="especializacao" id="especializacao" value="<?= $registro3['especializacao'] ?>">
                        <input type="hidden" name="telefone" id="telefone" value="<?= $registro3['telefone'] ?>">
                        <input type="hidden" name="estado" id="estado" value="<?= $registro3['estado'] ?>">
                        <input type="hidden" name="cep" id="cep" value="<?= $registro3['cep'] ?>">
                        <input type="hidden" name="cidade" id="cidade" value="<?= $registro3['cidade'] ?>">
                        <input type="hidden" name="bairro" id="bairro" value="<?= $registro3['bairro'] ?>">
                        <input type="hidden" name="rua" id="rua" value="<?= $registro3['rua'] ?>">
                        <input type="hidden" name="numcasa" id="numcasa" value="<?= $registro3['numcasa'] ?>">
                        <input type="hidden" name="email" id="email" value="<?= $registro3['email'] ?>">
                        <input type="hidden" name="datadeingresso" id="datadeingresso" value="<?= $registro3['datadeingresso'] ?>">




                        <button class= report-button><i class="fas fa-edit button-icon"></i></button>
                    </form>
                </td>
                <?php
                echo '</tr>';

            }
            ?>
            
            
            
    </table>
    <br>
    <div class="button-grid">
    <a href="/Oficinadelanternagem/Telas/TelasFuncionarios/FormNovoFuncionario.php"><button> <i class="fas fa-plus button-icon"></i> Cadastrar Funcionario</button></a>
        <a href="/Oficinadelanternagem/Database/">
            <button><i class="fas fa-arrow-left button-icon"></i> Voltar Menu</button>
        </a>
    </div>
</body>

</html>