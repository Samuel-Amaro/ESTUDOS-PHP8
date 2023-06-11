<?php 

/**
 * * CONSTRUTORES OBSOLETOS
 * 
 *  Anteriormente ao PHP 8.0.0 as classes no namespace global interpretam um método com o mesmo nome da classe como sendo um construtor válido. Essa sintaxe é obsoleta, e gerará um erro E_DEPRECATED embora ainda continue funcionando como um construtor. Se ambos o __construct() e um método homônimo da classe estiverem definidos, __construct() que será chamado.
 * 
 * Em classes dentro de namespaces, ou quaisquer classes a partir do PHP 8, um método homônimo ao nome da classe não tem um significado especial.
 * 
 * Sempre utilize __construct() em novos códigos.
*/

?>