<?php

/**
 * * COOKIES HTTP
 * 
 *  O PHP suporta transparentemente cookies HTTP como os definidos pela » RFC 6265. Cookies são um mecanismo o armazenamento de dados no navegador, rastreando ou identificando o retorno de usuários. Você pode definir cookies com a função setcookie(). Cookies são parte do cabeçalho HTTP, então a função SetCookie precisa ser chamada antes de qualquer saída ser enviada ao navegador. Esta é a mesma restrição da função header(). Dados de cookies estão disponíveis nos arrays de dados de cookies apropriados, como $_COOKIE e também em $_REQUEST.
*/

//Se você deseja atribuir vários valores para uma única variável do cookie, você pode fazer dele um array:

setcookie("MeuCiikie[foo]", 'Testando 1', time()+3600);
setcookie("MeuCookie[bar]", 'Testando 2', time()+3600);

/**
 * Isso irá criar dois cookies separados enquanto que MeuCookie será um único array em seu script. Se quiser definir apenas um cookie com vários valores, considere utilizar serialize() ou explode() nos valores primeiro.
 * 
 * Note que um cookie substituirá um anterior com o mesmo nome em seu navegador, a menos que o nome ou o caminho seja diferente. Então, para uma aplicação de carrinho de compras em que se quer ter um contador e repassá-lo:
*/

//Exemplo #5 Exemplo setcookie()

if(isset($_COOKIE['count'])) {
    $count = $_COOKIE['count'] + 1;
}else{
    $count = 1;
}

setcookie('count', $count, time()+3600);
setcookie("Cart[$count]", $item, time()+3600);

/**
 * * PONTOS EM NOMES DE VARIAIVEIS POSTADAS
 * 
 *  Normalmente o PHP não altera o nome de variáveis quando elas são passadas para o script. Entretanto, é necessário notar que o ponto (ponto final) não é um caractere válido no nomes de variáveis do PHP. Para ilustrar, veja o seguinte exemplo:
 * 
*/

$varname.ext; /*não de variavel inválido*/

/**
 * Dessa forma, o interpretador entende isso como uma variável nomeada $varname, seguida do operador de concatenação de strings, seguida de uma string crua (uma string não delimitada que não bate com nenhuma palavra-chave ou reservada) 'ext'. Obviamente, isso não tem os resultados pretendidos. Nessa situação, é importante notar que o PHP substituirá automaticamente qualquer ponto nos nomes de variáveis recebidas por sublinhados.
*/
?>