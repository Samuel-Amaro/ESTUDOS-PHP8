<?php 

include("Classe.php");

$a = new A;

//serialize - Gera uma representação armazenável de um valor
//serialize(mixed $value): string
//Gera uma representação armazenável de um valor.
//Isso é útil para armazenar ou passar valores PHP sem perder seu tipo e estrutura.
//value : O valor a ser serializado. serialize () lida com todos os tipos, exceto o resource -type e alguns objetos s
//Ao serializar objetos, o PHP tentará chamar as funções de membro __serialize () ou __sleep () antes da serialização. Isso permite que o objeto faça qualquer limpeza de última hora, etc., antes de ser serializado. Da mesma forma, quando o objeto é restaurado usando unserialize (), a função de membro __unserialize () ou __wakeup () é chamada.
//Valor Retornado : Retorna uma string contendo uma representação de fluxo de bytes value que pode ser armazenada em qualquer lugar.
//Observe que esta é uma string binária que pode incluir bytes nulos e precisa ser armazenada e tratada como tal. Por exemplo, a saída serialize () geralmente deve ser armazenada em um campo BLOB em um banco de dados, ao invés de um campo CHAR ou TEXT.

$s = serialize($a);

//Write data to a file
//file_put_contents( string $filename , mixed $data [, int $flags = 0 [, resource $context ]]): int
//Grave dados em um arquivo
//Escreve uma string para um arquivo
//Se filename não existir, o arquivo é criado. Do contrário, o arquivo existente é sobrescrito, a não ser que a flag FILE_APPEND seja definida.
//filename : O caminho para o arquivo onde escrever os dados.
//data : Os dados a serem escritos. Pode ser uma string, um array ou um recurso stream (explicado abaixo).
//Valor Retornado : A função retorna a quantidade de bytes que foi escrita no arquivo ou false em caso de falha.

//armazene $ s em algum lugar onde page2.php possa encontrá-lo.
file_put_contents('store', $s);

?>