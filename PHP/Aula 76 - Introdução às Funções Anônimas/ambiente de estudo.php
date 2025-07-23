<?php

#FUNÇÕES ANÔNIMAS

$func = function($nome){
    echo "O nome enviado como parâmetro é $nome" . "\n";
};

function  teste($f){
    $f("Garcia");
}

teste($func);
//$func("Leandro");

?>




