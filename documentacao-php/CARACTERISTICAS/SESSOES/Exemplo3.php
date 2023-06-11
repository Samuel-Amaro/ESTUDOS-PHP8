<?php

/**
 * * SESSION_START
 * 
 *  session_start — Inicia uma nova sessão ou resume uma sessão existente
 * 
 * * DESCRIÇÃO
    
    session_start(array $options = []): bool

 * 
 * session_start() cria uma sessão ou resume a sessão atual baseado em um id de sessão passado via GET ou POST, ou passado via cookie.
 * 
 * Quando session_start() é chamada ou quando uma sessão inicia automaticamente, o PHP chamará os manipuladores open e read. Eles serão manipuladores de gravação internos (built-in) fornecidos por padrão ou por extensões do PHP (como SQLite ou Memcached); ou podem ser manipuladores personalizados definidos por session_set_save_handler(). O callback read recuperará qualquer informação de sessão existente (armazenada em um formato serializado especial) e será deserializado e usado para preencher automaticamente a super global $_SESSION quando o callback read retornar de volta os dados salvos em sessão para o manipulador de sessão do PHP.
 * 
 * Para utilizar uma sessão com nome, execute session_name() antes de executar session_start().
 * 
 * Quando session.use_trans_sid está habilitada, a função session_start() registrará um manipulador de saída interno para a reescrita da URL.
 * 
 * Se um usuário usar ob_gzhandler ou similar com ob_start(), a ordem da função é importante para saída/output adequado. Por exemplo, ob_gzhandler deve ser registrado antes de iniciar a sessão.
 * 
 * * PARÊMETROS
 * 
 * options: Se informado, este é um array associativo de opções que vão sobrepor os que estiverem configurados nas diretivas de configuração de sessão. As chaves não devem incluir o prefixo da session. Além do conjunto de diretivas de configuração comum, a opção read_and_close pode ser informada. Se definida como true, fará com que a sessão seja fechada imediatamente depois de ser lida, evitando o bloqueio desnecessário caso os dados da sessão não sejam alterados.
 * 
 * * VALOR RETORNADO
 * 
 * Esta função retorna true se uma sessão foi iniciada com sucesso, caso contrário false.
 * 
 * * UM EXEMPLO BÁSICO DE SESSÃO
 * 
 * EXEMPLO #1 page1.php
*/

//pagina1.php

session_start();

echo 'Bem vindo à página #1';

//setando dados informações do usuario que esta usando a sessão atual
$_SESSION['favcolor'] = 'green';
$_SESSION['animal'] = 'cat';
$_SESSION['time'] = time();

//Funciona se o cookie de seção foi aceito
echo '<br/><a href="Page2.php">page 2</a>';

//SID (string)
//Constante contendo nome da sessão e id da sessão na forma de "name=ID" ou string vazia se o ID da sessão foi definido em um apropriado cookie de sessão. Este é o mesmo id que é retornado por session_id().
//ou talves passando o ID da seção se necessario
echo '<br/><a href="Page2.php?'. SID . '">page 2</a>';

?>