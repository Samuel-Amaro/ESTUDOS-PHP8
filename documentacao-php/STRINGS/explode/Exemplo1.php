<?php 

/**
 * * EXEMPLO #1 EXEMPLOS EXPLODE()
 * 
 *  
*/

/*EXEMPLO 1*/

//string a ser dividida
$pizza = "pedaço1 pedaço2 pedaço3 pedaço4 pedaço5 pedaço6";
print("<h3>String completa</h3>");
print("<p>$pizza</p>");
//separador(delimitador) o ponto de separação, onde tiver espaço em branco pode separar em uma substring
$separator = " ";
$pedacos = explode($separator, $pizza);
//acessando as substrings retornadas apos a separação da string em substrings
echo $pedacos[0];
echo $pedacos[1];
print("<h3>String apos explode</h3>");
foreach($pedacos as $chave => $valor) {
    print("<p>$valor</p>");
}

/*EXEMPLO #2*/
$data = "foo:*:1023:1000::/home/foo:/bin/sh";
print("<h3>String completa</h3>");
print("<p>$data</p>");
list($user, $pass, $uid, $gid, $gecos, $home, $shell) = explode(":", $data);
print("<h3>String apos explode</h3>");
print("<p>$user</p>");
print("<p>$pass</p>");
print("<p>$uid</p>");
print("<p>$gid</p>");
print("<p>$gecos</p>");
print("<p>$home</p>");
print("<p>$shell</p>");


?>