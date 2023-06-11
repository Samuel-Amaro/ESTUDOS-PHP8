<?php 

/**
 * * EXEMPLO #3 setcookie() e arrays
 * 
 *  Você pode também enviar cookies de array, utilizando a notação de array no nome dele. Isso tem o efeito de enviar tantos cookies quantos elementos houverem no array, mas quando o cookie for recebido todos os valores serão colocados em um array com o nome do cookie:
*/

//envia os cookies
setcookie("cookie[tres]", "cookietres");
setcookie("cookie[dois]", "cookiedois");
setcookie("cookie[um]", "cookieum");

//depois que a página recarregar, mostra eles
if(isset($_COOKIE['cookie'])) {
    foreach($_COOKIE['cookie'] as $nome => $valor) {
        $nome = htmlspecialchars($nome);
        $valor = htmlspecialchars($valor);
        echo "<p><b>$nome</b> : $valor </p>";
    }
}


?>