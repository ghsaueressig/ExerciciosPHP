<?php

// pulando o 13
for ($contador = 1; $contador <= 15; $contador ++) {
    if ($contador == 13) {
        continue;
    } 
    echo "#$contador" . PHP_EOL;
}

echo "\n\n";

// parando no 13
for ($contador = 1; $contador <= 15; $contador ++) {
    if ($contador == 13) {
        break;
    } 
    echo "#$contador" . PHP_EOL;
}