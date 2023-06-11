<?php 

/**
 * * PROPRIEDADES
 * 
 *  Variáveis membros de uma classe são chamadas "propriedades". Pode-se também observar serem referidas utilizando outros termos como "atributos" ou "campos", mas para o propósito desta referência, usaremos "propriedades". São definidas usando uma das palavras-chave public, protected, or private, seguidas de uma declaração normal de variável. Esta declaração pode incluir sua inicialização, porém esta inicialização deve ser um valor constante--isso é, deve ser possível avaliá-lo em tempo de compilação e não deve-se depender de informações de tempo de execução.
 * 
 * Nota: Para manter a retrocompatibilidade com o PHP 4, o PHP 5 continuará aceitando o uso da palavra-chave var na declaração de propriedades ao invés de (ou em adição a) public, protected, ou private. Entretanto, var não é mais obrigatório. Em versões entre o PHP 5.0 e 5.1.3, o uso de var era considerado obsoleto e emitiria um aviso E_STRICT, mas desde o PHP 5.1.3, seu uso não é mais obsoleto e não será emitido um aviso. Caso declare uma propriedade usando var ao invés de public, protected, ou private, o PHP 5 tratará a propriedade como se tivesse declarada como public.
 * 
 * Métodos dentro de classes podem acessar propriedades não estáticas usando -> (Operador de Objeto): $this->property (onde property é o nome da propriedade). Propriedades estáticas são acessadas utilizando os :: (Dois pontos dublo): self::$property.
 * 
 * A pseudo-variável $this está disponível dentro de métodos de qualquer classe quando o método é chamado dentro do contexto do objeto. $this faz referência ao objeto chamado (geralmente o objeto o qual o método pertence, mas possível outro objeto, se o método é chamado estaticamente do contexto de um segundo objeto).
*/

?>