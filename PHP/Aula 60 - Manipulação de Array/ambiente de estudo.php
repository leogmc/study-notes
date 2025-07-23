<?php

#VERIFICA SE A ESTRUTURA É UMA ARRAY

echo "FUNÇÃO: is_array()";
echo "Valor = [] " . is_array([]) . "\n";
echo "Valor = array() " . is_array([]) . "\n";
echo "Valor = [1,2,3] " . is_array([1,2,3]) . "\n";
echo "Valor = 1 " . is_array(1) . "\n";
echo "\n";


#RETORNA A QUANTIDADE DE ELEMENTOS
echo "FUNÇÃO: count() ";
echo "Valor = [1,2,3,4] - " . count([1,2,3,4]) . "\n";
echo "Valor = range(0,1000) - " . count( range(0,1000)) . "\n";

echo "\n";

#VERIFICA SE UM ELEMENTO ESTÁ CONTIDO
echo "FUNÇÃO: in_array(valor, array)" . "\n";
echo "Valor = in_array(2, [1,2,3,4,5])" . in_array(2, [1,2,3,4,5]) . "\n";
echo "Valor = in_array(2, [1,2,3,4,5])" . in_array(6, [1,2,3,4,5]) . "\n";
echo "\n";

#ORDENAÇÃO
echo "FUNÇÃO: sort()\n";
$arr = ["c", "a", "b", "f"];
sort($arr);
print_r($arr);
echo "\n";

#INVERSÃO
echo "FUNÇÃO: array_reverse()\n";
$arr = [1,2,3,4];
$arr = array_reverse($arr);
print_r($arr);
echo "\n";

#SOMA
echo "FUNÇÃO: array_sum()\n";
$arr = [1,2,3,4];
echo "A soma é: " . array_sum($arr) . "\n";
echo "\n";

#JUNÇÃO DE ARRAYS
echo "FUNÇÃO: array_merge()\n";
$arr1 = [1,2];
$arr2 = [3,4];
$x = array_merge($arr1, $arr2);
print_r($x);
echo "\n";


?>




