<?php

#IMPORTANDO ARQUIVOS PHP

# include(<file_name>); - NÃO INTERROMPE a execução do programa caso não encontre o arquivo.
# require(<file_name>); - INTERROMPE a execução do programa caso não encontre o arquivo.

//include('code.php');
//require('code.php');


# include(<file_name>);
# include_once(<file_name>); - Nos assegura de que o arquivo não será importado novamente.

# require(<file_name>);
# require_once(<file_name>); - Nos assegura de que o arquivo não será importado novamente.

include ('code.php');

echo $teste . "\n";

$teste = 5;

include_once('code.php');

echo $teste . "\n";

?>




