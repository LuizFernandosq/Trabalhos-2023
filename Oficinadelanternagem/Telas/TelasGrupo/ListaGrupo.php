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
    <title>Listagem dos Grupos</title>
</head>

<body>
<style>
        td{
    border: 1px solid #e5f2f9;
    max-width: 275px;
    text-align: center;
    
    
 }
    </style>
    <h1> Listagem de Grupos</h1>
    <table border="1">
        <tr>
            <td>#</td>
            <td>Nome</td>
            <td>EXCLUIR</td>
            <td>ALTERAR</td>
            
</tr>
            

            <?php
            define('BASE', $_SERVER['DOCUMENT_ROOT'] . '\Oficinadelanternagem');
            require_once BASE . '\Modelo\Grupo.php';
            require_once BASE . '\Database\Conexao.php';
            require_once BASE . '\DAO\DAOGrupo.php';
            
            $daoGrupo = new DAOGrupo();
            $listagrupo = $daoGrupo->listaTodos();

            foreach ($listagrupo as $registro4) {
                echo '<tr>';
                echo '<td>' . $registro4['codigogp'] . '</td>';
                echo '<td>' . $registro4['nome'] . '</td>';
            
            ?>
            <td>
                    <form action="ExcluiGrupo.php" method="post">
                        <input type="hidden" name="codigogp" id="codigogp" value="<?= $registro4['codigogp'] ?>">
                        <button class= report-button><i class="fas fa-trash button-icon"></i></button>
                    </form>
                    <td>
                    <form action="EditarGrupo.php" method="post">
                        <input type="hidden" name="codigogp" id="codigogp" value="<?= $registro4['codigogp'] ?>">
                        <input type="hidden" name="nome" id="nome" value="<?= $registro4['nome'] ?>">
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
    <a href="/Oficinadelanternagem/Telas/TelasGrupo/FormNovoGrupo.php"> <button><i class="fas fa-plus button-icon"></i> Cadastrar Grupo</button>
            
            
    <a href="/Oficinadelanternagem/Database/">
            <button><i class="fas fa-arrow-left button-icon"></i> Voltar Menu</button>
        
            </a>
            </div>
</body>

</html>