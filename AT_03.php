<?php
$i = 1;

while ($i <= 20) {

    if ($i == 18) {
        echo "Varredura interrompida por segurança na porta 18";
        break; 
    }

    if ($i % 5 == 0) {
        $i++;
        continue;
    }

    echo "A verificar porta $i <br>";
    
    $i++;
}
?>
