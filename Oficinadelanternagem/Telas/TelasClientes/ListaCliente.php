<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Gagalin&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="../../Estilo/EstiloListas.css">
    <title>Listagem de clientes</title>
</head>

<body>
    <style>
        td{
    border: 1px solid #e5f2f9;
    max-width: 275px;
    text-align: center;
    
    
 }
    </style>
    <h1>Listagem de clientes</h1>
    <table >
        
        <tr  class="list-group">
            <td class="list-group-item">#</td>
            <td class="list-group-item">CPF</td>
            <td class="list-group-item">Nome</td>
            <td class="list-group-item">Endereço</td>
            <td class="list-group-item">Contatos</td>
            <td class="list-group-item"> EXCLUIR</td>
            <td class="list-group-item" >ALTERAR</td>
</tr>

            <?php
            define('BASE', $_SERVER['DOCUMENT_ROOT'] . '\Oficinadelanternagem');
            require_once BASE . '\Modelo\Cliente.php';
            require_once BASE . '\Database\Conexao.php';
            require_once BASE . '\DAO\DAOCliente.php';

            $daoCliente = new DAOCliente();
            $listacliente = $daoCliente->listaTodos();

            foreach ($listacliente as $registro1) {
                echo '<tr>';
                echo '<td>' . $registro1['codigocli'] . '</td>';
                echo '<td>' . $registro1['cpf'] . '</td>';
                echo '<td>' . $registro1['nome'] . '</td>';
                echo '<td>' . $registro1['estado'] . ' '.
                 $registro1['cep'] . '-'.
                 $registro1['cidade'] . '-'.  
                 $registro1['bairro'] . '-'.
                 $registro1['rua'] . '-'.
                 $registro1['numcasa'] ;
                echo '<td>' . $registro1['telefone'] . '-'.
                 $registro1['email'] . '</td>';
                ?>
                <td>
                    <form action="ExcluiCliente.php" method="post">
                        <input type="hidden" name="codigocli" id="codigocli" value="<?= $registro1['codigocli'] ?>">
                        <button class= report-button><i class="fas fa-trash button-icon"></i></button>
                    </form>
                </td>
                <td>
                    <form action="EditarCliente.php" method="post">
                        <input type="hidden" name="codigocli" id="codigocli" value="<?= $registro1['codigocli'] ?>">
                        <input type="hidden" name="cpf" id="cpf" value="<?= $registro1['cpf'] ?>">
                        <input type="hidden" name="nome" id="nome" value="<?= $registro1['nome'] ?>">
                        <input type="hidden" name="estado" id="estado" value="<?= $registro1['estado'] ?>">
                        <input type="hidden" name="cep" id="cep" value="<?= $registro1['cep'] ?>">
                        <input type="hidden" name="cidade" id="cidade" value="<?= $registro1['cidade'] ?>">
                        <input type="hidden" name="bairro" id="bairro" value="<?= $registro1['bairro'] ?>">
                        <input type="hidden" name="rua" id="rua" value="<?= $registro1['rua'] ?>">
                        <input type="hidden" name="numcasa" id="numcasa" value="<?= $registro1['numcasa'] ?>">
                        <input type="hidden" name="email" id="email" value="<?= $registro1['email'] ?>">
                        <input type="hidden" name="telefone" id="telefone" value="<?= $registro1['telefone'] ?>">

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
    <a href="/Oficinadelanternagem/Telas/TelasClientes/FormNovoCliente.php"><button><i class="fas fa-plus button-icon"></i> Cadastrar Cliente</button></a>
        <a href="/Oficinadelanternagem/Database/">
            <button><i class="fas fa-arrow-left button-icon"></i> Voltar Menu</button>
        
            </a>
    </div>
</body>

</html>