<?php 

/**
 * A partir do PHP 8.0.0, a constante ::class também pode ser utilizada em objetos. Essa resolução acontece em tempo de execução, e não em tempo de compilação. O efeito é o mesmo de chamar get_class() em um objeto.
 * 
 * * EXEMPLO #16 RESOLUÇÃO DE NOME DE OBJETO
 * 
 * 
*/

namespace NS{
    //definição de uma classe ClassName
    class ClassName{

    }
}

//instanciando um objeto que e do tipo ClassName
$c = new ClassName();
print $c::class;

?>