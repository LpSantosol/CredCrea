<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Area de login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section class="login">
        <div class="usuario">
            <form action="api.php" method="post">
                <label for="user">Nome</label>
                <input type="text" id="user" name="nameuser" required>

                <label for="password">Digite sua senha</label>
                <input type="password" id="password" name="userpassword" required>

                <input type="submit" value="Entrar">
            </form>

        </div>
    </section>
    
</body>
</html>