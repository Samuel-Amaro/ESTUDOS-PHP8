<?php

/**
 * * EXEMPLO #2 EXEMPLO DE AUTENTICAÇÃO HTTP "DIGEST"
 * 
 *  Este exemplo demonstra como implementar um script simples de autenticação HTTP "Digest". Para mais informações, leia o » RFC 2617.
 * 
 *
 * * HTTP 
 * 
 * Os cabeçalhos HTTP permitem que o cliente e o servidor passem informações adicionais com a solicitação ou a resposta HTTP.
 * 
 * * CABEÇALHO(HEADER) DA CATEGORIA AUTENTICAÇÃO 
 
 - WWW-Authenticate: Define o método de autenticação que deve ser utilizado para conseguir acesso ao recurso.

 - O cabeçalho da resposta HTTP WWW-Authenticate define o método de autenticação um ser usado para obter acesso ao recurso.

 - O cabeçalho  WWW-Authenticate é enviado junto com a resposta  .401 Unauthorized

 * 
 * * SINTAXE
 
    WWW-Authenticate: <type> realm=<realm>

 * 
 * * DIRETIVAS:
 
  <type> : Tipo de autenticação. Um tipo comum de autenticação é  "Basic".
  
  reino = <realm> : Uma descrição da área protegida. Se nenhuma área for informada, os clientes frequentemente exibirão um hostname formatado.

  charset = <charset> : Informa ao cliente qual é a codificação do servidor quando for submetido usuário e senha. O único valor permitido é "UTF-8". Isso não está relacionado à codificação da string de domínio.

 * *  Autenticação de acesso HTTP Digest
 * 
 * HTTP fornece um mecanismo de autenticação simples de desafio-resposta que pode ser usado por um servidor para desafiar uma solicitação do cliente e por um cliente para fornecer informações de autenticação. Este documento define o esquema de autenticação HTTP Digest que pode ser usado com o HTTP mecanismo de autenticação.
 * 
 *  Um campo de cabeçalho opcional permite que o servidor especifique o algoritmo usado para criar o resumo ou resumo sem chave. Este documento adiciona Algoritmos SHA-256 e SHA-512/256. Para manter para trás compatibilidade com [ RFC2617 ], o algoritmo MD5 ainda é compatível mas NÃO RECOMENDADO.
 * 
 * O esquema Digest é baseado em um paradigma simples de desafio-resposta. O esquema Digest desafia o uso de um valor nonce e pode indicar esse hashing de nome de usuário é suportado. Uma resposta válida contém um resumo sem chave do nome de usuário, a senha, o valor nonce fornecido, o método HTTP e o URI solicitado. Desta forma, a senha é nunca enviado em claro, e o nome de usuário pode ser hash, dependendo a indicação recebida do servidor. O nome de usuário e senha deve ser pré-arranjado de alguma forma não abordada por este documento.
 * 
 * 
 * * O campo do cabeçalho WWW-Authenticate Response
 * 
 * Se um servidor receber uma solicitação de um objeto protegido de acesso, e um campo de cabeçalho de autorização aceitável não é enviado, o servidor responde com um código de status "401 Unauthorized" e um WWW-Authenticate campo de cabeçalho com esquema Digest de acordo com a estrutura definida acima. O valor do campo de cabeçalho pode incluir parâmetros do seguinte lista:
 
  - Reino(realm): Uma string a ser exibida aos usuários para que eles saibam qual nome de usuário e senha para usar. Esta string deve conter pelo menos o nome de o host que executa a autenticação e pode, adicionalmente, indicar a coleção de usuários que podem ter acesso. Um o exemplo é "Register_users@example.com".

  - Domínio(domain): Uma lista de URIs entre aspas e separadas por espaço, conforme especificado em  que define o espaço de proteção. Se um URI for um caminho absoluto, ele será relativo ao URL raiz canônico.

  - nonce: Uma string especificada pelo servidor que deve ser gerada exclusivamente cada vez que uma resposta 401 é feita. É aconselhável que esta string seja Dados base64 ou hexadecimais. Especificamente, uma vez que a string é passada nas linhas do campo de cabeçalho como uma string entre aspas, o caractere de aspas duplas não é permitido, a menos que tenha um caractere de escape adequado. 

  -  opaco(opaque): Uma string de dados, especificada pelo servidor, que DEVERIA ser retornada  pelo cliente inalterada no campo de cabeçalho de autorização de  solicitações subsequentes com URIs no mesmo espaço de proteção. É RECOMENDADO que esta string seja Base64 ou dados hexadecimais. 

  - stable(obsoleto): Um sinalizador que não diferencia maiúsculas de minúsculas, indicando que a solicitação anterior do cliente foi rejeitada porque o valor nonce estava obsoleto. Se stale for true, o cliente pode simplesmente tentar novamente a solicitação com uma nova resposta criptografada, sem solicitar novamente ao usuário um novo nome de usuário e senha. O servidor DEVE apenas definir obsoleto para
  true se receber uma solicitação para a qual o nonce é inválido. Se stale for false, ou qualquer coisa diferente de true, ou o 
  parâmetro stale não estiver presente, o nome de usuário e / ou senha são inválidos e novos valores DEVEM ser obtidos. 

  -  qop: Este parâmetro DEVE ser usado por todas as implementações. É um string citada de um ou mais tokens indicando a "qualidade de proteção "valores suportados pelo servidor. O valor" auth " indica autenticação; o valor "auth-int" indica autenticação com proteção de integridade. Veja as descrições abaixo para calcular o valor do parâmetro de resposta para o aplicação desta escolha. As opções não reconhecidas DEVEM ser ignoradas.
*/

$realm = 'Área restrita';

