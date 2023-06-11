<?php

/**
 * *  Vinculação automática do $this
*/

class Test
{
    public function testing()
    {
        return function() {
            var_dump($this);
        };
    }
}

$object = new Test;
$function = $object->testing();
$function();

/**
 * Quando declarada no contexto de uma classe, a classe corrente é automaticamente vinculada a ela, tornando $this disponível dentro do escopo da função. Se essa vinculação automática da classe corrente não for o comportamento esperado, funções anônimas estáticas podem ser utilizadas. 
*/
?>