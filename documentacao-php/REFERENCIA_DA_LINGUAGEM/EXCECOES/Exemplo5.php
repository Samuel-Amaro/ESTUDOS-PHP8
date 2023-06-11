<?php 

/**
 * * EXEMPLO #5 EXCEÇÕES EMPILHADAS
*/


//declração da classe MyException que herda tudo de exception
class MyException extends Exception{

}

//declaração da class Test
class Test{
    //declaração de um metodo da classe
    public function testing() {
        try {
            try {
                //lança uma instancia de exception
                throw new MyException('foo!');
            } catch (MyException $e) {
                //rethrow it
                //relança a exceção
                throw $e;
            }
        } catch (Exception $e) {
               var_dump($e->getMessage()); 
        }
    }
}

$foo = new Test;
$foo->testing();




?>