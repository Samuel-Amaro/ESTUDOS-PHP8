<?php
    
//obtem o valor do raio por meio do protocolo HTTP post

$raio = $_POST['raiocirculo'];

//se o input não for string
if(is_string($raio) && ($raio == "")) {
    echo "Informe um valor Numerico Valido!";
}else {
    //if(is_int($raio) || is_float($raio) || is_double($raio))
    
    $perimetro = 2 * M_PI * $raio;

    $area = M_PI * ($raio * $raio);

    echo "Perimetro da circunferência: ${perimetro} <br/>";

    echo "Área do circulo: ${area} <br/>";
}


?>