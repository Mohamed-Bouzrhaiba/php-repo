<?php 
$size = 5;
for($i = 0 ; $i < $size ; $i++){
    for($j = 0 ; $j<=$i ; $j++){
        echo "*";
    }
    echo "</br>";
}
for($m = 0 ; $m < $size ; $m++){
    for($k = 1 ; $k<$size-$m ; $k++){
        echo "*";
    }
    echo "</br>";
}