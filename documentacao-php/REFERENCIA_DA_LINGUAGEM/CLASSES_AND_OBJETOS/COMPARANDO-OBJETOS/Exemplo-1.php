<?php

/**
 * EXEMPLO #1 EXEMPLO DE COMPARAÇÃO DE OBJETOS NO PHP 5
 *  
*/

function bool2str($bool) {
    if($bool === false) {
        return 'FALSO';
    }else{
        return 'VERDADEIRO';
    }
}

//paramentros da função necessitam de que os paramentros sejam passados por referencia e não por copia, os paramentros vão ser por refencia e não por copia
function compareObjects(&$o1, &$o2) {

    echo 'o1 == o2 : ' . bool2str($o1 == $o2) . "</br>";
    echo 'o1 != o2 : ' . bool2str($o1 != $o2) . "</br>";
    echo 'o1 === o2 : ' . bool2str($o1 === $o2) . "</br>";
    echo 'o1 !== o2 : ' . bool2str($o1 !== $o2) . "</br>";
}

//definição da classe
class Flag{
    //propriedade publica da classe
    public $flag;
    //metodo da classe
    function Flag($flag = true) {
        $this->flag = $flag;
    }
}

//definição da classe
class OtherFlag{
    //propriedade publica da classe
    public $flag;
    //metodo da classe
    function OtherFlag($flag = true) {
        $this->flag = $flag;
    }
}

# cria instancias de objetos da classe
$o = new Flag();
$p = new Flag();
$q = $o;
$r = new OtherFlag();

echo "Duas instâncias da mesma Classe </br>";
compareObjects($o, $p);

echo "</br> Duas referências para a mesma instância </br>";
compareObjects($o, $q);

echo "</br> Instâncias de duas classes diferentes </br>";
compareObjects($o, $r);

/**
 * Nota: Extensões podem definir suas próprias regras para comparar de objetos (==). 
*/

?>