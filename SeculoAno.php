<?php 
 function SeculoAno($ano = 0){
    $seculo = round($ano /100);
    $restoSeculo = $ano %100;
    if($ano <= 0)
        echo "\nNão existe Seculo =)";     
    else if($restoSeculo > 0)
        echo "\nAno $ano = século ".($seculo+1);     
    else
        echo "\nAno $ano = século $seculo";

 }
 SeculoAno(1905);
 SeculoAno(1700);
 SeculoAno(2005);
 SeculoAno(2000);
 SeculoAno(0);
 SeculoAno(1);
?>