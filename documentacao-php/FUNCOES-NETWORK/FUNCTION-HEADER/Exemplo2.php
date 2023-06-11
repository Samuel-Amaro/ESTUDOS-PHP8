<?php

/**
 * * EXEMPLO #2 Diretivas de cache
 * 
 * Os scripts PHP geralmente geram conteúdo dinâmico que não deve ser armazenado em cache pelo navegador do cliente ou qualquer cache de proxy entre o servidor e o navegador do cliente. Muitos proxies e clientes podem ser forçados a desativar o cache com:
*/

//Cabeçalho HTTP pela categoria de uso em Cache
//Cache-Control: Especifica diretivas para mecanismos de cache em requisições e respostas.
//O campo de cabeçalho genérico Cache-Control é usado para especificar diretivas para mecanismos de cache tanto em requisições quanto em respostas. Diretivas de cache são unidirecionais, o que significa que uma dada diretiva em uma requisição não implica em que a mesma seja dada na resposta.
//Sintaxe: As diretivas são insensíveis à caixa (case-insensitive) e tem um argumento opcional, que pode usar tanto a sintaxe de token quanto a de cadeias entre aspas. Multiplas diretivas são separadas por virgula.
//Diretivas de Cache de requisições: Diretivas Cache-Control padrão que podem ser usadas pelo cliente em uma requisição HTTP.
  //Cache-Control: no-cache
//Para desligar o armazenamento em cache, você pode enviar o cabeçalho de resposta seguinte. Alem disso, veja também os cabeçalhos Expires e Pragma.
//Cache-Control: no-cache, no-store, must-revalidate
//no-cache: Força o cache a submeter a requisição ao servidor origem para validação antes de liberar a cópia em memória.
//must-revalidate: O cache deve verificar o estado dos recursos caducos antes de usá-los e não usar recursos expirados.

header("Cache-Control: no-cache, must-revalidate"); //HTTP/1.1
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); //Data no passado

/**
 *  Nota: Você pode descobrir que suas páginas não são armazenadas em cache, mesmo se você não exibir todos os cabeçalhos acima. Existem várias opções que os usuários podem definir para seus navegadores que alteram seu comportamento de armazenamento em cache padrão. Ao enviar os cabeçalhos acima, você deve substituir quaisquer configurações que possam fazer com que a saída do seu script seja armazenada em cache. Além disso, session_cache_limiter () e a session.cache_limiterdefinição de configuração podem ser usados ​​para gerar automaticamente os cabeçalhos corretos relacionados ao cache quando as sessões estão sendo usadas.
*/
?>