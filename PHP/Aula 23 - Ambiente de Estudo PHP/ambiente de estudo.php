<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Ambiente para Estudo PHP - Leandro Garcia</title>
</head>

<body>

<?php
    if (isset($_POST["valor1"])){
        echo $_POST["valor1"];
    }
?>

    <form method="post">
        <input type="text" />
        <input type="submit" />
    </form>


</body>
</html>



