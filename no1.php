<?php
$a = array(12,9,30,"A","M",99,82,"J","N","B");
$z = count($a)-1;
for($i = 0;$i < $z; $i++){
    if($a[$i] > $a[$i+1]){
        $temp = $a[$i];
        $a[$i] = $a[$i+1];
        $a[$i+1] = $temp;
        $i = -1;
    }

    
}
echo implode(", ",$a);

?>

