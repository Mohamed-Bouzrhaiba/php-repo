<?php
$size = 5;
for($i=0;$i<$size;$i++){
    for($j=0;$j<$size-$i-1;$j++){
         echo "&nbsp;&nbsp;";
    }
    
    for($k=0; $k< $i *2 +1; $k++ ){
            echo "*";
        }
        echo "</br>";
}
        
?>