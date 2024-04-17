<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kurumin Dev</title>
    <style>
        body{
            font-family:Arial, Helvetica, sans-serif;
            background: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
            text-align: center;
            color: white;
            background-image: url('https://cdn.pixabay.com/photo/2016/11/28/10/48/child-1864718_960_720.jpg');
            /* Substitua 'caminho/para/sua/imagem-de-fundo.jpg' pelo caminho correto para sua imagem de fundo */
            background-size: cover;
            /* Ajusta a imagem de fundo para cobrir toda a tela */
            background-position: center;
            /* Centraliza a imagem de fundo */
            height: 100vh;
            /* Define a altura do body para 100% da altura da janela de visualização */
            margin: 0; /* Remova a margem padrão */
            padding: 0; /* Remova o preenchimento padrão */
            display: flex; /* Use flexbox para centralizar conteúdo verticalmente */
            justify-content: center; /* Centralize horizontalmente */
            align-items: center; /* Centralize verticalmente */
        }
        .box{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(0, 0, 0, 0.6);
            padding: 30px;
            border-radius: 10px;
        }
        a{
            text-decoration: none;
            color: white;
            border: 3px solid dodgerblue;
            border-radius: 10px;
            padding: 10px;
        }
        a:hover{
            background-color: dodgerblue;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Crie sua conta ou faça login para acessar nossos cursos.</h1>
    
        <h2>Capacitação e Acessibilidade No Kurumin Dev.</h2>
        <br><br>
        <br>
        <br>
        <br><br>
        <br>
        <br>
        <br><br>
        <br>
        <br>
        <div class="box">
            <a href="login.php">login</a>
            <a href="cadastro.php">Cadastre-se</a>
        </div>
    </div>
</body>
</html>
