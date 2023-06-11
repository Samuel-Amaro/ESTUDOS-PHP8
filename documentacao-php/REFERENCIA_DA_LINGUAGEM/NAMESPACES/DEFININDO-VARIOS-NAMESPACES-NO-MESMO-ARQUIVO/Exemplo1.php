<?php 

/**
 * * DEFININDO VÁRIOS NAMESPACES NO MESMO ARQUIVO
 * 
 *  Vários namespaces também podem ser declarados no mesmo arquivo. Existem duas sintaxes permitidas.
 * 
 * * EXEMPLO #1 DECLARANDO VÁRIOS NAMESPACES, SINTAXE DE COMBINAÇÃO SIMPLES
 * 
 * 
*/

//declaração de um namespace
namespace MyProject;

//definindo uma constante
const CONNECT_OK = 1;
//declarando uma class
class Connection{/** */}
//declarando uma função
function connect() {/** */}

//declaração de um outro namespace
namespace AnotherProject;

//definindo uma constante
const CONNECT_OK = 1;
//declarando uma class
class Connection{/** */}
//declarando uma função
function connect() {/** */}

/**
 * Esta sintaxe não é recomendada para combinar namespaces em um único arquivo. Em vez disso, é recomendável usar a sintaxe alternada entre colchetes. 
*/

?>