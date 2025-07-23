<?php

//Definindo que os tipos devem ser estritamente tipados
declare(strict_types=1);
function getArea(int $x, int $y){
    return $x * $y;
}

echo getArea(10, 5);
echo "\n";
function getSum(int ...$valores){
    return array_sum($valores);
}

//Acusará uma exceção, pois declare(strict_types=1) foi declarado
echo getSum(1,2,3, "4");

?>




