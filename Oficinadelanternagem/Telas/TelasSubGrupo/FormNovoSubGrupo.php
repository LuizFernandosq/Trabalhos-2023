<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Gagalin&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="../../Estilo/EstiloForms.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Maven+Pro:wght@500&family=Poppins:wght@300&display=swap" rel="stylesheet">
    <title>Formulario do sub grupo</title>
</head>
<body>
<h1>Novo Sub Grupo</h1>
<form action="NovoSubGrupo.php" method="post">
    <fieldset>
<label action="codigogp" method="post">  Grupo </label>
<select name="codigogp" id="codigogp">
            <option value=""></option>
            <?php
            define('BASE', $_SERVER['DOCUMENT_ROOT'] . '\Oficinadelanternagem');
            require_once BASE . '\Modelo\Grupo.php';
            require_once BASE . '\Database\Conexao.php';
            require_once BASE . '\DAO\DAOGrupo.php';

            $daogrupo = new DAOGrupo();
            $listadegrupo = $daogrupo->listaTodos();
            foreach ($listadegrupo as $grupo) {
                ?>
                <option value="<?= $grupo['codigogp'] ?>">
                <?= $grupo['nome'] ?></option>

            <?php
            }

            ?>
             </select>
        <br>
        <br>
        
    <label action="nome" method="post"> Nome </label>
    <input type="text" class="form-control" placeholder="Coloque o nome do sub-grupo"
                    aria-label="Coloque o nome do sub-grupo" aria-describedby="basic-addon2"id="nome" name="nome">
    </fieldset>
    
    <button>Salvar</button>
    
</html>