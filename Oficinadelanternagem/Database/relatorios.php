<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatórios</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Maven+Pro:wght@500&family=Poppins:wght@300&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Gagalin&display=swap">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
<style>
        body {
            font-family: 'Lato', Arial, sans-serif; /* Fonte Lato ou fallback para Arial ou sans-serif */
            background-color: #e5f2f9; /* Cor de fundo azul claro e calmo */
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        h1 {
            font-family: 'Maven Pro', sans-serif; /* Fonte Gagalin para o título */
            color: #1a1a1a; /* Cor preta para o título */
            font-size: 2.5rem; /* Tamanho maior para destaque */
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
    <h1>Relatórios</h1>
    <div class="button-grid">
    <a href="/Oficinadelanternagem/Telas/Relatorios/TelaOrdem.php">
            <button><i class="fas fa-arrow-left button-icon"></i>Ordem Serviços</button>
        </a>
        <a href="/Oficinadelanternagem/Database/">
            <button class="report-button"><i class="fas fa-arrow-left button-icon"></i>Menu</button>
        </a>
    </div>
    Rosinei, se você chegou aqui, acalme-se. Eu ainda vou mexer nessa parte.

</body>
</html>
