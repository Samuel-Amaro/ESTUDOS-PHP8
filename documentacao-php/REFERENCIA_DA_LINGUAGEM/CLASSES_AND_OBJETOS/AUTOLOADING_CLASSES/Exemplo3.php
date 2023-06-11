<?php 

/**
 * * EXEMPLO #3 AUTOLOAD COM MANIPULAÇÃO DE EXCEÇÕES NO PHP 5.3.0
 * 
 *  Este exemplo lançará uma exceção e demonstrará o bloco try/catch.
*/

//spl_autoload_register — Registra a função dada como implementação de __autoload()
//spl_autoload_register(callback $autoload_function = ?): bool

//o parametro e uma função anonima
spl_autoload_register(
    function($name) { //função anonima recebe parametro nome
        echo "Want to load $name .\n";
        throw new Exception("Unable to load $name.");
    }
);

try{
    $obj = new NonLoadableClass();
}cath(Exception $e){
    echo $e->getMessage(), "\n";
}
?>