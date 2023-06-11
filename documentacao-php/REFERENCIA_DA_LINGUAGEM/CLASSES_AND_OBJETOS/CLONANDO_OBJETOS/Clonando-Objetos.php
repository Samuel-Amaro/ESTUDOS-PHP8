<?php

/**
 * * CLONANDO OBJETOS
 * 
 *  Criar uma cópia de um objeto com propriedades totalmente replicadas nem sempre é o comportamento desejado. Um bom exemplo da necessidade para cópia de construtores, e quando possuir um objeto que representa uma janela do GTK e o objeto guarda o recurso dessa janela GTK. ao criar uma duplicata, pode-se desejar a criação de uma nova janela com as mesmas propriedades e fazer o novo objeto guardar o recurso da nova janela. Outro exemplo é se seu objeto guarda uma referência a outro objeto que usa e ao replicar o objeto pai, deseja-se que seja criada uma nova instância desse outro objeto para que a réplica tenha sua própria cópia separada.
 * 
 * Uma cópia de objeto é criada usando a palavra-chave clone (que, se possível, chama o método __clone() do objeto). O método __clone() de um objeto não pode ser chamado diretamente.
 * 
 * $copia_do_objeto = clone $objeto;
 * 
 * Ao se clonar um objeto, o PHP 5 fará uma cópia superficial de todas as propriedades do objeto. Qualquer propriedade que seja referência a outra variável, permanecerá como referência.
 * 
 * __clone(): void
 * 
 * Depois que a clonagem se completa, se um método __clone() estiver definido, o objeto recém criado terá seu método __clone() chamado, permitindo que qualquer propriedade seja alterada.
*/


?>