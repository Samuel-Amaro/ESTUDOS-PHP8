<?php

/**
 * * LIMPE E VALIDE UM ENDEREÇO DE E-MAIL
 * 
 *  O exemplo a seguir usa a filter_var()função para primeiro remover todos os caracteres ilegais da variável $ email e, em seguida, verifique se é um endereço de e-mail válido:
*/

//$email = "john.doe@example.com";
$email = "manoel@fazendinha.com";
//Remova todos os caracteres ilegais do e-mail
//FILTER_SANITIZE_EMAIL: Remove todos caracteres exceto letras, dígitos e !#$%&'*+-/=?^_`{|}~@.[].

$email = filter_var($email, FILTER_SANITIZE_EMAIL);

//validar endereço de email
//FILTER_VALIDATE_EMAIL: Valida o valor como e-mail.
if(!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
    echo "$email é um endereço de email válido! </br>";
}else{
    echo "$email não é um endereço de email válido </br>";
}

?>