<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Ambiente para Estudo PHP - Leandro Garcia</title>
</head>

<body>

<?php

    $login = "leo";
    $senha = "123";

    if (isset($_POST["login"])){

        if($_POST["login"] == $login && $_POST["senha"] == $senha){
            echo "Login efetuado com sucesso.";
        } else {
            echo "Login e senha incorretos.";
        }

    }
?>

<h1>Tela de Login e Senha:</h1>
<form method="post">
    <input type="text" name="login" />
    <input type="password" name="senha" />
    <input type="submit"/>
</form>

</body>
</html>



