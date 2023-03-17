<?php
$idade = 18;

echo "Olá mundo!" . PHP_EOL;
echo "Eu tenho \"$idade\" anos";

echo PHP_EOL . PHP_EOL;

echo "Você só pode entrar se tiver mais de 18 anos!\n";

echo PHP_EOL;

if ($idade >= 18)
{
    echo "Você tem $idade anos. Pode entrar!";
}
else
{
    echo "Você tem menos de 18 anos. Você não pode entrar!";
}

?>
