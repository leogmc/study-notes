<?php

//Funções que retornam parâmetros

    // 1 - func_get_arg(<indice>) - Retorna o indice do arg
    // 2 - func_get_args(); - Retorna a lista de args
    // 3 - func_num_args(); - Retorna a quantidade de args

    // 1 -
    function soma(){
        $total = func_get_arg(0) + func_get_arg(1);

        echo $total;
    }

    soma(10,2);
    echo "\n";

    // 2 -
    //function somaTudo(){
    //    $lista = func_get_args();
    //    $qntd = func_num_args();
    //    $total = 0;
    //
    //    for($i = 0; $i < $qntd; $i++){
    //        $total += $lista[$i];
    //    }
    //
    //    echo $total;
    //    echo "\n";
    //}
    //
    //somaTudo(1,2,3,4);
    //echo "\n";

    // 2 (Com foreach)
    function somaTudo(){
        $lista = func_get_args();
        $qntd = func_num_args();
        $total = 0;

        foreach($lista as $item){
            $total += $item;
        }
        echo $total;
        echo "\n";
    }

    somaTudo(1,2,3,4);
    echo "\n";


    #FUNÇÕES VARIÁDICAS

function media($a, $b, ...$valores){
    $total = array_sum($valores);
    $total = $total / count($valores);
    return $total;
}

echo media(5,5,6);


?>




