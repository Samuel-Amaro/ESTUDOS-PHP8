<?php 

/**
 * * EXEMPLO #1 EXEMPLO DE AUTOLOAD
 * 
 *  Esse exemplo tenta carregar as classes MyClass1 e MyClass2 dos arquivos MyClass1.php e MyClass2.php respectivamente.
*/

//spl_autoload_register — Registra a função dada como implementação de __autoload()
//spl_autoload_register(callback $autoload_function = ?): bool

//o parametro e uma função anonima
spl_autoload_register(
    function($class_name) { //função anonima recebe nome da class
        include $class_name . '.php'; //inlcui um arquivo .php neste script
    }
);

//criar uma instancia de objeto da class
$obj = new MyClass1();
//criar uma instancia de objeto da class
$obj2 = new MyClass2();

?>