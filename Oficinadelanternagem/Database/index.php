<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Oficina de Lanternagem</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Maven+Pro:wght@500&family=Poppins:wght@300&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Maven PRo', Arial, sans-serif; /* Fonte Gagalin ou fallback para Arial ou sans-serif */
            background-color: #e5f2f9; /* Cor de fundo azul claro e calmo */
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        h1 {
            color: #1a1a1a; /* Cor do título */
            margin-bottom: 30px;
        }

        .button-grid {
            display: grid;
            grid-template-columns: repeat(4, 200px); /* 3 colunas com 150px de largura cada */
            gap: 10px; /* Espaçamento entre os botões */ 
            
        }

        a {
            text-decoration: none;
        }

        button {
            padding: 10px 20px;
            color: #fff; /* Cor do texto do botão */
            border: none;
            border-radius: 100px; /* Cantos arredondados */
            cursor: pointer;
            background-color: #7CB3BF; /* Cor do botão azul claro */
            transition: background-color 0.2s ease, transform 0.1s ease; /* Mudança de cor mais rápida e transformação mais suave */
            width: 100%;
        }

        button:hover {
            background-color: #484D50; /* Cor do botão ao passar o mouse (tom mais escuro do azul) */
            transform: scale(1.20); /* Efeito de aumento no tamanho */
        }
        
        
        .button-icon {
            margin-right: 10px;
        }
        .report-button {
    background-color: #FAB611; 
}

        
        
    </style>
    <!-- Importar a fonte Gagalin -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Gagalin&display=swap">
</head>
<body>
    <h1>Menu</h1>
    
    
           
    
    <div class="button-grid">
   
        <a href="http://localhost/Oficinadelanternagem/Telas/TelasClientes/menuCliente.php">
            <button><i class="fas fa-users button-icon"></i>Clientes</button>
        </a>
        <a href="http://localhost/Oficinadelanternagem/Telas/TelasCarros/menuCarro.php">
            <button><i class="fas fa-car button-icon"></i>Carros</button>
        </a>
        <a href="http://localhost/Oficinadelanternagem/Telas/TelasFuncionarios/menuFuncionario.php">
            <button><i class="fas fa-user-tie button-icon"></i>Funcionário</button>
        </a>
        <a href="http://localhost/Oficinadelanternagem/Telas/TelasGrupo/menuGrupo.php">
            <button><i class="fas fa-layer-group button-icon"></i>Grupo</button>
        </a>
        <a href="http://localhost/Oficinadelanternagem/Telas/TelasSubGrupo/menuSubGrupo.php">
            <button><i class="fas fa-layer-group button-icon"></i>Sub Grupo</button>
        </a>
        <a href="http://localhost/Oficinadelanternagem/Telas/TelasServico/menuServico.php">
            <button><i class="fas fa-wrench button-icon"></i>Serviço</button>
        </a>
        <a href="http://localhost/Oficinadelanternagem/Telas/TelasTarefas/menuTarefas.php">
            <button><i class="fas fa-tasks button-icon"></i>Tarefas</button>
        </a>
        <a href="http://localhost/Oficinadelanternagem/Telas/TelasItensServico/menuItemServico.php">
            <button><i class="fas fa-tools button-icon"></i>Itens de Serviço</button>
        </a>
        <a href="/Oficinadelanternagem/Database/relatorios.php">
    <button class="report-button"><i class="fas fa-chart-bar button-icon"></i>Relatórios</button>
</a>

    </div>
</body>
</html>


