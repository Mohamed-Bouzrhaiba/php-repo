<?php 
$size = 5;
for($i=0;$i<$size;$i++){
    for($j=0;$j<$size;$j++){
        if($i==$size-1 || $j==0 || $j==$i){
            echo "*";
        }else{
            echo "&nbsp;&nbsp;";
        }
    }
    echo "<br/>";
}
?>