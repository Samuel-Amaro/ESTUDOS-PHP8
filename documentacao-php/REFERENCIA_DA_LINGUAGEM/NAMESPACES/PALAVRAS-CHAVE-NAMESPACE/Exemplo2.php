<?php

/**
 * * EXEMPLO #2 __NAMESPACE__ exemplo, codigo global 
*/

//usando a constante magica para ver o nome do atual namespace do script, como não ha nenhum namespace definido no script, e uma string vazia

try {  
        echo '"', __NAMESPACE__, '"';
} catch (Exception $t) {
    echo '"', __NAMESPACE__,'", nenhum namespace definido nesse script! ' . "{$t->getMessage()}" . ' </br>'; //saida ""
}

/**
 * A __NAMESPACE__constante é útil para construir nomes dinamicamente, por exemplo: 
*/


?>