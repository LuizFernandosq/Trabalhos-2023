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
    <title>Formulario de itens de servico</title>
</head>
<body>
    <h1>Formulario de Novo Iten de Serviços</h1>
    <form action="NovoItemServico.php" method="post">
        <fieldset>
        <label action="codigota" method="post"> Tarefa </label>
        <select name="codigota" id="codigota">
            <option value=""></option>
            <?php
            define('BASE', $_SERVER['DOCUMENT_ROOT'] . '\Oficinadelanternagem');
            require_once BASE . '\Modelo\Tarefa.php';
            require_once BASE . '\Database\Conexao.php';
            require_once BASE . '\DAO\DAOTarefa.php';

            $daotarefas = new DAOTarefa();
            $listadetarefas = $daotarefas->listaTodos();
            foreach ($listadetarefas as $tarefas) {
                ?>
                <option value="<?= $tarefas['codigota'] ?>">
                <?= $tarefas['descricao'] ?></option>

            <?php
            }

            ?>
        </select>
        
        


       
    <label action="codigoser" method="post"> Codigo do serviço </label>
    <select name="codigoser" id="codigoser">
            <option value=""></option>
            <?php
            define('BASE', $_SERVER['DOCUMENT_ROOT'] . '\Oficinadelanternagem');
            require_once BASE . '\Modelo\Servico.php';
            require_once BASE . '\Database\Conexao.php';
            require_once BASE . '\DAO\DAOServico.php';

            $daoservico = new DAOServico();
            $listadeservico = $daoservico->listaTodos();
            foreach ($listadeservico as $servico) {
                ?>
                <option value="<?= $servico['codigoser'] ?>">
                <?= $servico['codigoser'] ?> <label> / </label>
                <?= $servico['descricao'] ?> <label> / </label>
                <?= $servico['codigocar'] ?> <label> / </label>
                <?= $servico['codigocli'] ?></option>

            <?php
            }

            ?>
        </select>
        
        
        
        

    <label action="codigogp" method="post"> Grupo </label>
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
        </select><br>
        <br>
    <label action="codigosg" method="post"> Codigo do sub Grupo </label>
    <select name="codigosg" id="codigosg">
            <option value=""></option>
            <?php
            define('BASE', $_SERVER['DOCUMENT_ROOT'] . '\Oficinadelanternagem');
            require_once BASE . '\Modelo\SubGrupo.php';
            require_once BASE . '\Database\Conexao.php';
            require_once BASE . '\DAO\DAOSubGrupo.php';

            $daosubgrupo = new DAOSubGrupo();
            $listadesubgrupo = $daosubgrupo->listaTodos();
            foreach ($listadesubgrupo as $subgrupo) {
                ?>
                <option value="<?= $subgrupo['codigosg'] ?>">
                <?= $subgrupo['nome'] ?></option>

            <?php
            }

            ?>
        </select>
        
    <label action="codigofun" method="post"> Codigo do funcionário </label>
    <select name="codigofun" id="codigofun">
            <option value=""></option>
            <?php
            define('BASE', $_SERVER['DOCUMENT_ROOT'] . '\Oficinadelanternagem');
            require_once BASE . '\Modelo\Funcionario.php';
            require_once BASE . '\Database\Conexao.php';
            require_once BASE . '\DAO\DAOFuncionario.php';

            $daofuncionario = new DAOFuncionario();
            $listadefuncionario = $daofuncionario->listaTodos();
            foreach ($listadefuncionario as $funcionario) {
                ?>
                <option value="<?= $funcionario['codigofun'] ?>">
                <?= $funcionario['nome'] ?></option>

            <?php
            }

            ?>
        </select>
        
        <label for="situacao"> Situação </label>
            <div class="radio">
                <fieldset>
                
                <label for="feito">Feito<input type="radio" id="feito" name="situacao" value="Feito"></label>
                <label for="nao-feito">Não Feito<input type="radio" id="nao-feito" name="situacao" value="Não Feito"></label>
                
                </fieldset>
            </div>

    <label action="valor" method="post"> Valor </label>
    <input type="number" class="form-control" placeholder="Coloque o valor do item(sem formatação)"
                    aria-label="Coloque o valor do item(sem formatação)" aria-describedby="basic-addon2" id="valor" name="valor">
    
    
    </fieldset>
        <button>Salvar</button>
        </form>
        </body>
</html>