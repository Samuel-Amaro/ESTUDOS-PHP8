<?php

/**
 * * PASSSANDO O ID DE SESSÃO
 * 
 *  Existem dois métodos para a propagação do id de sessão:

  - Cookies

  - URL parameter

 * 
 * O módulo de sessão suporta ambos os métodos. Cookies são melhores, mas como nem sempre eles estão disponíveis, também é oferecido um método alternativo. O segundo método embute o id de sessão diretamente nas URLs.
 * 
 * O PHP é capaz de transformar os links transparentemente. A menos que você esteja usando o PHP 4.2.0 ou posterior, é necessário ativar manualmente ao compilar o PHP. Em ambiente Unix, passe --enable-trans-sid para o configure. Se esta opção de compilação e a opção em tempo de execução session.use_trans_sid estiverem ativadas, URIs relativas serão modificadas para conter o id de sessão automaticamente.
 * 
 * Nota: O arg_separator.output, diretiva php.ini, permite configurar o separador de argumentos. Para completa conformidade com XHTML, especifique &amp; aqui.
 * 
 * Alternativamente, pode ser usada a constante SID, a qual é definida se uma sessão é iniciada. Se o cliente não enviou um cookie de sessão apropriado, a constante terá o formato session_name=session_id. Se não, ela será uma string vazia. Dessa forma, ela pode ser colocada incondicionalmente em URLs.
 * 
 * O exemplo a seguir demonstra como registrar uma variável e como criar um link corretamente para outra página usando o SID.
*/

//inicia uma sessão ou obtem o resumo de uma sessão ativa, anteriormente
session_start();

//se o seguinte dado, informação do usuario existir na sessão
if(empty($_SESSION['count'])) {
    $_SESSION['count'] = 1;
}else{
    $_SESSION['count']++;
}
?>

<p>Olá visitante, você acessou esta página <?php echo $_SESSION['count'];?> vezes.</p>

<!--htmlspecialchars — Converte caracteres especiais para a realidade HTML
SID (string)
Constante contendo nome da sessão e id da sessão na forma de "name=ID" ou string vazia se o ID da sessão foi definido em um apropriado cookie de sessão. Este é o mesmo id que é retornado por session_id().
-->
<p>Para continuar, <a href="Exemplo1.php?<?php echo htmlspecialchars(SID); ?>">Clique Aqui!</a>.</p>