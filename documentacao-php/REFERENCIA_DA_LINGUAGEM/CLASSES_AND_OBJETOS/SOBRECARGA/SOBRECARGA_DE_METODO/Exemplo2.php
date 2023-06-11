<?php 

/**
 * * #2 SOBRECARGA DE MÉTODOS INSTANCIADOS COM __call() e __callStatic()
 * 
 * 
 */


//definição da classe
class MethodTest{

    /**
     * Metodo da classe
     * 
     * é disparado ao invocar métodos inacessíveis em um contexto de objeto.
     * 
     * O argumento $name é o nome do método sendo chamado. O argumento $arguments é um array enumerado contendo os parâmetros passados para o método $name.
    */
    public function __call($name, $arguments) {
        //metodo string.impode() Junte os elementos da array com uma string
        echo "Método de chamada de objeto '$name' " . implode(', ', $arguments) . "</br>";
    }

    /**
     * A PARTIR DO PHP 5.3.0
     * 
     * __callStatic() é disparado quando invocando métodos inacessíveis em um contexto estático.
     * 
     * O argumento $name é o nome do método sendo chamado. O argumento $arguments é um array enumerado contendo os parâmetros passados para o método $name.
    */
    public static function __callStatic($name, $arguments) {
        //Nota: o valor de $ name faz distinção entre maiúsculas e minúsculas.
        echo "Chamando método estático '$name' " . implode(', ', $arguments) . "</br>";
    }
}

//instancia um novo objeto da class
$obj = new MethodTest;

//chama um metodo que não e definido na classe
//isso faz chamar a função __call()
//que e disparada quando chama metodos inacessiveis no contexto da intancia do objeto criado
$obj->runTest('no contexto do objeto');


//A Partir do PHP 5.3.0
//tenta chamar o metodo num contexto statico, por meio do nome da classe, junto com o operador ::
//isso vai chamar o metodo 
//__callStatic() que e invocando quando tentar acessar um metodo inacessivel num contexto estatico
MethodTest::runTest('no contexto statico'); 


?>