//usuário => senha
$users = array('admin' => 'mypass', 'guest' => 'guest');

//empty — Determina se a variável é vazia
//Retorna false se var existir e não estiver vazia e não conter um valor zerado. Caso contrário retornará true.

//$_SERVER é um array contendo informação como cabeçalhos, paths, e localizações do script. As entradas neste array são criadas pelo servidor web.
//'PHP_AUTH_DIGEST' : Quando executando no Apache como módulo fazendo autenticação HTTP esta variável é definida para o cabeçalho 'Authorization' enviado pelo cliente (que você pode então usar para fazer apropriada validação).

//se o nome de usuario existir essa condição não e executada
//se o nome de usuario não existir o if e executado
if(empty($_SERVER['PHP_AUTH_DIGEST'])) {
    //cabeçalho de resposta com codigo de resposta http dizendo que não esta autorizado
    header('HTTP/1.1 401 Unauthorized');
    //cabeçalho, de resposta com uma mensagem para clientes se autenticar pelo navegador autenticação por meio do Digest, por meio de uma autenticação com hashs
    //uniqid() : Gere um ID único
    //Com um prefixo vazio, a string retornada terá 13 caracteres.
    //@return string - o identificador único, como uma string.
    //md5 — Calcula o "hash MD5" de uma string
    //Retorna o hash como um número hexadecimal de 32 caracteres.
    header('WWW-Authenticate: Digest realm="'.$realm.'", qop="auth", nonce="'.uniqid().'", opaque="'.md5($realm).'"');
    die('Texto enviado caso o usuário clique no botão Cancelar');
}



//analisar a variavel PHP_AUTH_DIGEST
if(!($dados = http_digest_parse($_SERVER['PHP_AUTH_DIGEST'])) || !isset($users[$dados['username']])) {
  die('Credenciais Inválidas!');
}

//gerar a resposta válida
$A1 = md5($dados['username'] . ':' . $realm . ':' . $users[$dados['username']]);
//REQUEST_METHOD' : Contém o método de request utilizando para acessar a página. Geralmente 'GET', 'HEAD', 'POST' ou 'PUT'.
$A2 = md5($_SERVER['REQUEST_METHOD'] . ':' . $dados['uri']);
$resposta_valida = md5($A1 . ':' . $dados['nonce'] . ':' . $dados['nc'] . ':' . $dados['cnonce'] . ':' . $dados['qop'] . ':' . $A2);

if($dados['response'] != $resposta_valida) {
  die('Credenciais Inválidas!');
}

//ok, nome de usuário e senha válidos
echo 'Você está logado como: ' . $dados['username'];


/**
 * função para decompor o http auth header 
*/
function http_digest_parse($txt) {
  //proteção contra dados imcopletos
  $partes_necessarias = array('nonce' => 1, 'nc' => 1, 'cnonce' => 1, 'qop' => 1, 'username' => 1, 'uri' => 1, 'response' => 1);
  $dados = array();
  //implodir
  //Junte os elementos da array com uma string
  //function implode(array|string $separator = "", ?array $array): string { }
  //@param array|string $separator [optional]: O padrão é uma string vazia.
  //@param array | null $ array - O array de strings a implodir : 
  //@return string: uma string contendo uma representação de string de todos os elementos do array na mesma ordem, com a string de cola entre cada elemento.
  //array_keys: Retorna todas as chaves ou um subconjunto das chaves de um array
  //função array_keys (array $array, mixed$ filter_value, bool $ strict = false): array {}
  //@param array $ array - Um array contendo chaves a serem retornadas.
  //@return int[]|string[] - uma array de todas as chaves na entrada.
  //junta todas as chaves do array numa string so com um separador | entre cada uma das chaves
  $chaves = implode('|', array_keys($partes_necessarias));
  //preg_match_all
  //Executar uma correspondência de expressão regular global
  //function preg_match_all(
   // string $pattern,
   // string $subject,
   // &$matches,
   // int $flags = PREG_PATTERN_ORDER,
   // int $offset = 0
  //): int|false|null { }
  //@param string $ pattern - O padrão a ser pesquisado, como uma string.
  //@param string $ subject - A string de entrada.
  //@param string[][]&$corresponde [opcional] : array de todas as correspondências em uma array multidimensional ordenada de acordo com os sinalizadores.
  //@param int $ flags[opcional] : Pode ser uma combinação das seguintes sinalizações (observe que não faz sentido usar PREG_PATTERN_ORDER junto com PREG_SET_ORDER): PREG_PATTERN_ORDER
  //Ordena os resultados de forma que $ match [0] seja uma matriz de correspondências de padrão completo, $ match [1] seja uma matriz de strings correspondidas pelo primeiro subpadrão entre parênteses e assim por diante.
  //@param int $ offset [opcional]
  //Normalmente, a pesquisa começa no início da string do assunto. O deslocamento do parâmetro opcional pode ser usado para especificar o local alternativo a partir do qual iniciar a pesquisa (em bytes).
  //Usar deslocamento não é equivalente a passar substr ($ subject, $ offset) para preg_match_all no lugar da string do assunto, porque o padrão pode conter asserções como ^, $ ou (? <= X).
  //@return int | false | null
  //o número de correspondências de padrão completo (que pode ser zero) ou FALSE se ocorreu um erro.  
  preg_match_all('@(' . $chaves . ')=(?:([\'"])([^\2]+?)\2|([^\s,]+))@', $txt, $correspondencias, PREG_SET_ORDER);

  foreach($correspondencias as $m) {
    $dados[$m[1]] = $m[3] ? $m[3] : $m[4]; unset($partes_necessarias[$m[1]]);
  }

  return $partes_necessarias ? false : $dados;
}
?>