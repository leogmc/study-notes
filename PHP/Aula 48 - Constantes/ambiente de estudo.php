<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Ambiente para Estudo PHP - Leandro Garcia</title>
</head>

<body>

<?php

    // A diferenca entre define e const é que com define é que atribuimos uma constante em tempo de execução
    // enquanto em const definimos em tempo de compilação

    define("TESTE", 10);
    echo TESTE;

    const VALOR = 1000;
    echo VALOR;

?>

</body>
</html>



