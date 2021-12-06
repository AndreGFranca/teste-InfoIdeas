<?php 
 function PrimoInferior($num = 0){
    $primo = false;
    if($num <= 1){
        return 0;
    }
    while($primo != true){
        $result = 0;
        for ($i = 2;$i <= $num /2;$i++){
            if($num % $i == 0){
                $result++;
            }
        }   
        if($result != 0){
            $num -= 1;
        }
        else{
            $primo = true;
        }        
    }
    echo "\n$num";

 }

    PrimoInferior(10);
    PrimoInferior(30);
    PrimoInferior(2);
    PrimoInferior(145);
    PrimoInferior(1907);
    PrimoInferior(0);
    PrimoInferior(1);
?>