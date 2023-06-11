<?php 

/**
 * * PARSE_STR
 * 
 * parse_str — analisa a string em variáveis
 * 
 * * DESCRIÇÃO
 
    parse_str(string $string, array &$result): void

 * 
 * Converte str como se ela tivesse sido passada via URL e define o valor das variáveis.
 * 
 * Analisa string como se fosse a string de consulta(query string) passada por meio de um URL e define as variáveis ​​no escopo atual (ou na array se result fornecida).
 * 
 * 
 * Nota: Para pegar a QUERY_STRING atual, você deve usar a variável $_SERVER['QUERY_STRING']. também você deve querer ler a seção sobre variáveis de fora do PHP.
 * 
 * Nota: A configuração magic_quotes_gpc afeta a saída desta função, parse_str() usa o mesmo mecanismo que o PHP usa para popular as variáveis $_GET, $_POST, etc.
 * 
 * * PARÂMETROS
 * 
 * str: A string de entrada.
 * 
 * result: Se o segundo parâmetro result estiver presente, as variáveis ​​são armazenadas nesta variável como elementos da array.
 * 
 * Aviso: Usar esta função sem o result parâmetro é altamente DESCORAJADA e DESCONTINUADA a partir do PHP 7.2.
 * 
 * * VALOR RETORNADO
 * 
 * Não há valor retornado.
*/

?>