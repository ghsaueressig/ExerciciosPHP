<?php
date_default_timezone_set("America/Sao_Paulo");
function diasemana($data) 
{
    $d = explode('/', $data);
    $anohoje = $d[2];
    $meshoje = $d[1];
    $diahoje = $d[0];
    $diasemana = date("w", mktime(0,0,0,$meshoje,$diahoje,$anohoje) );
    
    switch($diasemana)
    {

        case"0": $diasemana = "Domingo";       break;

        case"1": $diasemana = "Segunda Feira"; break;

        case"2": $diasemana = "Terça Feira";   break;

        case"3": $diasemana = "Quarta Feira";  break;

        case"4": $diasemana = "Quinta Feira";  break;

        case"5": $diasemana = "Sexta Feira";   break;

        case"6": $diasemana = "Sabado";        break;

    }

    return "$diasemana";
}

echo '<h1> ' , diasemana('23/08/1972') ,  ' - Dia da Semana ' , '</h1>' ;

?>