<?php 

/**
 * * REGRAS DE COMPATIBILIDADE DE ASSINATURAS
 * 
 *  Quando sobrescrevendo um método, sua assinatura precisa ser compatível com o método original. De outra forma um erro fatal é emitido, ou, anteriormente ao PHP 8.0.0, um aviso E_WARNING seria gerado. Uma assinatura é compatível se ela respeita as regas de variância, se torna um parâmetro obrigatório em opcional, ou se adiciona novos parâmetros opcionais. Isso é conhecido como Princípio de Substituição de Liskov, ou LSP. O construtor, e membros private não precisam seguir essas regras de compatibilidade, e portanto não há emissão de erros fatais no caso se assinaturas incompatíveis.
 * 
 * * EXEMPLO #10 MÉTODOS COMPATÍVEIS
 * 
 * 
*/

//definição da classe
class Base {
    //metodo da classe que possui um parametro
    public function foo(int $a) {
        echo "Valid\n";
    }
}

//definição da classe Extend1, a classe e uma subClasse da classeBase do tipo Base, fazendo herança simples
class Extend1 extends Base{
    //sobrescrenvendo o metodo da classe Base, da classe Pai,
    //possuindo a mesma assinatura, so fez uma modifcação no parametro para ter um valor padrão no parametro, quando não passar valor para o pametro por padrão ele tera um valor
    function foo(int $a = 5) {
        parent::foo($a);
    }
}

//definição da classe Extend2, a classe e uma subClasse da classeBase do tipo Base, fazendo herança simples
class Extend2 extends Base {
    //sobrescrevendo o metodo da classe Base, da classe Pai, so que modificando a assinatura, add um novo paramentro, a assinatura continua a mesma, manteve o mesmo paramentro da classe Base, mas add mais um parametro ass compativel com a da classe Base, manteve os paramentros da classe base e add mais um paramentro com valor default
    function foo(int $a, $b = 5) {
        parent::foo($a);
    }
}

//instancia um novo objeto da classe Extend1
$extended1 = new Extend1();
//acessa o metodo da classe
$extended1->foo();
//instancia um novo objeto da classe Extend2
$extended2 = new Extend2();
//acessa o metodo da classe
$extended2->foo(1);

?>