<?php 

/**
 * * EXEMPLO #2 Exemplo da classe Final
 * 
 *  
*/

//defição de uma classe Final, que não pode ser sobrescrita, não pode ter classes Bases, essa classe e uma final. ela e final de uma hierarquia.
//Não poder ser Super classe, e nem classe base ou classe Pai.
final class ClasseBase{
    //metodo da classe
    public function teste() {
        echo "Método ClasseBase::teste() chamado </br>";
    }

    //Aqui não importa se você especificar a função como final ou não
    //Porque o final na class não permite que essa classe seja Uma Pai, ou super classe
    final public function maisTeste() {
        echo "Método ClasseBase::maisTeste() chamado </br>";
    }
}

//isso gera um erro porque ClasseBase não permite herança ela e uma final, ela não poder ser Super Classe, ou classe Base
class ClasseFilha extends ClasseBase{

}

//Resulta em erro Fatal: a classe ClasseFilha não pode herdar de uma classe Final (ClasseBase)

/**
 * Nota: Propriedades não podem ser declaradas como finais, apenas classes e métodos.
*/

?>