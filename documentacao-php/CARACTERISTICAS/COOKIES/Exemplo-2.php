<?php 

/**
 * * EXEMPLO #2 EXEMPLO DE SETCOOKIE() PARA DELETAR COOKIES
 * 
 *  Quando estiver deletando um cookie, tenha certeza de que a data de expiração dele está no passado, para acionar o mecanismo de remoção do seu navegador. O exemplo a seguir mostra como deletar os cookies enviados no exemplo anterior:
*/

//configura a data de expiração para um hora atrás
setcookie("CookieTeste", "", time() - 3600);
setcookie("CookieTeste", "", time() - 3600, "\/~rasmus\/", ".example.com", 1);

?>