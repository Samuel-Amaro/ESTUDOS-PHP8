<?php 

/**
 * * NAMESPACE E NOMES DE CLASSE
 * 
 *  Os namespaces e classes DEVEM seguir um PSR de "carregamento automático": [ PSR-0 , PSR-4 ].
 * 
 * Isso significa que cada classe está em um arquivo por si só e em um namespace de pelo menos um nível: um nome de fornecedor de nível superior.
 * 
 * Os nomes das classes DEVEM ser declarados em StudlyCaps.
 * 
 * Código escrito para PHP 5.3 e posterior DEVE usar namespaces formais.
*/

// PHP 5.3 e posterior:
//declarar um namespace de pelo menos um nivel com nome do fornecedor do nivel superior
namespace Vendor\Model;

class Foo{

}

/**
 * O código escrito para 5.2.x e anteriores DEVE usar a convenção de pseudo-namespacing de Vendor_prefixos em nomes de classe.
*/

//PHP 5.2.x e anterior:
class Vendor_Model_Foo{

}

?>