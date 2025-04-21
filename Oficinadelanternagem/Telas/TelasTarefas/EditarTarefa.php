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
    
    <title>Alterar tarefas</title>
</head>

<?php
$cta = $_POST['codigota'];
$des = $_POST['descricao'];
?>

<body>
    <h1>Editar Tarefa</h1>
    <form action="AlteraTarefa.php" method="post">
        <fieldset>
        <input type="hidden" id="codigota" name="codigota" value="<?= $cta ?>">
        <label action="descricao" method="post"> Descrição: </label>
        <input type="text" id="descricao" name="descricao" value="<?= $des ?>">
        </fieldset>
        <button>Salvar</button>

</body>

</html>