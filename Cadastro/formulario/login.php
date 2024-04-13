<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Login</title>
    <style>

        body{
            font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
            background-image: linear-gradient(to right, rgb(220, 20, 120),rgb(238, 238, 30));
        }
        div{
            background-color: rgba(0, 0, 0, 9.0);
            position: absolute;
            top:50%;
            left:50%;
            transform: translate(-50%,-50%);
            padding: 80px;
            border-radius: 30px;
            color: white;

        }
        input{
            padding: 15px;
            border: nome;
            outline: none;
            font-size: 15px;
        }
    
        .inputSubmit{
            background-color: rgb(255, 184, 30);
            border: nome;
            padding: 15px;
            width: 100%;
            border-radius: 30px;
            color: white;
            font-size: 15px;
            cursor: pointer;
        }
        .inputSubmit:hover{
            background-color: Brown;
            cursor:pointer;
        }

    </style>
</head>
<body>
    <a href="home.php">VOLTAR</a>
    <div>
        <h1>Login - CETAM/IBC</h1>
        <form action="teste.php" method="POST">
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