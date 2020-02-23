<?php

require_once("asset/conn_bd.php");

$stmt = $conn -> prepare("SELECT nome,cpf,login FROM usuarios ORDER BY nome");

$stmt -> execute();

$resultado = $stmt -> fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Usuarios cadastrados</title>
</head>
<body>

<?php

    foreach ($resultado as $row) {
        foreach ($row as $key => $value) {
            echo "<div class='card'> <div class='card-body'><strong>"."<br> ".$key.": "."</strong>".$value."<br></div> ";
                
        }
        echo "<a class='btn btn-primary' href='asset/excluir.php?login=$value'>Deletar</a>";
        echo "<a class='btn btn-primary' href='alterar.php?login=$value'>Alterar</a> <br> </div>";
        
    }

?>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>