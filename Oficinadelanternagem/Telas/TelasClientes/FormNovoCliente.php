<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de clientes</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Gagalin&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="../../Estilo/EstiloForms.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Maven+Pro:wght@500&family=Poppins:wght@300&display=swap" rel="stylesheet">
</head>

<body>
    <h1>Novo Cliente</h1>

    <form action="NovoCliente.php" method="post">
        <fieldset>

            <div class="campo">
                <label for="cpf">CPF</label>
                <input type="number" class="form-control" placeholder="Coloque o cpf do cliente(sem formatação)"
                    aria-label="Coloque o cpf do cliente(sem formatação)" aria-describedby="basic-addon2" id="cpf"
                    name="cpf">
            </div>
            <div class="campo">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" placeholder="Coloque o nome do cliente"
                    aria-label="Coloque o nome do cliente" aria-describedby="basic-addon2" id="nome" name="nome">
            </div>
            <div class="campo">
                <label for="estado">Estado</label>
                <input type="text" class="form-control" placeholder="Coloque o estado do cliente"
                    aria-label="Coloque o estado do cliente" aria-describedby="basic-addon2" id="estado" name="estado">
            </div>
            <div class="campo">
                <label for="cep">CEP</label>
                <input type="text" class="form-control" placeholder="Coloque o cep do cliente(sem formatação)"
                    aria-label="Coloque o cep do cliente(sem formatação)" aria-describedby="basic-addon2" id="cep"
                    name="cep">
            </div>
            <div class="campo">
                <label for="cidade">Cidade</label>
                <input type="text" class="form-control" placeholder="Coloque a cidade do cliente"
                    aria-label="Coloque a cidade do cliente" aria-describedby="basic-addon2" id="cidade" name="cidade">
            </div>
            <div class="campo">
                <label for="bairro">Bairro</label>
                <input type="text" class="form-control" placeholder="Coloque o bairro do cliente"
                    aria-label="Coloque o bairro do cliente" aria-describedby="basic-addon2" id="bairro" name="bairro">
            </div>
            <div class="campo">
                <label for="rua">Rua</label>
                <input type="text" class="form-control" placeholder="Coloque a rua do cliente"
                    aria-label="Coloque a rua do cliente" aria-describedby="basic-addon2" id="rua" name="rua">
            </div>

            <div class="campo">
                <label for="numcasa">Numero da casa</label>
                <input type="text" class="form-control" placeholder="Coloque o numero da casa do cliente"
                    aria-label="Coloque o numero da casa do cliente(sem formatação)" aria-describedby="basic-addon2"
                    id="numcasa" name="numcasa">
            </div>
            <div class="campo">
                <label for="email">E-mail</label>
                <input type="text" class="form-control" placeholder="Coloque o email do cliente"
                    aria-label="Coloque o email do cliente" aria-describedby="basic-addon2" id="email" name="email">
            </div>
            <div class="campo">
                <label for="telefone">Telefone</label>
                <input type="text" class="form-control" placeholder="Coloque o telefone do cliente(sem formatação)"
                    aria-label="Coloque o telefone do cliente(sem formatação)" aria-describedby="basic-addon2"
                    id="telefone" name="telefone">
            </div>
            
        </fieldset>


        <button type="submit">Salvar</button>
    </form>
</body>

</html>