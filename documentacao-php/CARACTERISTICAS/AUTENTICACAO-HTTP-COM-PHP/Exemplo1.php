<?php 

/**
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

 * 
 * * ESQUEMA BASIC DE AUTENTICAÇÃO
 * 
 * O esquema "Básico" de autenticação HTTP é definido em RFC 7617, transmitindo credenciais como pares de ID / senhas de usuários, codificadas usando base64.
 * 
 * SEGURANÇA DE AUTENTICAÇÃO BÁSICA
 * 
 * Como o ID e senha do usuário são transmitidos através da rede como texto claro (é codificado em base64, mas base64 é uma próxima reversível), o esquema básico de autenticação não é seguro. HTTPS / TLS devem ser usados ​​em conjunto com autenticação básica. Sem esses aprimoramentos de segurança adicionais, uma autenticação básica não deve ser usada para proteger informação sensível ou valiosa.
 * 
 * * MENSAGEM DE CODIGO DE STATUS DE RESPOSTA HTTP
 * 
 * * 401 NÃO AUTORIZADO
 * 
 * O 401 Unauthorizedcódigo de resposta de status de erro do cliente HTTP indica que a solicitação não foi aplicada porque não possui credenciais de autenticação válidas para o recurso de destino.
*/

/**
 * * EXEMPLO #1 EXEMPLO DE AUTENTICAÇÃO HTTP "BASIC" 
*/

//$_SERVER é um array contendo informação como cabeçalhos, paths, e localizações do script. As entradas neste array são criadas pelo servidor web.
//PHP_AUTH_USER' : Quando efetuando autenticação HTTP, esta variável estará definida com o username fornecido pelo usuário
//isset — Informa se a variável foi iniciada
//Retorna true se var existe; false caso contrário.

//se o nome de usuario existir, não executara essa condição
//se o nome de usuario não existir executara esta condição
if(!isset($_SERVER['PHP_AUTH_USER'])) {
    //informa para o cliente por meio do cabeçalho http, por meio do corpo do cabeçalho, uma mensagem de resposta para se autenticar por meio do HTTP Basic uma autenticação, do tipo Basica, em credenciais codificadas em base64
    header('WWW-Authenticate: Basic realm="My Realm"');
    //caso o usuario não seja cadastrado, ou suas credenciais são incorretas para solicitar o recurso, o servidor vai dar uma resposta por meio de um cabelho, dizendo que não esta autorizado para solicitar o recurso
    header('HTTP/1.0 401 Unauthorized');
    echo 'Texto enviado caso o usúario clique no botão Cancelar';
    exit;
}else{
    //nome de usuario existe
    //mostra o nome de usuario
    echo "<p>Olá, {$_SERVER['PHP_AUTH_USER']}.</p>";
    // 'PHP_AUTH_PW' : Quando efetuando autenticação HTTP, esta variável estará definida com a senha fornecida pelo usuário.
    echo "<p>Você digitou {$_SERVER['PHP_AUTH_PW']} como sua senha. </p>";

}
?>