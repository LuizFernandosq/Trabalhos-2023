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
    <title>Formulario de Funcionarios</title>
</head>
<body>
    <h1>Novo Funcionario</h1>
    <form action="NovoFuncionario.php" method="post">
        <fieldset>
    <label action="nome" method="post"> Nome </label>
    <input type="text" class="form-control" placeholder="Coloque o nome do funcionário"
                    aria-label="Coloque o nome do funcionário" aria-describedby="basic-addon2" id="nome" name="nome">
    
    <label action="salario" method="post"> Salario </label>
    <input type="number" class="form-control" placeholder="Coloque o salário do funcionário"
                    aria-label="Coloque o salário do funcionario" aria-describedby="basic-addon2" format="currency" precision="2" id="salario" name="salario">
    
    <label action="cpf" method="post"> CPF </label>
    <input type="number" class="form-control" placeholder="Coloque o cpf do funcionário"
                    aria-label="Coloque o cpf funcionário(sem formatação)" aria-describedby="basic-addon2" id="cpf" name="cpf">
    
    <label action="especializacao" method="post"> Especialização </label>
    <input type="text" class="form-control" placeholder="Coloque a especialização do funcionário"
                    aria-label="Coloque a especialização do cliente" aria-describedby="basic-addon2" id="especializacao" name="especializacao">
    
    <label action="telefone" method="post"> Telefone </label>
    <input type="number" class="form-control" placeholder="Coloque o telefone do funcionário(sem formatação)"
                    aria-label="Coloque o telefone do funcionário(sem formatação)" aria-describedby="basic-addon2" id="telefone" name="telefone">
    
    <label action="estado" method="post"> Estado </label>
    <input type="text" class="form-control" placeholder="Coloque o estado do funcionário(somente a sigla)"
                    aria-label="Coloque o estado do funcionário(somente a sigla)" aria-describedby="basic-addon2" id="estado" name="estado">
    
    <label action="cep" method="post"> CEP </label>
    <input type="number" class="form-control" placeholder="Coloque o cep do funcionário(sem formatação)"
                    aria-label="Coloque o cep do funcionário(sem formatação)" aria-describedby="basic-addon2"id="cep" name="cep">
    
    <label action="cidade" method="post"> Cidade </label>
    <input type="text" class="form-control" placeholder="Coloque a cidade do funcionário"
                    aria-label="Coloque o cidade do funcionário" aria-describedby="basic-addon2" id="cidade" name="cidade">
    
    <label action="bairro" method="post"> Bairro </label>
    <input type="text" class="form-control" placeholder="Coloque o bairro do funcionário"
                    aria-label="Coloque o bairro do funcionário" aria-describedby="basic-addon2" id="bairro" name="bairro">
    
    <label action="rua" method="post"> Rua </label>
    <input type="text" class="form-control" placeholder="Coloque a rua do funcionário"
                    aria-label="Coloque a rua do funcionário" aria-describedby="basic-addon2" id="rua" name="rua">
    
    <label action="numcasa" method="post"> Numero da casa </label>
    <input type="number" class="form-control" placeholder="Coloque o número da casa do funcionário"
                    aria-label="Coloque o número da casa" aria-describedby="basic-addon2" id="numcasa" name="numcasa">
    
    <label action="email" method="post"> E-mail </label>
    <input type="email" class="form-control" placeholder="Coloque o email do funcionário"
                    aria-label="Coloque o email do funcionário" aria-describedby="basic-addon2"id="email" name="email">
    
    <label action="datadeingresso" method="post"> Data de ingresso </label>
    <input type="date" id="datadeingresso" name="datadeingresso">
    
    </fieldset>

    <button>Salvar</button>
   

</body>
</html>