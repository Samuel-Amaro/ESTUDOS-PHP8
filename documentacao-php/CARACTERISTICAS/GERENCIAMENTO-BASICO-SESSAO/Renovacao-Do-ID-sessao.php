<?php

/**
 * * RENOVAÇÃO DO ID DE SESSÃO
 * 
 *  session.use_strict_mode é uma boa prevenção, mas não é o suficiente. Desenvolvedores devem usar session_regenerate_id() para a segurança da sessão.
 * 
 * A renovação do ID de sessão reduz o risco de roubo do ID de sessão, sendo assim, session_regenerate_id() deve ser chamada periodicamente. Por exemplo, a renovação do ID de sessão a cada 15 minutos para a segurança de conteúdos sensíveis. Mesmo se o ID de sessão for roubado, tanto a sessão do usuário legítimo quanto a do atacante terão expirados. Ou seja, o acesso do usuário ou do atacante irá gerar erro de acesso à sessão obsoleta.
 * 
 * O ID de sessão deve ser renovado quando o usuário se autenticar. session_regenerate_id() deve ser chamado antes de salvar as informações de autenticação em $_SESSION. (A partir do PHP 7.0.0, session_regenerate_id() salva os dados da sessão atual automaticamente com o intuito de salvar o timestamp/etc na sessão atual.) Assegure-se de que apenas a nova sessão contenha flag autenticada.
 * 
 * Desenvolvedores NÃO devem depender da expiração do ID de sessão proveniente de session.gc_maxlifetime. Atacantes podem acessar o ID de sessão da vítima periodicamente para impedir que ele expire e poder continuar explorando o ID, inclusive as sessões autenticadas.
 * 
 * Ao invés disso, deve ser implementado um gerenciamento de sessão baseada em timestamp, e por contra própria.
 * 
 * Aviso: Embora o gerenciador de sessão possa gerenciar o timestamp de forma transparente, essa funcionalidade não está implementada. Dados de sessões antigas devem ser mantidos até a execução do GC (garbage collector/coletor de lixo). Ao mesmo tempo, desenvolvedores devem assegurar-se de remover dados de sessões obsoletas. Porém, os desenvolvedores NÃO devem remover dados de sessões ativas imediatamente. Isto é, nunca chame session_regenerate_id(true); e session_destroy() para uma sessão ativa. Isso pode soar contraditório, mas é um requisito obrigatório.
 * 
 * session_regenerate_id() não apaga sessão antiga por padrão. Uma sessão antiga e autenticada pode estar disponível para uso. Os desenvolvedores devem impedir que uma sessão antiga seja utilizada e devem proibir o acesso aos dados de sessões obsoletas por conta própria utilizando timestamp.
 * 
 * 
 * Aviso: A remoção imediata de sessão ativa tem efeitos colaterais indesejados. A sessão pode desaparecer quando houver conexões concorrentes em uma aplicação web e/ou a rede estiver instável.
 * 
 * Possíveis acessos maliciosos também não podem ser detectados com a remoção imediata de sessões ativas.
 * 
 * Ao invés de remover a sessão antiga imediatamente, deve ser configurado, na $_SESSION, um tempo curto (timestamp) para a expiração e proibir acesso aos dados da sessão (essa implementação é por contra própria).
 * 
 * O acesso aos dados de sessões antigas não deve ser bloqueado imediatamente depois de executar session_regenerate_id(). O acesso deve ser bloqueado um pouco depois, como por exemplo, alguns segundos depois para redes à cabo estáveis e alguns minutos depois para redes instáveis como mobile ou WiFi.
 * 
 * Se um usuário tentar acessar uma sessão obsoleta (que já tenha expirado), o acesso deve ser proibido. É recomendável que seja removido o status de autenticação de todas as sessões do usuário, porque é provável que seja um ataque.
 * 
 * O uso adequado de session.use_only_cookies e session_regenerate_id() poderia causar um ataque DoS pessoal por causa de cookies impossíveis de serem removidos e que foram configurados por atacantes. Quando isso acontecer, o desenvolvedor pode solicitar aos usuários que removam os cookies e avisá-los que podem existir problemas de segurança. Atacantes podem configurar cookies maliciosos via aplicações web vulneráveis, extensões maliciosas para navegadores, dispositivos comprometidos fisicamente, etc.
 * 
 * Aviso: Não interprete de forma equivocada o risco de DoS. use_strict_mode=On é obrigatório para a segurança geral do ID de sessão! É recomendável que todos os sites habilitem use_strict_mode.
 * 
 * DoS aconteceria apenas sob ataque de crackers. A vulnerabilidade de injeção de JavaScript na aplicação é a causa mais comum.
*/

?>