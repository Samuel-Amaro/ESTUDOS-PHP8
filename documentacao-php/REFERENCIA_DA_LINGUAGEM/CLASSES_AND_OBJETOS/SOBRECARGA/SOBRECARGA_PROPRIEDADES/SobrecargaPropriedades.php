<?php 

/*
* * SOBRECARGA DE PROPRIEDADES

    public __set(string $name, mixed $value): void
    __set() é executado ao escrever dados em propriedades inacessíveis.

    public __get(string $name): mixed
    __get() é utilizado para ler dados de propriedades inacessíveis.

    public __isset(string $name): bool
    __isset() é disparado ao chamar a função isset() ou empty() em propriedades inacessíveis.

    public __unset(string $name): void
    é invocado ao usar o construtor unset() em propriedades inacessíveis.

    
 * 
 * O argumento $name é o nome da propriedade com o qual se está interagindo. O argumento $value do método __set() especifica o valor para o qual a propriedade $name deveria ser definida.
 * 
 * A sobrecarga de propriedades funciona somente no contexto de objeto. Estes métodos mágicos não são disparados em contexto estático. Portanto estes métodos não podem ser declarados como static. A partir do PHP 5.3.0, um aviso é emitido se algum método mágico de sobrecarga é declarado como static.
*/




?>