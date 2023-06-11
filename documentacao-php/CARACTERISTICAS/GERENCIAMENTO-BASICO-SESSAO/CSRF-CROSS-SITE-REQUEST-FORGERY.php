<?php

/**
 * * CSRF(CROSS SITE REQUEST FORGERY)
 * 
 *  Sessão e autenticação não protegem contra ataques CSRF. Os desenvolvedores devem implementar proteções contra CSRF por conta própria.
 * 
 * output_add_rewrite_var() pode ser usada para proteção contra CSRF. Visite o manual para mais detalhes.
 * 
 * Nota: Versões do PHP anteriores à 7.2.0 utilizam o mesmo buffer de saída e as mesmas configurações INI que o recurso trans sid. Portanto, o uso de output_add_rewrite_var() em versões do PHP anteriores à 7.2.0 não é recomendado.
 * 
 * A maioria dos frameworks para aplicações web tem suporte à proteção CSRF. Visite o manual do framework de sua aplicação para mais detalhes.
*/

?>