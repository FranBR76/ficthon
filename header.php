<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FairView</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <style>
 .container {
            max-width: 900px; /* Largura máxima do contêiner */
            margin: 20px auto; /* Centraliza horizontalmente */
            padding: 20px; /* Espaçamento interno */
            background: white; /* Cor de fundo do contêiner */
            border-radius: 5px; /* Cantos arredondados */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Sombra ao redor do contêiner */
        }
        .section {
            margin-bottom: 20px; /* Margem inferior entre seções */
        }
        .feedback-form, .contact-form {
            display: flex; /* Flexbox para layout */
            flex-direction: column; /* Coloca itens em coluna */
        }
        .feedback-form textarea, .contact-form input {
            margin-bottom: 10px; /* Margem inferior dos campos */
            padding: 10px; /* Espaçamento interno */
            border: 1px solid #ccc; /* Borda cinza */
            border-radius: 5px; /* Cantos arredondados */
        }

.feedback-form, .contact-form {
            display: flex; /* Flexbox para layout */
            flex-direction: column; /* Coloca itens em coluna */
        }
        .feedback-form textarea, .contact-form input {
            margin-bottom: 10px; /* Margem inferior dos campos */
            padding: 10px; /* Espaçamento interno */
            border: 1px solid #ccc; /* Borda cinza */
            border-radius: 5px; /* Cantos arredondados */
        }

        .chart-container {
            display: flex; /* Flexbox para gráficos */
            justify-content: space-between; /* Espaça os gráficos */
            margin: 20px 0; /* Margem superior e inferior */
        }
        .chart {
            width: 40%; /* Largura dos gráficos */
            height: 150px; /* Altura dos gráficos */
        }
        
        .data-point {
            color: azure;
        }

        .why-choose {
            margin: 20px 0; /* Margem superior e inferior */
            padding: 15px; /* Espaçamento interno */
            background: #e9ecef; /* Cor de fundo */
            border-radius: 15px; /* Cantos arredondados */
            color: azure;
        } 

        .company-info {
            margin: 20px 0; /* Margem superior e inferior */
            padding: 15px; /* Espaçamento interno */
            background: #9214B8; /* Cor de fundo */
            border-radius: 15px; /* Cantos arredondados */
            color: azure;
        } 

        .company-info p {
            color: azure;
        }

        .data-point {
            display: flex; /* Flexbox para pontos de dados */
            align-items: center; /* Alinha itens no centro verticalmente */
            margin-bottom: 10px; /* Margem inferior */
        }
        .data-point div {
            width: 30px; /* Largura do ponto de dados */
            height: 30px; /* Altura do ponto de dados */
            border-radius: 50%; /* Forma circular */
            margin-right: 10px; /* Margem à direita */
        }

    </style>
    
</head>
<header >

    <img id="Logo" src="img/logo.png" alt="Logo da empresa">

    <nav>
        <ul>
            <!-- Codigo do header ta reciclado, php ta bugando, atentar pra atualizar sempre em todos os arquivos -->
            <li><a href="index.php">Home</a></li>
            <li><a href="top.php">Ranking</a></li>
            <li><a href="denuncie.php">Relatar</a></li>
            <li><a href="sobre.php">Sobre Nós</a></li>


            <li><a href="contato.php">Contato</a></li>

            <!-- <li><a href="teste.html">TESTE123123</a></li> -->

        </ul>
    </nav>
</header>
<body>