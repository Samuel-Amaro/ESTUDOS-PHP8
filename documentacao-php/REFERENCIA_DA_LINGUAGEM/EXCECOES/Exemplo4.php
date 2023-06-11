<?php 

/**
 * * EXEMPLO #4 MANIPULAÇÃO DE EXCEÇÕES COM BLOCO FINALLY
 * 
 *  
*/

function inverse($x) {
    if(!$x) {
        //Exception é a classe base para todas Exceptions no PHP 5, e a classe base de todas as exceções de usuário no PHP 7.
        //lança uma nova instancia da class Exception
        throw new Exception('Divisão por zero.');
    }
    return 1/$x;
}

try {
    echo inverse(5) . "</br>";
} catch (Exception $e) {
    echo 'Exceção capturada: ', $e->getMessage(), "</br>";
}finally{
    echo "Primeiro finaly. </br>";
}

try {
    //lança exceção
    echo inverse(0) . "</br>";
} catch (Exception $e) {
    echo 'Exceção capturada: ', $e->getMessage(), "</br>";
}finally{
    echo "Segundo finally. </br>";
}

//Excecução continua
echo "Olá mundo </br>";

?>