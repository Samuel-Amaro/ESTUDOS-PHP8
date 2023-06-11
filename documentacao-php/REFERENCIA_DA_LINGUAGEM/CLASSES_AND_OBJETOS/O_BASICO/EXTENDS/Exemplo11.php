<?php 

/**
 * Os exemplos a seguir demonstram que um método derivado que remove um parâmetro, ou torna um parâmetro opcional em mandatório não é compatível com o método original.
 * 
 * * EXEMPLO #11 ERRO FATAl QUANDO UM MÉTODO DERIVADO REMOVE UM PARÂMETRO
 * 
 *   
*/

//definição de classe Base
class Base{
    //metodo da classe, um metodo que possui um parametro do tipo tipado int e que possui uma valor padrão
    public function foo(int $a = 5) {
        echo "Válido?\n";
    }
}

//definição da classe Extend, que e uma subClasse da SuperClasse, ou classe Base, ou
class Extend extends Base{
    //metodo da classe, um metodo sobrescrito da classe base, que foi modificado sua assinatura, tirou o parametro obrigatorio do metodo, assim a assinatura local aqui com a assinatura original da class base estão diferentes assim, vai gerar um erro de imcompatibilidade das assinaturas
    function foo() {
        parent::foo(1);
    }
}

?>