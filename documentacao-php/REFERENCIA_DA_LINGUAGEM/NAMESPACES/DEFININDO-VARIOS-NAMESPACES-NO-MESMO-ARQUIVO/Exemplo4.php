<?php 

/**
 * * EXEMPLO #4 DECLARANDO MÚLTIPLOS NAMESPACES E CÓDIGO SEM NAMESPACE 
 * 
*/

declare(encoding='UTF-8');

//declaração de um namespace
namespace MyProject{

    //definindo uma constante
    const CONNECT_OK = 1;
    //declarando uma class
    class Connection{/** */}
    //declarando uma função
    function connect() {/** */}

}

namespace { //codigo global
    session_start();
    $a = MyProject\connect();
    echo MyProject\Connection::start();

}

?>