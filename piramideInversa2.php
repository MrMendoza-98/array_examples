<?php
$n=6;
for($i=$n;$i>=1;$i--){
     for ($s = 1; $s <= $n- $i; $s ++) {
        echo '&nbsp;';
    }
    for ($j=1; $j <=2*$i-1 ; $j++) { 
        echo $j;
    }
    echo '<br>';
}

?>