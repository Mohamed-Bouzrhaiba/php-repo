<?php 
    function Insertion($arr){
        $TLength = count($arr);
        for($i = 1; $i<$TLength;$i++){
            $temp = $arr[$i];
            $j = $i;
            while($j>0 && ($arr[$j-1] > $temp)){
                $arr[$j] = $arr[$j-1];
                $j--;
            }
            $arr[$j] = $temp;
        }
        echo "Your Sorted array : " . implode(",",$arr);
    }
    Insertion([2,3,4,1,8,6,]);
?>