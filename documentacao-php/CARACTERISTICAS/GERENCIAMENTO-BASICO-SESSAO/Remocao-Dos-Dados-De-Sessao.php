<?php 

/**
 * * REMOÇÃO DOS DADOS DE SESSÃO
 * 
 * Os dados de sessões obsoletas devem ser inacessíveis e removidos. O módulo de sessão atual não manipula isso muito bem.
 * 
 * É melhor remover os dados de sessões obsoletas o mais cedo possível. Ainda assim, sessões ativas NÃO DEVEM ser removidas imediatamente. Para preencher esses requisitos, o gerenciamento dos dados de sessões baseadas em timestamp deve ser implementado pelo próprio desenvolvedor.
 * 
 * Configure e gerencie um timestamp de expiração na $_SESSION. Bloqueie os acessos aos dados de sessões obsoletas. Quando um acesso aos dados de uma sessão obsoleta for detectado, é aconselhável remover todos os status de autenticação das sessões dos usuários e forçá-los a refazer a autenticação. O acesso aos dados de uma sessão obsoleta pode ser um ataque. Para fazer isso, deve ser mantido um registro das sessões ativas por usuário.
 * 
 * Nota: O acesso à uma sessão obsoleta pode ocorrer por causa de redes instáveis e/ou acessos concorrentes ao website. O servidor tenta definir um novo ID de sessão via cookie, mas o pacote que define o cookie (Set-Cookie) pode não ter chegado ao cliente por perda de conexão. Uma conexão pode gerar um novo ID de sessão executando session_regenerate_id(), mas uma outra conexão concorrente pode não ter pego ainda o novo ID de sessão. Além disso, o acesso aos dados da sessão obsoleta deve ser bloqueado algum tempo depois. Ou seja, o gerenciamento de sessão baseada em timestamp é necessário.
 * 
 * Em poucas palavras, não destrua os dados de sessão chamando session_regenerate_id() ou session_destroy(); ao invés disso, utilize timestamp para controlar o acesso aos dados da sessão. Deixe que session_gc() remova os dados obsoletos do armazenamento de dados da sessão.
 * 
 * 
*/

?>