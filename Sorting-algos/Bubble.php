<?php 
function bubbleSorting($Arr){
    $TLength = count($Arr);
    do{
        $changed = false;
        for($i =1; $i < $TLength -1 ; $i++){
            if($Arr[$i] > $Arr[$i + 1]){
                $temp = $Arr[$i];
                $Arr[$i] = $Arr[$i +1];
                $Arr[$i+1] = $temp;
                $changed = true;
            }
        }
        $TLength--;
    }while($changed == true);
    echo "your sorted array : ". implode(",",$Arr);
}
bubbleSorting([1,4,6,2,9]);