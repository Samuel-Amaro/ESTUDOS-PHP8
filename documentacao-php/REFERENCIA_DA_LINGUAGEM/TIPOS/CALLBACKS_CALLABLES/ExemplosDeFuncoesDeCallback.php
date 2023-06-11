<?php 

/**
 * Exemplo #1 de funções de callback 
*/

//exemplo de função de callback
function my_callback_function() {
    echo 'hello word!';
}

//exemplo de método de callback
class MyClass{
    static function myCallbakMethod() {
        echo 'Hello Word!';
    }
}

//Tipo 1: Calback simples
call_user_func('my_callback_function');

//Tipo 2: chamada á métodos estáticos
call_user_func('MyClass', 'myCallbackMethod');

//Tipo 3: chamada á métodos de objetos
$obj = new MyClass();
call_user_func(array($obj, 'myCallbackMethod'));

// Tipo 4: Chamada à métodos estáticos (a partir do PHP 5.2.3)
call_user_func('MyClass::myCallbackMethod');

// Tipo 5: Chamada relativa à métodos estáticos (a partir do PHP 5.3.0)
class A {
    public static function who() {
        echo "A\n";
    }
}

class B extends A {
    public static function who() {
        echo "B\n";
    }
}

call_user_func(array('B', 'parent::who')); // A
// Type 6: Objetos que implementam __invoke podem ser utilizados como callables (desde o PHP 5.3)

class C {
    public function __invoke($name) {
        echo 'Hello ', $name, "\n";
    }
}

$c = new C();
call_user_func($c, 'PHP!');

?>