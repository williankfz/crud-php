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
    <title>Usuarios cadastrados</title>
</head>
<body>

<?php

    foreach ($resultado as $row) {
        foreach ($row as $key => $value) {
            echo "<strong>"."<br>".$key.": "."</strong>".$value."<br>";
                
        }
        echo "<a href='asset/excluir.php?login=$value'>Deletar &nbsp</a>";
        echo "<a href='alterar.php?login=$value'>Alterar</a> <br>";
        echo "====================================";
    }

?>
    
</body>
</html>