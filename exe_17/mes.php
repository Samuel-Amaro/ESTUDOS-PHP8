<?php 

/**
 * Ler um número inteiro entre 1 e 12 e escrever o mês correspondente. Caso o número seja fora desse intervalo, informar que não existe mês com este número.
*/

$mes = array(1 => "Janeiro", 2 => "Fevereiro", 3 => "Março", 4 => "Abril", 5 => "Maio", 6 => "Junho", 7 => "Julho", 8 => "Agosto", 9 => "Setembro", 10 => "Outubro", 11 => "Novembro", 12 => "Dezembro");

$input = 11;

if($input > 0 and $input <= 12) {
    foreach ($mes as $key => $value) {
        if ($input === $key) {
            echo "$value";
        }else{
            //faz nada
        }
    }
}else{
    echo "Mês Inválido";
}

?>