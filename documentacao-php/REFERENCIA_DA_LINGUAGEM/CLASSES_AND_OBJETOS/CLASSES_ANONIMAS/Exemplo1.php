<?php 

/**
 * * CLASSES ANÔNIMAS
 * 
 *  O suporte a classes anônimas foi adicionado no PHP 7. Classes anônimas são úteis quando objetos descartáveis precisarem ser criados.
 * 
 * 
*/

// Código Pré PHP 7

//definição da classe Logger
class Logger{
    //metodo da classe publico, com um paramentro obrigatorio
    public function log($msg) {
        echo $msg;
    }
}

$util->setLogger(new Logger());

//codigo PHP 7 ou superior 

$util->setLogger(
    //definição da classe anonima
    new class{
        //metodo publico que pertence a classe anonima
        public function log($msg) {
            echo $msg;
        }
    }
);


?>