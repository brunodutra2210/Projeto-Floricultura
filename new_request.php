<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New_request</title>
</head>
<body>
    <form action="dados.php" method="REQUEST">
        <fieldset>
            <label>Nome</label>
            <input type="text" name="nome">
            <label >E-mail</label>
            <input type="e-mail" name="email">
            <label >Senha</label>
            <input type="password" name="senha">
            <label>Confirmar Senha</label>
            <input type="password" name="csenha">
            <label>Funcionário</label>
            <input type="checkbox" name="funcao" value="on">
            <button type="submit" name="criar">Criar conta</button>
        </fieldset>
    </form>
</body>
</html>