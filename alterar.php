<?php

    require_once("asset/conn_bd.php");

    

    $stmt = $conn -> prepare("SELECT nome,cpf,login,senha FROM usuarios WHERE login = :LOGIN");
    $login = $_GET['login'];
    
    $stmt -> bindParam(":LOGIN",$login);

    $stmt -> execute();

    $resultado = $stmt -> fetch(PDO::FETCH_ASSOC);

    $nome = $resultado['nome'];
    $cpf = $resultado['cpf'];
    $login = $resultado['login'];
    $senha = $resultado['senha'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar dados</title>
</head>
<body>
<h1>Alterar usuario</h1>

<form action="asset/alter.php?login=<?php echo $login ?>" method="post">
    <label for="nome">Digite o seu Nome: </label>
    <input type="text" id="nome" name="nome" value = "<?php echo $nome; ?>">

    <p></p>

    <label for="cpf">Digite o seu CPF: </label>
    <input type="number" id="cpf" name="cpf" value="<?php echo $cpf; ?>">
    
    <p></p>

    <label for="login">Digite o seu login: </label>
    <input type="text" id="login" name="login" value="<?php echo $login; ?>">

    <p></p>

    <label for="senha">Digite sua uma senha: </label>
    <input type="text" id="senha" name="senha" value="<?php echo $senha ?>">

    <p></p>

    <input type="submit" value="Enviar">
</form>
</body>
</html>