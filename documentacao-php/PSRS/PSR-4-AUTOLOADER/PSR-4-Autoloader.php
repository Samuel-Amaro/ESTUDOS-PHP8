<?php

/**
 * * PSR-4: AUTOLOADER(CARREGAMENTO AUTOMATICO)
 * 
 * * VISÃO GERAL:
 * 
 * Este PSR descreve uma especificação para classes de carregamento automático a partir de caminhos de arquivo. É totalmente interoperável e pode ser usado em adição a qualquer outra especificação de carregamento automático, incluindo PSR-0 . Este PSR também descreve onde colocar os arquivos que serão carregados automaticamente de acordo com a especificação.
 * 
 * * ESPECIFICAÇÃO:
 * 
 * O termo "classe" refere-se a classes, interfaces, características e outras estruturas semelhantes.
 * 
 * Um nome de classe totalmente qualificado tem o seguinte formato:
 
    \<Nomenamespace>(|<NomesSubNamespace>)*\<NomeClass>

 
    1. O nome de classe totalmente qualificado DEVE ter um nome de namespace de nível superior, também conhecido como "namespace do fornecedor".
    
    2. O nome de classe totalmente qualificado PODE ter um ou mais nomes de sub-namespace.

    3. O nome de classe totalmente qualificado DEVE ter um nome de classe final.

    4. Os sublinhados não têm nenhum significado especial em qualquer parte do nome totalmente qualificado da classe.
 
    5. Os caracteres alfabéticos no nome de classe totalmente qualificado PODEM ser qualquer combinação de letras minúsculas e maiúsculas.

    6. Todos os nomes de classes DEVEM ser referenciados diferenciando maiúsculas de minúsculas.
 
 * Ao carregar um arquivo que corresponde a um nome de classe totalmente qualificado...
 
    1. Uma série contígua de um ou mais nomes de namespace e sub-namespace principais, sem incluir o separador de namespace principal, no nome de classe totalmente qualificado (um "prefixo de namespace") corresponde a pelo menos um "diretório base".

    2. Os nomes de sub-namespace contíguos após o "prefixo de namespace" correspondem a um subdiretório dentro de um "diretório base", no qual os separadores de namespace representam separadores de diretório. O nome do subdiretório DEVE corresponder às maiúsculas e minúsculas dos nomes de sub-namespace

    3. O nome da classe final corresponde a um nome de arquivo que termina em .php. O nome do arquivo DEVE corresponder ao caso do nome da classe final.

 * 
 * As implementações do Autoloader NÃO DEVEM lançar exceções, NÃO DEVEM gerar erros de nenhum nível e NÃO DEVEM retornar um valor.
 * 
 * * EXEMPLOS
 * 
 * A tabela a seguir mostra o caminho do arquivo correspondente para um determinado nome de classe totalmente qualificado, prefixo de namespace e diretório base.

 nome de classe totalmente qualificado: \Acme\Log\Writer\File_Writer

 prefixo de namespace: Acme\Log\Writer

 diretorio base: ./acme-log-writer/lib/

 caminho de arquivo resultante: ./acme-log-writer/lib/File_Writer.php

 ---------------------------------------

 nome de classe totalmente qualificado: \Aura\Web\Response\Status

 prefixo de namespace: Aura\Web

 diretorio base: /path/to/aura-web-src

 caminho de arquivo resultante: /path/to/aura-web/src/Response/Status.php

 -----------------------------------------

 nome de classe totalmente qualificado: \Symfony\Core\Request

 prefixo de namespace: Symfony\Core

 diretorio base: ./vendor/Symfony/Core

 caminho de arquivo resultante: ./vendor/Symfony/Core/Request.php

 -------------------------------------------

 nome de classe totalmente qualificado: \Zend\Acl

 prefixo de namespace: Zend

 diretorio base: /usr/includes/Zend

 caminho de arquivo resultante: /usr/includes/Zend/Acl.php

 * 
 * Por exemplo, implementações de autoloaders em conformidade com a especificação, consulte o arquivo de exemplos . Implementações de exemplo NÃO DEVEM ser consideradas como parte da especificação e PODEM ser alteradas a qualquer momento.
*/