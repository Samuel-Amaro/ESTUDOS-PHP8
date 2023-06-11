<?php 

/**
 * * __serialize() and __unserialize()
 
    public __serialize(): array

    public __unserialize(array $data): void

 * 
 * serialize() verifica se a classe contém uma função com o nome mágico __serialize(). Se sim, essa função é executada antes de qualquer serialização. Ela precisa construir e retornar um array associativo de chaves-valores que representam a forma serializada do objeto. Se o array não for retornado então um erro TypeError será lançado.
 * 
 * Nota: Se ambos __serialize() e __sleep() estiverem definidos no mesmo objeto, somente __serialize() será chamado. __sleep() será ignorado. Se o objeto implementa a interface Serializable, o método serialize() da interface será ignorado e o método mágico __serialize() será utilizado.
 * 
 * O uso pretendido de __serialize() é definir uma representação arbitrária, amigável, da representação do objeto. Elementos do array podem corresponder a propriedades do objeto diretamente, mas isso não é obrigatório.
 * 
 * Inversamente, unserialize() verifica a presença da função mágica __unserialize(). Se presente, essa função será chamada com o array retornado de __serialize(). Ela poderá, então, restaurar as propriedades do objeto a partir do array.
 * 
 * Nota: Se ambos __unserialize() e __wakeup() estiverem definidos, somente __unserialize() será chamado, e __wakeup() será ignorado.
*/

?>