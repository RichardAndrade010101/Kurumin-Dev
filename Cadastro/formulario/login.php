<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Login</title>
    <style>


        body{
            font-family: Arial, Helvetica, sans-serif;
            background: linear-gradient(to right, rgb(120, 180, 200), rgb(50, 180, 150));
        }
        div{
            background-color: rgba(0, 0, 0, 0.6);
            position: absolute;
            top:50%;
            left:50%;
            transform: translate(-50%,-50%);
            padding: 80px;
            border-radius: 15px;
            color: #fff;

        }
        input{
            padding: 15px;
            border: nome;
            outline: none;
            font-size: 15px;
        }
    
        .inputSubmit{
            background-color: dodgerblue;
            border: nome;
            padding: 15px;
            width: 100%;
            border-radius: 10px;
            color: white;
            font-size: 15px;
            cursor: pointer;
        }
        .inputSubmit:hover{
            background-color: deepskyblue;
            cursor:pointer;
        }

        
        a.voltar-button {
        display: inline-block; 
        padding: 10px 20px; 
        background-color: #4CAF50; 
        color: white; 
        text-decoration: none; 
        border: none; 
        border-radius: 5px;
        cursor: pointer; 
        transition: background-color 0.3s; 
        }

        
        a.voltar-button:hover {
        background-color: #3e8e41;
        }
        
    </style>
</head>
<body>
    <a href="cadastro.php" class="voltar-button">VOLTAR</a>

    <div>
        <h1>Login - Kurumin Dev</h1>
        <form action="testelogin.php" method="POST">
            <input type="text" name="email" placeholder="Email">
            <br>
            <br>
            <input type="password" name="senha" placeholder="Senha">
            <br>
            <br>
            <input class="inputSubmit" type="submit" name="submit" value="Entrar">
        </form>
        
        
    </div>
   
</body>
</html>