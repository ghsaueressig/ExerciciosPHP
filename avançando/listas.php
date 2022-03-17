<?php


$idadeList = [21, 23, 19, 25, 30, 41, 18];
$umaIdade = $idadeList[2];

echo "$umaIdade";

$idadeVinicius = $idadeList[0];
$idadeJoao = $idadeList[1];
$idadeMaria = $idadeList[2];

list($idadeVinicius, $idadeJoao, $idadeMaria) = $idadeList;