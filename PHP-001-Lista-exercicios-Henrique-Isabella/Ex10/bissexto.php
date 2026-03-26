<?php

$a = $_POST["a"];

if ($a % 4 == 0 && $a % 100 != 0) {
    $resultado = "$a é um ano bissexto";
} else {
    $resultado = "$a não é um ano bissexto";
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
</head>

<body>
    <h1>Resultado</h1>
    <p><strong><?php echo $resultado; ?></strong></p>
    <a href="index.php">Iniciar novamente</a>
</body>
</html>