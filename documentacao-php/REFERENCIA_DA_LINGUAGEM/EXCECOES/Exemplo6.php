<?php 

/**
 * * EXEMPLO #6 MANIPULAÇÃO DE MÚLTIPLAS EXCEÇÕES NO MESMO BLOCO CACTH
 * 
 *  
*/

//declração da classe MyException que herda tudo de exception
class MyException extends Exception{

}

//declração da classe MyOtherException que herda tudo de exception
class MyOtherException extends Exception{

}

//declaração da class Test
class Test{
    //metodo publico da classe
    public function testing() {
        try {
            //lança uma instancia da class MyException
            throw new MyException();
            //captura mais de uma uma exceção se estiver especificada apos o pipe
        } catch (MyException | MyOtherException $e) {
            //mostra nome da classe ou objeto
            //mostra informações sobre variavel
            var_dump(get_class($e));
        }
    }
}

$foo = new Test;
$foo->testing();

?>