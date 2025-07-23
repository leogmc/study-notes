<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Ambiente para Estudo PHP - Leandro Garcia</title>
</head>

<body>

<?php

    for ($i = 0; $i <= 100; $i++){
        if ($i % 2 == 1){
            continue;
        }
        echo $i . "\n";
    }
?>



</body>
</html>



