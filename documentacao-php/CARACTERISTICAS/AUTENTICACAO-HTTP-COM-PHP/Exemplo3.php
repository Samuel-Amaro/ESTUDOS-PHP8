<?php 

/**
 * * NOTA: Nota sobre compatibilidade
 * 
 * Por favor, seja cauteloso ao codificar as linhas do cabeçalho HTTP. Para garantir máxima compatibilidade com todos os clientes, a palavra-chave "Basic" deve ser escrita com um "B" maiúsculo, a string realm deve ser envolvida por aspas duplas (nunca por aspas simples), e apenas um espaço deve preceder o código 401 na linha do cabeçalho HTTP/1.0 401. Parâmetros de autenticação precisam ser separados por vírgula, como visto no exemplo acima de digest.
 * 
 * Ao invés de simplesmente exibir PHP_AUTH_USER e PHP_AUTH_PW, como no exemplo acima, talvez queira verificar a validade do nome de usuário e senha. Talvez enviando uma consulta a um banco de dados, ou procurando o usuário em um arquivo dbm.
 * 
 * Cuidado com browsers Internet Explorer bugados por aí. Eles parecem muito minuciosos sobre a ordem dos cabeçalhos. Enviar o cabeçalho WWW-Authenticate antes do cabeçalho HTTP/1.0 401 parece resolver isso por enquanto.
 * 
 * Nota: Nota de configuração PHP usa uma diretiva chamada AuthType para determinar se autenticação externa está em efeito.
 * 
 * Perceba, entretanto, que a diretiva citada acima não previne que alguém que controle uma URL não autenticada roube senhas de URLs autenticadas no mesmo servidor.
 * 
 * Tanto o Netscape Navigator quanto o Internet Explorer apagarão o cache de autenticação da janela local do browser para o realm após receber uma resposta 401 do servidor. Isso pode efetivamente "deslogar" um usuário, forçando o mesmo a re-entrar seu nome de usuário e senha. Algumas pessoas usam isso para delimitar o tempo de um login, ou prover um botão de "log-out".
 * 
 * * EXEMPLO #3 EXEMPLO DE AUTENTICAÇÃO HTTP FORÇANDO UM NOVO NOME/SENHA
 * 
 * 
*/

function authenticate() {
    //envia uma cabeçalho de resposta com um corpode mensagem para autenticação do cliente
    header('WWW-Authenticate: Basic realm="Teste de Autenticação Sistema"');
    //envia um cabeçalho com um codigo de resposta de não autorizado
    header('HTPP/1.0 401 Unauthorized');
    echo "Você deve digitar um login e senha válidos para acessar este recurso </br>";
    exit;
}

//$_SERVER é um array contendo informação como cabeçalhos, paths, e localizações do script. As entradas neste array são criadas pelo servidor web.
//PHP_AUTH_USER' : Quando efetuando autenticação HTTP, esta variável estará definida com o username fornecido pelo usuário
//isset — Informa se a variável foi iniciada
//Retorna true se var existe; false caso contrário.

//se o nome de usuario existir, não executara essa condição
//se o nome de usuario não existir executara esta condição
//se o nome de usuario não existir ou o cliente tenha postado o paramentro no servidor que possua o valor 1 e tenha postado o nome de usuario no servidor por meio do metodo POST, usuario tem que se autenticar
if(!isset($_SERVER['PHP_AUTH_USER']) || ($_POST['SeenBefore'] == 1 && $_POST['OldAuth'] == $_SERVER['PHP_AUTH_USER'])) {
    authenticate();
}else{
    echo "<p>Bem-Vindo: " . htmlspecialchars($_SERVER['PHP_AUTH_USER']) . "<br/>";
    echo "Antigo: " . htmlspecialchars($_REQUEST['OldAuth']);
    echo "<form action='' method='post'> </br>";
    echo "<input type='hidden' name='SeenBefore' value='1'/> <br/>";
    echo "
    <input type='hidden' name='OldAuth' value=\"" . htmlspecialchars($_SERVER['PHP_AUTH_USER']) . "\" /> <\br>";
    echo "<input type='submit' value='Re-autenticar' /> <br/>";
    echo "</form></p><br/>";
}


/**
 * Este comportamento não é requerido pelo padrão de autenticação HTTP Basic, então nunca se deve depender dele. Testes com Lynx tem mostrado que Lynx não apaga as credenciais de autenticação com uma resposta 401 do servidor, assim, ao pressionar "Voltar" e então "Ir" novamente abrirá o recurso contanto que os requerimento de credenciais não tenha mudado. Contudo, o usuário pode pressionar a tecla '_' para apagar suas informações de autenticação. 
 * 
 * Para fazer com que a autenticação HTTP funcione utilizando um servidor IIS com a versão CGI do PHP é necessário editar a configuração "Directory Security" do IIS. Clique em "Edit" e marque somente "Anonymous Access", deixe todos os outros campos desmarcados.
*/
?>