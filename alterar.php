<?php

    require_once("asset/conn_bd.php");

    

    $stmt = $conn -> prepare("SELECT nome,cpf,login,senha FROM usuarios WHERE login = :LOGIN");
    $login = $_GET['login'];
    
    $stmt -> bindParam(":LOGIN",$login);

    $stmt -> execute();

    $resultado = $stmt -> fetch(PDO::FETCH_ASSOC);

    $nome = $resultado['nome'];
    $cpf = $resultado['cpf'];
    $logindb = $resultado['login'];
    $senha = $resultado['senha'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Alterar dados</title>
</head>
<body>


<div class="container bg-dark text-white">
<h1>Alterar usuario</h1>

<form action="asset/alter.php?login=<?php echo $login ?>" method="post">

    <div class="form-group">
    <label for="nome">Digite o seu Nome: </label>
    <input type="text" class="form-control" id="nome" name="nome" value = "<?php echo $nome; ?>">
    </div>

    <div class="form-group">
    <label for="cpf">Digite o seu CPF: </label>
    <input type="text" id="cpf" class="form-control" name="cpf" value="<?php echo $cpf; ?>">
    </div>

    <div class="form-group">
    <label for="login">Digite o seu login: </label>
    <input type="text" id="login" class="form-control" name="login" value="<?php echo $logindb; ?>">
    </div>

    <div class="form-group">
    <label for="senha">Digite sua uma senha: </label>
    <input type="text" id="senha" class="form-control" name="senha" value="<?php echo $senha ?>">
    </div>


    <input type="submit" value="Enviar" class="btn-lg btn-success">
</form>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>