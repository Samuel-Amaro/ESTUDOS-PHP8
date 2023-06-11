<?php 

/**
 * * SESSÕES ATIVAS
 * 
 *  Os desenvolvedores devem manter um registro de sessões ativas por usuário e notificar o usuário sobre quantas sessões ativas, de qual IP (e área), a quanto tempo a sessão está ativa, etc. O PHP não mantém um registro dessas informações. É o desenvolvedor quem deve manter.
 * 
 * Existem inúmeras formas de implementação. Pode ser configurado um banco de dados que mantém um registro dos dados necessários e armazena as informações nele. Como os dados de sessão são removidos pelo coletor de lixo (garbage collector), o desenvolvedor deve cuidar dos dados removidos para manter a consistência do banco de dados das sessões ativas.
 * 
 * Uma das implementações mais simples é prefixar o ID de sessão com o ID do usuário e armazenar as informações necessárias na $_SESSION. Muitos bancos de dados tem boa performance para selecionar o prefixo de uma string. Você pode usar session_regenerate_id() e session_create_id() para isso.
 * 
 * Aviso: Nunca utilize informações confidenciais como prefixo. Se o ID do usuário for confidencial, considere a utilização de hash_hmac().
 * 
 * Aviso: Habilitar session.use_strict_mode é obrigatório para esse setup. Certifique-se de que essa opção esteja habilitada, caso contrário o banco de dados de sessões ativas pode ser comprometido.
 * 
 * O gerenciamento de sessão baseada em timestamp é necessário para detectar acesso em sessões obsoletas. Quando um acesso à uma sessão obsoleta é detectado, as flags de autenticação devem ser removidas de todas as sessões ativas para esse usuário. Isso evita que atacantes explorem sessões roubadas.
 * 
*/

?>