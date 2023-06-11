<?php

/**
 * * GERENCIMANENTO BASICO DA SESSÃO
 * 
 * * SEGURANÇA DA SESSÃO 
 * 
 * O módulo de sessão não garante que a informação armazenada em uma sessão seja visualizada apenas pelo usuário que criou a sessão. Medidas adicionais devem ser tomadas para proteger a confidencialidade da sessão, dependendo do valor associado à ela.
 * 
 * Avalie a importância dos dados carregados por suas sessões e adicione proteções extras -- isso normalmente tem efeitos colaterais, que podem reduzir a comodidade do usuário. Por exemplo, para proteger os usuários de táticas de engenharia social simples, deve ser habilitada a opção session.use_only_cookies. E nesse caso, os cookies devem obrigatoriamente estar habilitados no lado do usuário, ou as sessões não irão funcionar.
 * 
 * Existem várias maneiras de expor um ID de sessão existente para terceiros. Exemplos: injeção de JavaScript, ID de sessão nas URLs, interceptação de pacotes (sniffing), acesso físico ao dispositivo. Um ID de sessão exposto possibilita que terceiros tenham acesso à todos os recursos que estão associados à um ID específico. Primeiro, URLs que contenham IDs de sessão. Se for linkado para um site externo, a URL que contém o ID de sessão pode ser armazenada nos logs do site externo. Segundo, um atacante mais ativo pode interceptar o tráfego de rede. Caso não estejam criptografados, os IDs de sessão serão transmitidos em texto puro/simples pela rede. Nesse caso a solução é implementar SSL/TLS em seu servidor e torná-lo obrigatório para os usuários. HSTS deve ser usado para uma melhor segurança.
 * 
 * Nota: Até mesmo o HTTPS às vezes não consegue proteger dados confidenciais no meio do conteúdo, em casos como "CRIME" e "Beast attack". Existem muitas redes que utilizam proxy HTTPS MITM para auditoria. Atacantes também podem configurar um proxy semelhante.
*/

?>