<?php

/**
 * * EXEMPLO #3 DECLARANDO MÚLTIPLOS NAMESPACES E CÓDIGO SEM NAMESPACE
 *  
*/

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

/**
 * Nenhum código PHP pode existir fora dos colchetes do namespace, exceto para uma instrução de declaração de abertura.
*/


?>