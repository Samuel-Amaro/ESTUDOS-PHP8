<?php 

/**
 * * AUTENTICAÇÃO HTTP COM PHP
 * 
 *  Pode-se utilizar a função header() para enviar uma mensagem de "Authentication Required" para o browser cliente, causando o aparecimento de uma janela para a entrada de Nome de Usuário/Senha. Uma vez que o usuário preencha um nome de usuário e uma senha, a URL contendo o script PHP será chamada mais uma vez com as variáveis predefinidas PHP_AUTH_USER, PHP_AUTH_PW, e AUTH_TYPE para determinar o nome de usuário, senha e tipo da autenticação, respectivamente. Estas variáveis predefinidas são encontradas nos arrays $_SERVER. Ambos os métodos de autenticação "Basic" e "Digest" (a partir do PHP 5.1.0) são suportados.
 * 
 * Um exemplo de fragmento de script que forçaria a autenticação do cliente em uma página:
*/

?>