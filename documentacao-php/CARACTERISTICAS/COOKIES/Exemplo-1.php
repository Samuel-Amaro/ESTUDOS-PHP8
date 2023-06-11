<?php 

/**
 * * EXEMPLO #1
 * 
 * EXEMPLO DE SETCOOKIE() PARA ENVIAR COOKIES
 * 
*/

$value = 'alguma coisa de algum lugar';

//enviando um cookie para o cliente
//passando o nome do cookie e seu valor
setcookie("CookieTeste", $value);

//enviando um mesmo cookie para o cliente adicionando uma nova configuração
//nome do cookie, valor do cookie, tempo para o cookie expirar
setcookie("CookieTeste", $value, time() + 3600); /*este cookie expira em 1 hora*/

//enviando um mesmo cookie para o cliente adicionand uma nova configuração por parametros
//nome do cookie, valor do cookie, tempo para o cookie expirar, caminho no servidor onde o cookie estara disponivel, dominio para o qual o cookie estara disponivel, Indica que o cookie só podera ser transimitido sob uma conexão segura HTTPS do cliente.
setcookie("CookieTeste", $value, time() + 3600, "/~rasmus", ".example.com", 1);

/**
 *  Note que a porção do valor do cookie será automaticamente codificada com urlencode quando você enviar o cookie, e quando ele for recebido, será automaticamente decodificado e atribuido a uma variável com o mesmo nome do cookie. Se você não quer que isso aconteça, você pode utilizar no lugar a função setrawcookie() se você estiver utilizando o PHP 5. Para ver o conteúdo do nosso cookie de teste em um script, simplesmente utilize um dos exemplos abaixo:
*/

//Mostra um cookie individual
//echo $_COOKIE["CookieTeste"];

//Outra maneira de depurar(debug)/testar é vendo todos os cokies
//print_r($_COOKIE);

?>