<?php 
function SelectionSorting($arr) {
    $temp = 0;
    $arrayLength = count($arr);
    for($i = 0 ; $i < $arrayLength - 1 ; $i++){
        $minIndex = $i;

        for($j = $i +1 ; $j < $arrayLength ; $j++){
            if($arr[$j] < $arr[$minIndex]){
                $minIndex = $j;
            }
        }
        $temp = $arr[$minIndex];
        $arr[$minIndex] = $arr[$i];
        $arr[$i] = $temp;
    }

    echo "sorted array : " . implode(",",$arr);
}
SelectionSorting([9,2,4,1,0]);