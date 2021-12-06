<?php 
    function sequenciaCrescente($array){
        $removed = [];
        if(count($array) == 1){
            echo json_encode($array)." ".json_encode($removed)." true\n";
            return true;
        }
        for($i = 0;$i < count($array)  ;$i++){
            $batata = true;
            for($j = 0;$j < count($array)-1  ;$j++){
                if($i != $j){
                    if($array[$i] < $array[$i+1]){

                    }
                }
            }
            // if(isset($array[$i+1])){
            //     if($array[$i] >= $array[$i+1]){
                   
            //         $removed[] = $array[$i];
            //         if(isset($array[$i-1])){                        
            //             if($array[$i-1]>= $array[$i +1]){
            //                 echo $array[$i-1];
            //                 $removed[] = $array[$i-1];
            //             }                       
                        
            //         }                     
                    
            //     }
            // }         

        }
        
        if(count($removed) < 2){
            echo json_encode($array)." ".json_encode($removed)." true\n";
            return true;
        }
        else{
            echo json_encode($array)." ".json_encode($removed)."false\n";
            return false;
        }
        
    }
   // sequenciaCrescente([1]);    
    sequenciaCrescente([1, 3, 2, 1]);
    sequenciaCrescente([1, 3, 2]);
    sequenciaCrescente([1, 2, 1, 2]);
    sequenciaCrescente([3, 6, 5, 8, 10, 20, 15]);
    sequenciaCrescente([1, 1, 2, 3, 4, 4]);
    sequenciaCrescente([1, 4, 10, 4, 2]);
    sequenciaCrescente([10, 1, 2, 3, 4, 5]);
    sequenciaCrescente([1, 1, 1, 2, 3]);
    sequenciaCrescente([0, -2, 5, 6]);
    sequenciaCrescente([1, 2, 3, 4, 5, 3, 5, 6]);
    sequenciaCrescente([40, 50, 60, 10, 20, 30]);
    sequenciaCrescente([1, 1]);
    sequenciaCrescente([1, 2, 5, 3, 5]);
    sequenciaCrescente([1, 2, 5, 5, 5]);
    sequenciaCrescente([10, 1, 2, 3, 4, 5, 6, 1]);
    sequenciaCrescente([1, 2, 3, 4, 3, 6]);
    sequenciaCrescente([1, 2, 3, 4, 99, 5, 6]);
    sequenciaCrescente([123, -17, -5, 1, 2, 3, 12, 43, 45]);
    sequenciaCrescente([3, 5, 67, 98, 3]);
?>