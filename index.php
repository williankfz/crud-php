<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuario</title>
</head>
<body>
    <h1>Cadastro de Usuario</h1>

    <form action="asset/cad.php" method="post">
        <label for="nome">Digite o seu Nome: </label>
        <input type="text" id="nome" name="nome">

        <p></p>

        <label for="cpf">Digite o seu CPF: </label>
        <input type="number" id="cpf" name="cpf">
        
        <p></p>

        <label for="login">Digite o seu login: </label>
        <input type="text" id="login" name="login">

        <p></p>

        <label for="senha">Digite sua uma senha: </label>
        <input type="password" id="senha" name="senha">

        <p></p>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>