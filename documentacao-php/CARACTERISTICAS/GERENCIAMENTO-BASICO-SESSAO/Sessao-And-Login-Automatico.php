<?php

/**
 * * SESSÃO E LOGIN AUTOMATICO
 * 
 * Desenvolvedores NÃO devem utilizar ID de sessão de longa vida para o login automático, pois isso aumenta o risco de roubo da sessão. O login automático deve ser implementado pelo desenvolvedor.
 * 
 * Use um "one-time hash" seguro como chave para o login automático usando setcookie(). Use um hash seguro e mais forte que SHA-2, como por exemplo, SHA-256 ou maior com dados randômicos provenientes de random_bytes() ou /dev/urandom.
 * 
 * Se o usuário não estiver autenticado, verifique se a chave de login automático é válida ou não. Se a chave é válida, autentique o usuário e configure uma nova chave "one-time hash" segura. Deve ser possível usar a chave de login automático apenas uma vez, ou seja, nunca reutilize uma chave de login automático; ao invés disso, sempre gere uma nova chave.
 * 
 * A chave de login automático é uma chave de autenticação de longa vida, portanto essa chave deve estar o mais protegida possível. Use os atributos de cookie path/httponly/secure para protegê-la. Ou seja, nunca transmita a chave de login automático a não ser que seja realmente necessário.
 * 
 * Desenvolvedores devem implementar funcionalidades que desabilitam login automático e removem cookies de login automático desnecessários.
*/

?>