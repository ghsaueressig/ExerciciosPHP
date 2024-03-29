<?php
// Your code here!

function exibeMensagem($mensagem)
{
    echo $mensagem . '<br>';
}

function sacar(array $conta, float $valorASacar): array
{
    if ($valorASacar > $conta['saldo']) {
        exibeMensagem("Você não pode sacar este valor.");
        exibeMensagem("Motivo: Saldo insuficiente.");
    } else {
        $conta['saldo'] -= $valorASacar;
    }

    return $conta;
}

function depositar(array $conta, float $valorADepositar): array 
{
    if ($valorADepositar > 0) {
        $conta['saldo'] += $valorADepositar;
        exibeMensagem("Você depositou R$ "+ $valorADepositar);
    } else {
        exibeMensagem("Depósitos precisam ser positivos");
    }

    return $conta;
}

function titularComLetrasMaiusculas(array &$conta)
{
    $conta['titular'] = mb_strtoupper($conta['titular']);
}

function exibeConta(array $conta)
{
    ['titular' => $titular, 'saldo' => $saldo] = $conta;
    echo "<li>Titular: $titular. Saldo: $saldo</li>";
}

?>
