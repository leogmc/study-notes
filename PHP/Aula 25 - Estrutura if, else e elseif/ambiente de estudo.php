<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Ambiente para Estudo PHP - Leandro Garcia</title>
</head>

<body>

<?php
    if (isset($_POST["idade"])){

        $idade = $_POST["idade"];

        if ($idade > 18 && $idade < 60){
            echo "O usuário é de maior.";
        } elseif ($idade < 18) {
            echo "O usuário é menor de idade.";
        } else {
            echo "O usuário está na terceira idade.";
        }
    }
?>

<h1>Calculadora de maioridade:</h1>
    <form method="POST">
        <input type="text" name="idade" />
        <input type="submit" />
    </form>

</body>
</html>



