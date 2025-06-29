<?php
$size = 6;

 for($i = $size/ 2 ; $i <=$size; $i+=2){
    
    for($j = 1; $j < $size -$i ; $j +=2){
         echo "&nbsp;&nbsp;";
    }
    for($j = 0 ; $j< $i ; $j++){
        echo "*";
    }

    for($j = 0 ; $j < $size-$i ; $j++){
         echo "&nbsp;&nbsp;";
    }
     for($j = 0 ; $j< $i ; $j++){
        echo "*";
    }

    echo "</br>";
 }


for ($i = $size; $i >= 1; $i--) {

    for ($j = $i; $j < $size; $j++) {
        echo "&nbsp;&nbsp;";
    }
    

    for ($j = 1; $j <= 2 * $i - 1; $j++) {
        echo "*";
    }
    
    echo "<br>";
}
?>
