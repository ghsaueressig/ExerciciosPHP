<?php

$num = 3;
$valor = 0;

echo "Tabuada do $num: \n";
for ($contador = 1; $contador < 10; $contador++) {
    $valor = $contador * $num;
    echo "$num x $contador = $valor" . PHP_EOL;
}