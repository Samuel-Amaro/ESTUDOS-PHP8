<?php 

/**
 * * REGRAS DE RESOLUÇÃO DE NOMES
 * 
 *  Para efeitos destas regras de resolução, aqui estão algumas definições importantes:
 * 
 * * DEFINIÇÕES DE NOME DE NAMESPACE(ESPAÇO DE NOMES)
 * 
  - Nome não qualificado: Este é um identificador sem um separador de namespace, como Foo.

  - Nome qualificado: Este é um identificador com um separador de namespace, como Foo\Bar;

  - Nome totalmente qualificado: Este é um identificador com um separador de namespace que começa com um separador de namespace, como \Foo\Bar. O namespace \Foo também é um nome totalmente qualificado.

  - Nome relativo: Este é um identificador que começa com namespace, como namespace\Foo\Bar.

 * 
 * Os nomes são resolvidos seguindo estas regras de resolução:
 
  1. Nomes totalmente qualificados sempre resolvem para o nome sem o separador de espaço de nomes à esquerda. Por exemplo, \A\B resolve para A\B.

  2. Nomes relativos sempre resolvem para o nome com namespace substituído pelo namespace atual. Se o nome ocorrer no namespace global, o namespace\prefixo será removido. Por exemplo, namespace\A dentro do namespace é X\Y resolvido para X\Y\A. O mesmo nome dentro do namespace global é resolvido para A.

  3. Para nomes qualificados, o primeiro segmento do nome é traduzido de acordo com a tabela de importação de classe / namespace atual. Por exemplo, se o namespace A\B\C for importado como C, o nome C\D\E será traduzido para A\B\C\D\E. 

  4. Para nomes qualificados, se nenhuma regra de importação se aplica, o namespace atual é anexado ao nome. Por exemplo, o nome C\D\E dentro do namespace A\B, resolve para A\B\C\D\E.

  5. Para nomes não qualificados, o nome é traduzido de acordo com a tabela de importação atual para o respectivo tipo de símbolo. Isso significa que nomes de classe são traduzidos de acordo com a tabela de importação de classe/namespace, nomes de função de acordo com a tabela de importação de função e constantes de acordo com a tabela de importação de constante. Por exemplo, após use A\B\C; um uso como new C() resolve o nome A\B\C(). Da mesma forma, após use function A\B\fn; um uso como fn() resolve o nome A\B\fn.

  6. Para nomes não qualificados, se nenhuma regra de importação se aplica e o nome se refere a um símbolo semelhante a uma classe, o namespace atual é adicionado. Por exemplo, new C() dentro do namespace A\B resolve para o nome A\B\C.

  7. Para nomes não qualificados, se nenhuma regra de importação se aplica e o nome se refere a uma função ou constante e o código está fora do namespace global, o nome é resolvido no tempo de execução. Supondo que o código esteja no namespace A\B, veja como uma chamada para função foo() é resolvida:
    1. Ele procura por uma função do atual namespace: A\B\foo().

    2. Ele tenta encontrar e chamar a função global foo() .
*/


?>