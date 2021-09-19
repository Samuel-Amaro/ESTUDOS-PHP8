<?php 

/**
 * Crie um algoritmo para calcular a média final de um aluno, para isso, solicite a entrada de três notas e as insira em um array, por fim, calcule a média geral. Caso a média seja maior ou igual a seis, exiba aprovado, caso contrário, exiba reprovado. Exiba também a média final calculada.
Ex: N1 = 5 | N2 = 10 | N3 = 4 | MG = 6,33 [Aprovado]
*/

$nota01 = 5.4;
$nota02 = 6.8;
$nota03 = 9.5;
$notas = array("nota01" => $nota01, "nota02" => $nota02, "nota03" => $nota03);
$somaNotas = 0;

foreach ($notas as $key => $value) {
    $somaNotas += $value;
}

$media = $somaNotas / 3;

if($media >= 6) {
    echo "N1 = {$notas['nota01']} | N2 = {$notas['nota02']} | N3 = {$notas['nota03']} | MG = " . $media . " [Aprovado]";
}else{
    echo "N1 = {$notas['nota01']} | N2 = {$notas['nota02']} | N3 = {$notas['nota03']} | MG = " . $media . " [Reprovado]";
}


?>