<?php 
$size = 5 ;
 for($i=0;$i<=$size;$i++){
    for($j=0;$j<=$i;$j++){
      echo "&nbsp;&nbsp;";
    }
    for($k=1;$k<$size * 2 - ($i*2); $k++){
        echo "*";
    }
    echo "</br>";
 }
?>