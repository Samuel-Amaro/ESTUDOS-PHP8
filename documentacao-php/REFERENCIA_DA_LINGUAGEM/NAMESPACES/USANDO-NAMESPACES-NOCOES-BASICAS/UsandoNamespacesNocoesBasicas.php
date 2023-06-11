<?php

/**
 * * USANDO NAMESPACES: NOÇÕES BÁSICAS
 * 
 *  Antes de discutir o uso de namespaces, é importante entender como o PHP sabe qual elemento com namespaces seu código está solicitando. Uma analogia simples pode ser feita entre namespaces PHP e um sistema de arquivos. Existem três maneiras de acessar um arquivo em um sistema de arquivos:
 * 
 
    1. Nome de arquivo relativo como foo.txt. Isso determina currentdirectory/foo.txt onde currentdirectory é o diretório atualmente ocupado. Portanto, se o diretório atual for /home/foo, o nome será resolvido para /home/foo/foo.txt.

    2. Nome do caminho relativo, como subdirectory/foo.txt. Isso resolve currentdirectory/subdirectory/foo.txt.

    3.Como o nome do caminho absoluto /main/foo.txt. Isso resolve para /main/foo.txt.

 * 
 * O mesmo princípio pode ser aplicado a elementos com namespace em PHP. Por exemplo, um nome de classe pode ser referido de três maneiras:
 * 
 
    1. Nome não qualificado ou um nome de classe sem prefixo, como $a = new foo(); ou foo::staticmethod();. Se o namespace atual for currentnamespace, isso resolverá para currentnamespace\foo. Se o código for global, sem espaço de nomes(NAMESPACES), será resolvido para foo. Uma advertência: nomes não qualificados para funções e constantes serão resolvidos para funções e constantes globais se a função com espaço de nomes(NAMESPACE) ou constante não for definida. Consulte Usando namespaces: fallback para função / constante global para obter detalhes.

    2. Nome qualificado ou um nome de classe com prefixo como $a = new subnamespace\foo(); ou subnamespace\foo::staticmethod();. Se o namespace atual for currentnamespace, isso resolverá para currentnamespace\subnamespace\foo. Se o código for global, sem espaço de nomes(NAMESPACE), será resolvido para subnamespace\foo.

    3. Nome totalmente qualificado ou um nome prefixado com operador de prefixo global como $a = new \currentnamespace\foo();ou \currentnamespace\foo::staticmethod();. Isso sempre é resolvido para o nome literal especificado no código currentnamespace\foo,.

 * Aqui está um exemplo dos três tipos de sintaxe no código real:
 * 
*/


?>