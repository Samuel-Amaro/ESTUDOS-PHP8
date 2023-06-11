<?php 

/**
 * * EXEMPLO #3 LANÇANDO UMA EXCEÇÃO
 * 
 *  
*/

function inverse($x) {
    if(!$x) {
        //Exception é a classe base para todas Exceptions no PHP 5, e a classe base de todas as exceções de usuário no PHP 7.
        //lança uma exceção
        throw new Exception('Divisão por zero.');
    }
    return 1/$x;
}

try {
    echo inverse(5) . "</br>";
    //essa chamada lançara a exceção
    echo inverse(0) . "</br>";
} catch (Exception $e) {
    echo 'Exceção capturada: ', $e->getMessage(), "</br>";
}

//Execução continua
echo "Olá mundo! </br>";

?>