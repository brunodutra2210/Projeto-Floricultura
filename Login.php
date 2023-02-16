<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

</head>
<body>
    <form action="autenticacao_login.php" method="REQUEST">
        <fieldset>
            <label>Usuário</label>
            <input type="text" name="email">
            <label>Senha</label>
            <input type="password" name="csenha">
            <button type="submit" name="autentic">Login</button>
            <a href="new_request.php">Novo Cadastro</a>
        </fieldset>
    </form>

</body>
</html>