<?php


// Fazendo uma cópia

$a = [1,2,3];
$b = $a;

$a[1] = 5;

print_r($a);
print_r($b);

echo "<br>";

// Fazendo uma referência: precede a declaração de uma variável com um "&". Exemplo:

$a = [1,2,3];
$b = &$a;

$a[1] = 5;

print_r($a);
print_r($b);

echo "<br>";

######################

$c = [1,2,3];

function func(&$arg){
    $arg[1] = 5;
    print_r($arg);
}

func($c);
print_r($c);

echo "<br>";

// Retornando uma referência:

function &func2(){
    $a = [1,2,3];
    print_r($a);

    return $a;
}

$valor = &func2();
print_r($valor);










?>




