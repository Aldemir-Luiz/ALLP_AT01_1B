<?php 
$i = 1; 
while($i <= 21) {
    if($i % 5 == 0){ 
        $i++;
        continue;
    } elseif($i == 18){ 
        break;
    } 
    echo "$i <br>"; 
    $i++; 
} 
?>
