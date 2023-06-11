<?php 

/**
 * * ::class
 * 
 *  A palavra-chave class também pode ser utilizada para resolução de nome de classes. Pode-se obter o nome completo e qualificado da classe ClassName utilizando ClassName::class. Isso é particularmente útil em classes com namespaces.
 * 
 * * EXEMPLO #14 RESOLUÇÃO DE NOME DA CLASSE
 * 
 * 
*/

namespace NS{
    //definição de uma classe ClassName
    class ClassName{

    }
    echo ClassName::class;
}


?>