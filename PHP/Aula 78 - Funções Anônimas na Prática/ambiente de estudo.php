<?php

#FUNÇÕES ANÔNIMAS - PRÁTICA

function processa_lista($lista, $func){
    foreach ($lista as &$item) {
        $item = $func($item);
    }
    return $lista;
}

print_r(processa_lista(range(1,10), function($item){
    return $item - 10;
}));



?>




