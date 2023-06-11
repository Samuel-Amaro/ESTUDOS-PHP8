<?php 

/*
 * 
 * EXEMPLO #1 Exemplo de métodos final
 * 
*/

//definição da classe
class ClasseBase{
    //metodo publico da classe
    public function teste() {
        echo "ClasseBase::teste() chamado</br>";
    }
    //metodo publico final, que com esse operador não permitie que as classes filhas sobrescreverem esse metodo. não pode ser sobrescrito.
    final public function maisTeste() {
        echo "ClasseBase::maisTeste() chamado</br>";
    }
}

//defição da classeFilha que e uma subClasse da classe ClasseBase, assim ha uma herança, classeFilha herda metodos e propriedades da classe Filha
class ClasseFilha extends ClasseBase{
    //sobrescrevendo o metodo da SuperClasse(Classe Base, Classe Pai)
    public function maisTeste() {
        echo "ClasseFilha::maisTeste() chamado</br>";
    }
}

//Resulta em erro Fatal: não pode sobrescrever método final ClasseBase::maisTeste()



?>