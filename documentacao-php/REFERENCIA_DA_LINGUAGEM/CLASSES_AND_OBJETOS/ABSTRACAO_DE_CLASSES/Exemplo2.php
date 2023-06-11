<?php 

/**
 * * EXEMPLO #2 EXEMPLO DE CLASSE ABSTRATA 
*/

//definindo uma classe Abstrata
//Classe definidas como abstradas não podem ser instanciadas, so servem para poder ser herdades
abstract class ClasseAbstrata{
     //esse método abstrato apenas define os argumentos requeridos
     //definindo uma assinatura de um metodo abstrato, somente a definição do metodo, porque a implementação que faz e quem herda da classe
     abstract protected function prefixName($name);    
}

//definição da classe ClasseConcreta, que e uma subClasse da super Classe ClasseAbstrata, vai herdar os metodos e propriedades da super Classe, herança
//Ao herdar uma classe abstrata, todos os métodos marcados como abstratos na na declaração da classe pai devem ser implementados na classe filha;
//usando a mesma assinatura definida na classe pai e visibilidade dos metodos 
class ClasseConcreta extends ClasseAbstrata{
    //o método filho pode definir argumentos opcionais não presentes na assinatura abstrata, implementando o metodo abstrato da super classe
    //definido um novo argumento no metodo, este argumento não esta definido na assinatura do metodo, mas como o argumento e opcional pode-se definir o argumento que ja possui um valor padrão
    public function prefixName($name, $separator = ".") {
        if($name == "Pacman") {
            $prefix = "Mr";
        }elseif($name == "Pacwoman") {
            $prefix = "Mrs";
        }else{
            $prefix = "";
        }
        return "{$prefix}{$separator}{$name}";
    }
}

//instancia um objeto da ClasseConcreta
$class = new ClasseConcreta;

//chamando um metodo da classe, passando um paramentro
echo $class->prefixName("Pacman"), "</br>";
//chamando um metodo da classe passando um parametro
echo $class->prefixName("Pacwoman"), "</br>";

/**
 * Códigos antigos que não possuem classes e funções com nome 'abstract' podem ser executados sem modificações. 
*/

?>