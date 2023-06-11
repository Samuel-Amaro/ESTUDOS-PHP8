<?php 

/**
 * * __invoke()
 * 
 *  __invoke( $... = ?): mixed
 * 
 * O método __invoke() é chamado quando um script tenta chamar um objeto como uma função.
 * 
 * Exemplo #4 Usando __invoke()
*/

//definição da classe
class CallableClass{

    //metodo magico __invoke definido e associado a classe, e chamado quando um script tenta chamar um objeto como funcao
    public function __invoke($x) {
        //mostra informações sobre a variavel
        var_dump($x);
    }
}

//cria uma instancia de objeto da class
$obj = new CallableClass;

# tentando chamar o obj como uma função
$obj(5); //int(5)

//function is_callable ($var, $syntax_only = null, &$callable_name = null) {}
//Verifique se o conteúdo de uma variável pode ser chamado como uma função
//is_callable( mixed $var [, bool $syntax_only [, string $callable_name ]]): bool

var_dump(is_callable($obj)); //bool(true)

?>