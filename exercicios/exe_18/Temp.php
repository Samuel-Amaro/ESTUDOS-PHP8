<?php 

$inputTemperaturaFar = 70;

const FAR = 32;
const DIV = 9;
const MULT = 5;

$resultado = $inputTemperaturaFar - FAR; 
$resul = $resultado * MULT;
$resultadoCelsius = $resul / DIV;

echo " A $inputTemperaturaFar °F é igual a $resultadoCelsius °C </br>";

?>