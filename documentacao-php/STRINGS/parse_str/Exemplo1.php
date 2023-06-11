<?php 

/** 
 * * EXEMPLO#1 USANDO parse_str()
 * 
 * 
*/

//string a ser usada
$str = "first=value&arr[]=foo+bar&arr[]=baz";
print("<h3>String completa</h3>");
print("<h4>$str</h4>");
//Recomendado
//Analisa string como se fosse a string de consulta(query string) passada por meio de um URL e define as variáveis ​​no escopo atual (ou na array se result fornecida).
parse_str($str, $output);
print("<h3>Apos uso do parse_str</h3>");
print "<p>{$output['first']}</p>"; //value
print "<p>{$output['arr'][0]}</p>"; //foo bar
print "<p>{$output['arr'][1]}</p>"; //baz

/**
 * Como as variáveis ​​em PHP não podem ter pontos e espaços em seus nomes, eles são convertidos em sublinhados. O mesmo se aplica à nomenclatura dos respectivos nomes de chave no caso de usar esta função com o result parâmetro.
 *  
*/
?>