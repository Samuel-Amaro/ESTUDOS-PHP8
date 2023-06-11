<?php

/**
 * * VALIDAR UM ENDEREÇO IP
 * 
 *  O exemplo a seguir usa a filter_var()função para verificar se a variável $ ip é um endereço IP válido:
*/

$ipLocalHost = "127.0.0.1";

//FILTER_VALIDATE_IP: Valida o valor como endereço IP, opcionalmente somente IPv4 ou IPv6 ou não privado ou faixa reservada.

if(!filter_var($ipLocalHost, FILTER_VALIDATE_IP) === false) {
    echo "$ipLocalHost e um endereço IP valido! </br>";
}else{
    echo "$ipLocalHost e um endereço IP não valido! </br>";
}
?>