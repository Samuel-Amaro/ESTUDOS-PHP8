<?php

/**
 * * LIMPE E VALIDE UM URL
 * 
 *  O exemplo a seguir usa a filter_var() função para remover primeiro todos os caracteres ilegais de um URL e, em seguida, verificar se $ url é um URL válido:
*/

$url = "https://www.w3schools.com";

//Remova todos os caracteres ilegais de um url
//FILTER_SANITIZE_URL: Remove todos caracteres exceto letras, dígitos e $-_.+!*'(),{}|\\^~[]`<>#%";/?:@&=.
$url = filter_var($url, FILTER_SANITIZE_URL);

//URL Valida
//FILTER_VALIDATE_URL: Valida o valor como URLL, opcionalmente com componentes requeridos.
if(!filter_var($url, FILTER_VALIDATE_URL) === false) {
    echo "$url é um URL válido </>";
}else{
    echo "$url não é um URL válido";
}

?>