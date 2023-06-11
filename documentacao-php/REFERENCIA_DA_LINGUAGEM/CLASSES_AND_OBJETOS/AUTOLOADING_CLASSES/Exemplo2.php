<?php 

/**
 * * EXEMPLO #2 OUTRO EXEMPLO DE AUTOLOAD
 * 
 *  Este exemplo tenta carregar a interface ITest.
*/

//spl_autoload_register — Registra a função dada como implementação de __autoload()
//spl_autoload_register(callback $autoload_function = ?): bool

//o parametro e uma função anonima
spl_autoload_register(
    function($name) { //função anonima recebe um parametro chamada nome
        var_dump($name); //mostra informações sobre o parametro $name
    }
);

//definição da classe Foo que implementa a interface ITest
class Foo implements ITest{

}

/*
 String(5) "ITest"

 Erro Fatal: Interface 'ITest' não encontrado em ...
*/
?>