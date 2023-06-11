<?php 

/**
 * * $_SERVER
 * 
 *  $HTTP_SERVER_VARS [obsoleto]
 * 
 * $_SERVER -- $HTTP_SERVER_VARS [obsoleto] — Informação do servidor e ambiente de execução
 * 
 * DESCRIÇÃO
 * 
 * $_SERVER é um array contendo informação como cabeçalhos, paths, e localizações do script. As entradas neste array são criadas pelo servidor web. Não há garantia que cada servidor web proverá algum destes; servidores podem omitir alguns, ou fornecer outros não listados aqui.
 * 
 * ÍNDICES
 * 
 * Você pode ou não encontrar algum dos seguintes elementos em $_SERVER.
 
    'PHP_SELF' : O nome do arquivo do script que está executando, relativa à raiz do documento. Por exemplo, $_SERVER['PHP_SELF'] em um script no endereço http://example.com/test.php/foo.bar seria /test.php/foo.bar. A constante __FILE__ contém o caminho completo e nome do atual arquivo (i.e. incluído).

    'argv' : Array de argumentos passado para o script. Quando o script é executado na linha de comando, isto permite um acesso aos parâmetros de linha de comando no estilo do C. Quando chamado via método GET, ele conterá a query string.

    'argc' : Contém o número de parâmetros da linha de comando passados para o script (se executando da linha de comando).

    'GATEWAY_INTERFACE' : O número de revisão da especificação CGI que o servidor está utilizando, por exemplo : 'CGI/1.1'.

    'SERVER_ADDR' : O endereço IP do servidor onde está o script em execução.

    'SERVER_NAME' : O nome host do servidor onde o script atual é executado. Se o script está rodando em um host virtual, este será o valor definido para aquele host virtual.

    'SERVER_SOFTWARE' : A string de identificação do servidor, fornecida nos headers quando respondendo a requests(REQUISIÇÕES).

    'SERVER_PROTOCOL' : Nome e número de revisão do protocolo de informação pelo qual a página foi requerida, por exemplo 'HTTP/1.0';

    'REQUEST_METHOD' : Contém o método de request utilizando para acessar a página. Geralmente 'GET', 'HEAD', 'POST' ou 'PUT'.
    
        Nota: O script PHP é terminado depois de enviado cabeçalhos - HEADERS (significa depois de produzir alguma saída sem saída do buffer) se o método da requisição for HEAD.

    'REQUEST_TIME' : O timestamp do início da requisição(REQUEST).

    'REQUEST_TIME_FLOAT' : O timestamp, com precisão em microsegundos, do início da requisição(REQUEST).

    'QUERY_STRING' : A query string(string de consulta, consulta de texto), se houver, pela qual a página foi acessada.

    'DOCUMENT_ROOT' : O diretório raiz sob onde o script atual é executado, como definido no arquivos de configuração do servidor.

    'HTTP_ACCEPT' : O conteúdo do header Accept: da requisição atual, se houver.

    'HTTP_ACCEPT_CHARSET' : O conteúdo do header Accept-Charset: da requisição atual, se houver. Exemplo: 'iso-8859-1,*,utf-8'.

    'HTTP_ACCEPT_ENCODING' : O conteúdo do header Accept-Encoding: da requisição atual, se houver. Exemplo: 'gzip'.

    'HTTP_ACCEPT_LANGUAGE' : O conteúdo do header Accept-Language: da requisição atual, se houver. Exemplo 'en'(ingles-USA).

    'HTTP_CONNECTION' : O conteúdo do header Connection: da requisição atual, se houver. Exemplo: 'Keep-Alive'.

    'HTTP_HOST' : O conteúdo do header Host: da requisição atual, se houver.

    'HTTP_REFERER' : O endereço da página (se houver) através da qual o agente do usuário acessou a página atual. Essa diretiva é informada pelo agente do usuário. Nem todos os browsers geram esse header, e alguns ainda possuem a habilidade de modificar o conteúdo do HTTP_REFERER como recurso. Em poucas palavras, não é confiável.

    'HTTP_USER_AGENT' : O conteúdo do header User-Agent: da requisição atual, se houver. É uma string denotando o agente de usuário pelo qual a página é acessada. Um exemplo típico é: Mozilla/4.5 [en] (X11; U; Linux 2.2.9 i586). Além de outras coisas, você pode utilizar este valor com get_browser() para personalizar a geração de suas páginas para as capacidades do agente do usuário.

    'HTTPS' : Define para um valor não vazio se o script foi requisitado através do protocolo HTTPS.

    'REMOTE_ADDR' : O endereço IP de onde o usuário está visualizado a página atual.

    'REMOTE_HOST' : O nome do host que o usuário utilizou para chamar a página atual. O DNS reverso (lookup) do REMOTE_ADDR do usuário.
    
    'REMOTE_PORT' : A porta TCP na máquina do usuário utilizada para comunicação com o servidor web.

    'REMOTE_USER' : O usuário autenticado

    'REDIRECT_REMOTE_USER' : O usuário autenticado utilizado se a requisição foi redirecionada internamente.

    'SCRIPT_FILENAME' : O caminho absoluto o script atualmente em execução.

    'SERVER_ADMIN' : O valor fornecido pela diretiva SERVER_ADMIN (do Apache) no arquivo de configuração do servidor. Se o script está sendo executado em um host virtual, este será os valores definidos para aquele host virtual.

    'SERVER_PORT' : A porta na máquina servidora utilizada pelo servidor web para comunicação. Como default, este valor é '80'. Utilizando SSL, entretanto, mudará esse valor para a porta de comunicação segura HTTP.

    'SERVER_SIGNATURE' : String contendo a versão do servidor e nome do host virtual que é adicionado às páginas geradas no servidor, se ativo.

    'PATH_TRANSLATED' : O caminho real do script relativo ao sistema de arquivos (não o document root), depois realizou todos os mapeamentos de caminhos (virtual-to-real).

    'SCRIPT_NAME' : Contém o caminho completo do script atual. Útil para páginas que precisam apontar para elas mesmas (dinamicamente). A constante __FILE__ contém o caminho completo e nome do arquivo (mesmo incluído) atual.

    'REQUEST_URI' : O URI fornecido para acessar a página atual, por exemplo, '/index.html'.

    'PHP_AUTH_DIGEST' : Quando executando no Apache como módulo fazendo autenticação HTTP esta variável é definida para o cabeçalho 'Authorization' enviado pelo cliente (que você pode então usar para fazer apropriada validação).

    'PHP_AUTH_USER' : Quando efetuando autenticação HTTP, esta variável estará definida com o username fornecido pelo usuário.

    'PHP_AUTH_PW' : Quando efetuando autenticação HTTP, esta variável estará definida com a senha fornecida pelo usuário.

    'AUTH_TYPE' : Quando efetuando autenticação HTTP, esta variável estará definida com o tipo de autenticação utilizado.

    'PATH_INFO' : Contém qualquer informação fornecida pelo usuário, se disponível, que levam ao nome do script atual, precedendo a query string. Por exemplo, se o script atual fosse acessado via URL http://www.example.com/php/path_info.php/some/stuff?fkoo=bar, então $_SERVER['PATH_INFO']teria como valor /some/stuff

    'ORIG_PATH_INFO' : Versão original do 'PATH_INFO' antes de ser processada pelo PHP.
*/

?>