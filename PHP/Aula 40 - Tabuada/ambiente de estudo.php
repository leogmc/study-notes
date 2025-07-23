<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Ambiente para Estudo PHP - Leandro Garcia</title>
</head>

<body>

<?php
    $tab = 0;
    if(isset($_POST["edTABUADA"])){
        $tab = $_POST["edTABUADA"];
        if(!is_numeric($tab)){
            echo "<br> O valor informado não é um número.";
        } else {
            for ($num = 0; $num <=10; $num++){
                echo $num . " x " . $tab . " = " . ($num * $tab) . "<br>";
            }
        }
    }
?>

<form method="post">
    <input type="text" name="edTABUADA">
    <input type="submit"/>
</form>

</body>
</html>



