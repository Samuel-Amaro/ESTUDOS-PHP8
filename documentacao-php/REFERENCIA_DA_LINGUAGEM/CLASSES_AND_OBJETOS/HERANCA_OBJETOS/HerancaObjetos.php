<?php 

/**
 * * HERANÇA DE OBJETOS
 * 
 *  Herança é um conceito de programação estabelecido, e o PHP faz use deste em seu modelo de objetos. Este princípio afeta a forma com que classes e objetos se relacionam com outras.
 * 
 * Por exemplo, ao estender uma classe, a subclasse herda todos os métodos públicos e protegidos, propriedades e constantes da classe pai. A não que uma classe sobrescreva estes métodos, eles manterão sua funcionalidade original.
 * 
 * Isto é útil para definir uma funcionalidade abstrata, e permitir a implementação de uma funcionalidade adicional em objetos similares sem a necessidade de reimplementar todas as funcionalidades compartilhadas.
 * 
 * Os métodos privados de uma classe pai não são acessíveis a uma classe filha. Como resultado, as classes filhas podem reimplementar um método privado sem levar em conta as regras normais de herança. Antes do PHP 8.0.0, entretanto, as restrições final e static eram aplicadas aos métodos privados. Desde o PHP 8.0.0, a única restrição de método privado que é aplicada é private final para construtores, já que essa é uma maneira comum de "desabilitar" o construtor ao usar métodos de fábricação estáticos.
 * 
 * A visibilidade de métodos, propriedades e constantes pode ser relaxada, por exemplo, um método com protected pode ser marcado como public, mas não pode ser restrito, por exemplo, marcar uma propriedade que tenha public como private.
 * 
 * Nota: A não ser que o autoload seja usado, as classes devem ser definidas antes de utilizadas. Se uma classe estende outra, a classe pai deve ser declarada antes da estrutura da classe filha. Esta regra se aplica a classes que herdam outras classes e interfaces.
*/

?>