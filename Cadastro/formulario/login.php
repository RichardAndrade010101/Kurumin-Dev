<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="form.css">
    <script src="https://kit.fontawesome.com/bfa65f44d3.js" crossorigin="anonymous"></script>
    <title>Formulaário</title>
</head>

<body>
    <div id="form">
        <form action="">
            <h2 class="title">Login</h2>

            <label for="email">Email</label>
            <div class="input">
                <i class="fa-regular fa-envelope"></i>
                <input id="email" name="email" placeholder="Email" type="text">
            </div>

            <label for="senha">Senha</label>
            <div class="input">
                <i class="fa-solid fa-lock"></i>
                <input id="senha" name="senha" placeholder="password" type="password">
            </div>

            <div id = "btn">
                <button type = "submit>" >login</button>
            </div>
        </form>
    </div>
</body>
</html>
