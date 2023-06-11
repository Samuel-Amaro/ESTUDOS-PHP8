<?php

/**
 * * COOKIES
 * 
 *  O PHP suporta de forma transparente cookies HTTP. Cookies são um mecanismo para armazenar dados no navegador remoto e assim rastrear ou identificar usuários que retornam. Você pode criar cookies usando as funções setcookie() ou setrawcookie(). Cookies fazem parte do cabeçalho HTTP, logo, setcookie() deve ser chamada antes que qualquer saída seja enviada ao navegador. Esta é a mesma limitação que a função header() tem. Você pode usar as funções de buffering de saída para atrasar as impressões no script até que você tenha decidido se vai ou não configurar qualquer cookie ou enviar quaisquer cabeçalhos.
 * 
 * Qualquer cookie enviado para o servidor pelo cliente será automaticamente incluído no array auto-global $_COOKIE se variables_order contém "C". Se você deseja definir vários valores em um único cookie, simplesmente acrescente [] ao nome do cookie.
 * 
 * Para mais detalhes, incluindo comentários sobre problemas de browsers, veja as funções setcookie() e setrawcookie ().
*/

?>