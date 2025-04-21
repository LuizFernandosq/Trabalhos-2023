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
    <title>Alterar grupo</title>
</head>
<body>
    <?php
 $cg = $_POST['codigogp'];
 $nom = $_POST['nome'];


    ?>
     <h1>Editar Grupo</h1>
     <fieldset>
    <form action="AlteraGrupo.php" method="post">
    <input type="hidden" id="codigogp" name="codigogp" value="<?= $cg?>"> 
    <label action="nome" method="post"> Nome </label>
    <input type="text" id="nome" name="nome" value="<?=$nom?>">
    </fieldset>
    <button>Salvar</button>
</body>
</html>