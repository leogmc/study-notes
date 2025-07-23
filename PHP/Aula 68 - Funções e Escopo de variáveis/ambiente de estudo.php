<?php

$a = 10;
$b = 20;

function estudoEscopo(){

//    Para utilizar uma variável global, precisamos explicitar
//    com o prefixo "global" antes de definir a variável
    global $a;
    echo $a;
}
estudoEscopo();
echo "\n";

function estudoEscopo2(){
    // Para utilizar uma lista de variáveis globais, precisamos utilizar
    // $GLOBALS[<nomedavariavel>]
    echo $GLOBALS['a'];
}

estudoEscopo2();

?>




