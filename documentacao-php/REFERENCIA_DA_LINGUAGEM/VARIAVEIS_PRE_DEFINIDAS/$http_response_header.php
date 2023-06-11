<?php 

/**
 * * $http_response_header
 * 
 *  $http_response_header — Cabeçalhos de resposta HTTP
 * 
 * DESCRIÇÃO: 
 * 
 * O array $http_response_header é similar a função get_headers(). Quando usando o HTTP wrapper, $http_response_header será populada com os cabeçalhos de resposta HTTP. $http_response_header será criada no escopo local.
 * 
 * EXEMPLOS
 * 
 * Exemplo #1 Exemplo da $http_response_header
*/

function get_contents() {
    file_get_contents("https://github.com/Samuel-Amaro");
    var_dump($http_response_header);
}

get_contents();
var_dump($http_response_header);

?>