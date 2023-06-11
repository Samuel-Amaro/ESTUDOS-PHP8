<?php

/**
 * * USO BÁSICO
 * 
 *  Sessões são uma forma simples de armazenar dados para usuários individuais usando um ID de sessão único. Sessões podem ser usadas para persistir informações entre requisições de páginas. IDs de sessão normalmente são enviados ao navegador através de cookies de sessão e o ID é usado para recuperar dados da sessão existente. A ausência de um ID ou cookie de sessão permite que o PHP saiba que deve criar uma nova sessão e gerar um novo ID de sessão.
 * 
 * Sessões seguem um fluxo simples. Quando uma sessão é iniciada, o PHP recupera uma sessão existente usando o ID informado (normalmente de um cookie de sessão) ou se nenhum é informado então será criada uma nova sessão. O PHP preencherá a super global $_SESSION com todos os dados de sessão depois que a sessão iniciar. Quando o PHP finalizar, automaticamente ele pegará o conteúdo da super global $_SESSION, então vai serializá-lo e enviá-lo para armazenamento usando o manipulador de gravação da sessão.
 * 
 * Por padrão, o PHP usa o manipulador de gravação interno files que é configurado por session.save_handler. Isto salva os dados da sessão no servidor no local configurado pela diretiva de configuração session.save_path.
 * 
 * Sessões podem ser iniciadas manualmente usando a função session_start(). Se a diretiva session.auto_start estiver configurada como 1, a sessão será iniciada automaticamente no início da requisição.
 * 
 * Sessões normalmente se encerram automaticamente quando o PHP termina de executar um script, mas podem ser encerradas manualmente usando a função session_write_close().
*/

?>