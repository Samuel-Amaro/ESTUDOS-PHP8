<?php 

/**
 * * GERENCIAMENTO DE SESSÃO NÃO ADAPTIVO
 * 
 *  O gerenciador de sessão do PHP atualmente é adaptivo por padrão. Os gerenciadores de sessão adaptivos possuem riscos adicionais.
 * 
 * A partir do PHP 5.5.2, session.use_strict_mode está disponível. Quando essa opção estiver habilitada e o manipulador de armazenamento de sessão suportá-la, um ID de sessão que não tenha sido inicializado é rejeitado, e um novo ID de sessão é criado. Isso protege contra ataques que forçam o usuário a usar um ID de sessão conhecido. Atacantes podem colar links ou enviar email que contém ID de sessão, por exemplo http://example.com/page.php?PHPSESSID=123456789. Se session.use_trans_sid estiver habilitado, a vítima iniciará uma sessão usando o ID de sessão fornecido pelo atacante. A opção session.use_strict_mode diminui o risco.
 * 
 * Aviso: Um manipulador de armazenamento definido pelo usuário também pode suportar o modo de sessão strict implementando uma função/método para validação do ID de sessão. Todos os manipuladores de armazenamento definidos pelo usuário devem implementar uma função/método para validação do ID de sessão.
 * 
 * O cookie de ID de sessão pode ser definido usando os atributos domain, path, httponly e secure. Existe uma certa precedência que é definida pelos navegadores. Ao usar a precedência, o atacante pode definir um ID de sessão que pode ser usado permanentemente. O uso de session.use_only_cookies não resolverá essa questão. session.use_strict_mode diminui esse risco. Com session.use_strict_mode=On, um ID de sessão que não tenha sido inicializado não será aceito. O módulo de sessão cria um novo ID de sessão sempre que o ID de sessão não tenha sido inicializado pelo módulo de sessão.
 * 
 * Nota: Apesar da opção session.use_strict_mode diminuir o risco do gerenciamento de sessão adotivo, um atacante pode forçar os usuários a usarem um ID de sessão inicializado e que foi criado pelo atacante, como por exemplo, com injeção de JavaScript. Esse tipo de ataque pode ser evitado seguindo as recomendações deste manual. Se este manual for seguido, será habilitada a opção session.use_strict_mode, e também usado um gerenciamento de sessão baseado em timestamp e gerado novamente um ID de sessão usando session_regenerate_id() com os procedimentos recomendados. Se tudo isso for feito, o ID de sessão gerado por um atacante será deletado. Quando ocorre um acesso à uma sessão obsoleta, todos os dados da sessão ativa devem ser salvos. Isso será útil para investigação mais tarde. Então o usuário deverá ser forçado a fazer logout de todas as sessões, ou seja, o usuário será obrigado a se autenticar novamente. Dessa forma se evita que atacantes abusem de sessões roubadas.
 * 
 * Aviso: O acesso aos dados de sessões obsoletas nem sempre é por causa de ataques. Redes instáveis e/ou remoção imediata de sessão ativa farão com que usuários legítimos usem sessões obsoletas.
 * 
 * A partir do PHP 7.1.0, session_create_id() foi adicionado. Essa função poderia ser usada para adicionar o ID do usuário como prefixo no ID de sessão para acessar a sessão ativa do usuário de forma eficiente. Habilitar session.use_strict_mode é muito importante com essa configuração. Caso contrário, usuários maliciosos podem definir IDs de sessão maliciosos para outros usuários.
 * 
 * Nota: Usuários de versões anteriores ao PHP 7.1.0 devem usar CSPRNG, como por exemplo /dev/urandom ou random_bytes(), e funções de hash para gerar um novo ID de sessão. session_create_id() possui detecção de colisão e gera o ID de sessão de acordo com as configurações INI de sessão. O uso de session_create_id() é preferível.
*/

?>