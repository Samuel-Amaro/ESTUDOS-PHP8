<?php

/**
 * * INTRODUÇÃO
 * 
 * O suporte a sessões no PHP consiste em uma maneira de preservar certos dados atráves dos acessos subsequentes.
 * 
 * Um visitante acessando o seu web site ganha um identificador único, o assim chamado id de sessão. Ele é salvo em um cookie do lado do usuário ou propagado via URL.
 * 
 * O suporte à sessão permite armazenar dados entre as requisições no array super global $_SESSION. Quando um visitante acessar seu site, o PHP vai conferir automaticamente (se session.auto_start estiver definido como 1) ou quando você pedir (explicitamente atráves de session_start()) se um id de sessão específico foi enviado com a requisição. Se este for o caso, o ambiente anteriormente salvo é recriado.
 * 
 * Cuidado: Se você ativar session.auto_start, então a única maneira de colocar objetos em suas sessões é carregando a definição da classe usando auto_prepend_file, onde você pode carregar a definição da classe, caso contrário você terá que usar serialize() no objeto, e unserialize() nele depois.
 * 
 * $_SESSION (e todas as variávels registradas) são serializadas internamente pelo PHP usando o manipulador de serialização especificado pela configuração INI session.serialize_handler depois que a requisição terminar. Variáveis registradas que estejam indefinidas são marcadas como não definidas. Nos acessos subsequentes, elas não são definidas pelo módulo da sessão, a menos que o usuário as definam posteriormente.
 * 
 * Nota: Por favor, note que ao trabalhar com sessões, um registro na sessão não é criado até que a variável seja registrada usando a função session_register() ou pela adição de uma nova chave ao array super global $_SESSION. Isto continua valendo mesmo se uma sessão foi iniciada usando a função session_start().
 * 
 * Nota: O PHP 5.2.2 introduziu uma funcionalidade não documentada para armazenar os arquivos de sessão em "/tmp" mesmo que open_basedir estivesse habilitado e "/tmp" não fosse adicionado explicitamente na lista de caminhos permitidos. Esta funcionalidade foi removida a partir do PHP 5.3.0.
*/


?>