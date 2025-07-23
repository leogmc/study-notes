<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Ambiente para Estudo PHP - Leandro Garcia</title>
</head>

<body>

<?php

    $varvar = "Teste";
    $$varvar = 10;

    echo $Teste . "\n";


    $num = 10;
    $$num = 1000;

    echo $num . "\n";
    echo $$num . "\n";

    $arr = [1, 2, 3, 4, 5];
    $$arr = 9;

    echo $$arr . "\n";
?>

</body>
</html>



