<?php 
    function arrayAleatorio(){
        $randomArray = [];                

        for($i=0; $i < 20;$i++){
            $randomArray[] = random_int(1,10);
        }
        $arrayUniqueCount = array_count_values($randomArray);        
        echo "Array de numeros aleatorios: ".json_encode($randomArray);
        echo "\nnúmero(s) com a maior recorrência".json_encode(array_keys( $arrayUniqueCount,max($arrayUniqueCount)));
        echo "\nnúmero de reconrrência = ".max($arrayUniqueCount);
    }
    arrayAleatorio();
?>