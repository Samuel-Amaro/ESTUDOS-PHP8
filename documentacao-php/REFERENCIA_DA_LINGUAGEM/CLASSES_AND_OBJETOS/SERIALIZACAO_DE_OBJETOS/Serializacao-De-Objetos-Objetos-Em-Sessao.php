<?php 

/**
 * * SERIALIZAÇÃO DE OBJETOS - OBJETOS EM SESSÃO
 * 
 *  serializar - Gera uma representação armazenável de um valor. serializar ( misto $value ): string
 * 
 * A função serialize() retorna uma string contendo uma representação byte-stream de qualquer valor que pode ser armazenado pelo PHP. A função unserialize() pode utilizar essa string para recriar os valores originais da variável. Utilizar a serialização para salvar um objeto, salvará todas as variáveis de um objeto. Os métodos de um objeto não serão salvos, apenas o nome da classe.
 * 
 * Para deserializar um objeto com a função unserialize(), a classe deste objeto precisar estar definida. Isto é, se possuir um objeto da classe A e serializá-lo, você obterá uma string que referencia a classe A e contêm todos os valores de variáveis contidas nele. Se deseja-se deserializar este em outro arquivo, um objeto da classe A, a definição da classe A deve estar presente neste arquivo. Isso pode ser feito, por exemplo, armazenando a definição da classe A em um arquivo, e incluí-lo, fazendo uso da função spl_autoload_register().
 * 
 * Se uma aplicação estiver usando sessões e usar a função session_register() para registrar objetos, estes serão serializados automaticamente ao fim de cada página PHP, e serão deserializados automaticamente em cada uma das páginas seguintes. Isso significa que estes objetos podem aparecer em qualquer uma das páginas da aplicação, já que fazem parte da sessão. Entretanto, a função session_register() foi removida no PHP 5.4.0.
 * 
 * É fortemente recomendado que, quando uma aplicação serializa seus objetos, para uso posterior na aplicação, esta inclua a definição da classe do objeto em questão ao longo de toda aplicação. Não fazer isso pode resultar em objetos serem deserializados sem a definição da classe, que acarretará no PHP entregar um objeto da classe __PHP_Incomplete_Class_Name, que não possui métodos, tornando o objeto inútil.
 * 
 * Então, se, no exemplo anterior, $a se tornou parte da sessão ao executar session_register("a"), deve-se incluir o arquivo classa.inc em todas suas páginas, e não somente em page1.php e page2.php.
 * 
 * Além dos conselhos acima, note que pode-se capturar os eventos de serialização e deserialização de um objeto usando os métodos __sleep() e __wakeup(). Usar o método __sleep() também lhe permitirá serializar somente subconjuntos de propriedades de um objeto.
*/

?>