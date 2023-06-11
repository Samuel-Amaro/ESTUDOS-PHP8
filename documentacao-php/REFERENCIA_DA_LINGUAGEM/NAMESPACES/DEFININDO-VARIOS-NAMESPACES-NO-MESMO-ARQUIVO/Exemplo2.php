<?php

/**
 * * EXEMPLO #2 DECLARANDO VÁRIOS NAMESPACES, SINTAXE ENTRE COLCHETES 
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

//declaração de um outro namespace
namespace AnotherProject{

    //definindo uma constante
    const CONNECT_OK = 1;
    //declarando uma class
    class Connection{/** */}
    //declarando uma função
    function connect() {/** */}
}

/**
 * É altamente desencorajado como prática de codificação combinar vários namespaces no mesmo arquivo. O principal caso de uso é combinar vários scripts PHP no mesmo arquivo.
 * 
 *  Para combinar código global sem espaço de nomes com código com espaço de nomes, apenas a sintaxe entre colchetes é suportada. O código global deve ser encerrado em uma instrução de namespace sem nenhum nome de namespace, como em:
*/

?>