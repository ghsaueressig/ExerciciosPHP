<?php

$peso = 95;
$altura = 1.70;

$imc = $peso / $altura**2;

echo "Seu IMC é de " . 
number_format($imc, 2, ',', ' ');
echo "." . PHP_EOL;

if ($imc < 18.5) {
    echo "Seu IMC está abaixo do recomendado." . PHP_EOL;
}
else
{
    if ($imc > 24.9)
    {
        echo "Seu IMC está acima do recomendado." . PHP_EOL;
    }
    else 
    {
        echo "Seu IMC está dentro do nível recomendado." . PHP_EOL;
    }
}