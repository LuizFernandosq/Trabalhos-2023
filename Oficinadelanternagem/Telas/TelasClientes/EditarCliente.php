<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Gagalin&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="../../Estilo/EstiloForms.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Maven+Pro:wght@500&family=Poppins:wght@300&display=swap" rel="stylesheet">
    <title>Alterar  clientes</title>
</head>
    

<?php
  $cl = $_POST['codigocli'];
  $cpf = $_POST['cpf'];
  $nom = $_POST['nome'];
  $est = $_POST['estado'];
  $cep = $_POST['cep'];
  $cid = $_POST['cidade'];
  $bai = $_POST['bairro'];
  $rua = $_POST['rua'];
  $num = $_POST['numcasa'];
  $tel = $_POST['telefone'];
  $ema = $_POST['email'];
?>

<body>
    <h1>Editar Cliente</h1>
    <form action="AlteraCliente.php" method="post">
      <fieldset>
    
    <input type="hidden" id="codigocli" name="codigocli" value="<?= $cl?>">
    <label action="cpf" method="post"> CPF </label>
    <input type="number" id="cpf" name="cpf" value="<?=$cpf?>">
    <label action="nome" method="post"> Nome </label>
    <input type="text" id="nome" name="nome" value="<?= $nom?>">
    <label action="estado" method="post"> Estado </label>
    <input type="text" id="estado" name="estado" value="<?= $est?>">
    <label action="cep" method="post"> CEP </label>
    <input type="text" id="cep" name="cep" value="<?= $cep?>">
    <label action="cidade" method="post"> Cidade </label>
    <input type="text" id="cidade" name="cidade" value="<?= $cid?>">
    <label action="bairro" method="post"> Bairro </label>
    <input type="text" id="bairro" name="bairro" value="<?= $bai?>">
    <label action="rua" method="post"> Rua </label>
    <input type="text" id="rua" name="rua" value="<?= $rua?>">
    <label action="numcasa" method="post"> Numero da casa </label>
    <input type="text" id="numcasa" name="numcasa" value="<?= $num?>">
    <label action="email" method="post"> E-mail </label>
    <input type="text" id="email" name="email" value="<?= $ema?>">
    <label action="telefone" method="post"> Telefone </label>
    <input type="text" id="telefone" name="telefone" value="<?= $tel?>">
    </fieldset>
    <button>Salvar</button>
    
</body>
</html>