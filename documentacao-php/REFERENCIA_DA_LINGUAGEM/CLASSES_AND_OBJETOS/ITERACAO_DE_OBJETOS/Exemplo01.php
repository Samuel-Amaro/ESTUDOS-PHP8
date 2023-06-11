<?php 

/**
 * * ITERAÇÃO DE OBJETOS
 * 
 *  O PHP 5 fornece uma maneira de definir objetos para que seja possível iterar por uma lista de items, como, por exemplo, a instrução foreach. Por padrão, todas as propriedades visíveis serão utilizadas para a iteração.
 * 
 * * EXEMPLO #1 ITERAÇÃO SIMPLES DE OBJETOS
 * 
 * 
*/

//definição de classe
class MyClass {
    //propriedades da classe com visibilidade publica
    public $var1 = 'value 1';
    public $var2 = 'value 2';
    public $var3 = 'value 3';

    //propriedades da classe com visibilidade protegida, somente, a classe declarante e herdeiras podem acessar
    protected $protected = 'protected var';
    
    //propriedade da classe com visibilidade privada, somente classe declarante acessa
    private $private = 'private var';

    /**
     * essa função mostra a iteração sobre as propriedades do objeto com qualquer visibilidade definida, esta dentro do contexto do obejeto 
    */
    function iterateVisible() {
        echo "MyClass::iterateVisible: </br>";
        //O $this referencia o objeto atual, e suas propriedades, com qualquer tipo de visibilidade
        foreach($this as $key => $value) {
            print "$key => $value </br>";
        }
    }
}

//cria um instancia de objeto da class
$class = new MyClass();

//itera sobre as propriedades da classe, que são visiveis
foreach($class as $key => $value) {
    print "$key => $value </br>";
}

/**
 * Como a saída mostra, o foreach passou por cada uma das variáveis visíveis que podem ser acessadas. 
*/

echo "</br>";

//chama o metodo da classe por meio da instancia
$class->iterateVisible();


?>