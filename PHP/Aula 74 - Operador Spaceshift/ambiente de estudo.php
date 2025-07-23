<?php

#SPACESHIFT OPERATOR
#SINTAXE: $X <=> $Y;

foreach (range(0, 9) as $value) {

    $x = rand(0, 9);
    $rel = $value <=> $x;

    echo "value=$value <=> x=$x é $rel \n";

}

?>




