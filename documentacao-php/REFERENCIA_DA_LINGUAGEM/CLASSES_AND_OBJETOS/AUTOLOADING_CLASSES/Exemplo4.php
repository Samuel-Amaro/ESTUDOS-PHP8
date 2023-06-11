<?php 

/**
 * * EXEMPLO #4 AUTOLOAD COM MANIPULAÇÃO DE EXCEÇÕES NO PHP 5.3.0 +- FALTANDO EXCEÇÃO CUSTOMIZADA.
 * 
 *  Este exemplo dispara uma exceção para uma exceção customizada não carregável.
*/

spl_autoload_register(
     function($name) {
        echo "Want to load $name . \n";
        throw new MissingException("Unable to load $name.");
     }   
);

try {
    $obj = new NonLoadableClass();
} catch(Exception $e) {
    echo $e->getMessage(), "\n";
}
?>