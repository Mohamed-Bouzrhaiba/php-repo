<?php 
$size = 5;
    for($i = 0 ; $i < $size ;$i++ ){
        for($j = 1 ; $j < $size-$i ; $j++ ){
             echo "&nbsp;&nbsp;";
        }
        for($k = 0 ; $k<$i*2 +1; $k++){
            if($i ==  0 || $k == 0  || $k== $i*2 ){
                echo "*";
            }
            else{
                echo "&nbsp;&nbsp;";
            }
            
        }
        echo "</br>";   
    }
    for($l=1; $l<$size ;$l++){
        for($m=0;$m< $l ; $m++ ){
            echo "&nbsp;&nbsp;";
        }
        for($n = 0 ; $n< (2*($size-$l)-1);$n++){
            if($l==0 || $n== 0 || $n == 2*($size-$l) -2){
            echo"*";
            }
            else{
                echo "&nbsp;&nbsp;";
            }
        }
        echo "</br>";
    }
?>