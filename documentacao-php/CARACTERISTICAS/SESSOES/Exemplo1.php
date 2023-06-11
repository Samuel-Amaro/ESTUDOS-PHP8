<?php

/**
 * * EXEMPLO #1 REGISTRANDO UMA VARIÁVEL COM $_SESSION
 *  
*/

#  Inicia uma nova sessão ou resume uma sessão existente
# session_start(array $options = []): bool
# session_start() cria uma sessão ou resume a sessão atual baseado em um id de sessão passado via GET ou POST, ou passado via cookie.
# Para utilizar uma sessão com nome, execute session_name() antes de executar session_start().
# Esta função retorna true se uma sessão foi iniciada com sucesso, caso contrário false.
session_start();

//$_SESSION
//Um array associativo contendo variáveis de sessão disponíveis para o atual script.

//caso a variavel count não exista dentro da seção
if(!isset($_SESSION['count'])) {
    //armazena um dado individual para o usuario que esta navegando, por meio dessa variavel
    $_SESSION['count'] = 0;
}else{
    //se a variavel count ja existe dentro da seção
    $_SESSION['count']++;
    echo "Você acessou pela {$_SESSION['count']}ª Vez nosso site! </br>";
}


?>