<?php

/**
 * A seguir está um exemplo de um arquivo com declarações e efeitos colaterais; ou seja, um exemplo do que evitar:
*/

//efeito colateral: alterar as configurações do INI

ini_set('error_reporting', E_ALL);

//efeito colateral: carrega um arquivo
include "file.php";

//efeito colateral: gera saída
echo "<html> </br>";

//declaração
function foo() {
    //corpo função
}