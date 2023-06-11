<?php 

/**
 *  * __sleep() and __wakeup()
 
    public __sleep(): array

    public __wakeup(): void

 * 
 * serialize() checa se sua classe tem uma função com o nome mágico __sleep(). Se houver, a função é executa antes de qualquer serialização. Ela pode limpar o objeto e deve retornar um array com os nomes de todas as variáveis do objeto que devem ser serializadas. Se o método não retornar nada, então null é serializado e um E_NOTICE disparado.
 * 
 * Nota: Não é possível que __sleep() retorne nomes de propriedades privadas da classe pai. Fazer isso causará um erro de nível E_NOTICE. Ao invés disso, pode-se utilizar a interface Serializable.
 * 
 * O intuito do método __sleep() é enviar dados pendentes ou realizar tarefas de limpeza. Além disso, a função é útil se tiver objetos muito grandes que não precisem ser completamente salvos.
 * 
 * Ao mesmo tempo, unserialize() checa pela presença da função com o nome mágico __wakeup(). Se presente, essa função pode reconstruir qualquer recurso que o objeto possa ter.
 * 
 * O intuito do método __wakeup() é reestabelecer qualquer conexão com banco de dados que podem ter sido perdidas durante a serialização, e realizar outras tarefas de reinicialização.
*/


?>