<?php 

/**
 * * $_POST
 * 
 *  $HTTP_POST_VARS [deprecated]
 * 
 * $_POST -- $HTTP_POST_VARS [deprecated] — HTTP POST variables
 * 
 * DESCRIÇÃO:
 * 
 * Um array associativo de variáveis passados para o script atual via método HTTP POST quando utilizado application/x-www-form-urlencoded ou multipart/form-data como valor do cabeçalho HTTP Content-Type na requisição.
 * 
 * $HTTP_POST_VARS contém a mesma informação inicial, mas não é uma superglobal. (Note que $HTTP_POST_VARS e $_POST são variáveis diferentes e que o PHP manuseia-as diferentemente)
 * 
 * EXEMPLO #1 EXEMPLO DA $_POST
 * 
*/
?>

<form action="" method="post">
    <input type="text" placeholder="Seu Nome" name="name">
    <input type="submit" value="Postar">
</form>

<?php 

echo "Ola " . htmlspecialchars($_POST["name"]) . "!";

/**
 * Assumindo que o usuário tenha postado name=alguma coisa 
*/

?>