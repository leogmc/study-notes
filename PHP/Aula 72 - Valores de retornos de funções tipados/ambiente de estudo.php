<?php


declare(strict_types=1);
function cubo(float $num) : float
{
    return $num * $num * $num;
}



function teste() : array{
    return [10, "Leo", 5.1];
}

//Acusará erro, pois declaramos modo estrito no topo do código.
function x() : int {
    return "aa";
}
// echo cubo (10);
var_dump(teste());

x();

?>




