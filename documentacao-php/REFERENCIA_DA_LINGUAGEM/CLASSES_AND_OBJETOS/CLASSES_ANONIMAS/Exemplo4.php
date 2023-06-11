<?php 

/**
 * 
 * * EXEMPLO #4
 * 
 * *  Todos os objetos criados pela mesma declaração de classe anônima são instâncias desta mesma classe.
*/

//função que retorna uma classe anonima
function anonymous_class() {
    //retorna uma classe anonima
    return new Class{};
}

//Retorna o nome da classe de um objeto
//get_class ([object $ object]): string
//function get_class ($ object = null) {}
//Retorna o nome da classe de um objeto

//se nome das classe anonimas forem iguais
if(get_class(anonymous_class()) === get_class(anonymous_class())) {
    echo 'Class iguais!';
}else{
    //se nomes forem diferentes
    echo 'Class diferentes!';
}

/**
 * Nota: Classes anônimas tem nomes atribuídos automaticamente como demonstrado no exemplo a seguir. Este nome deve ser considerado apenas um detalhe não confiável na implementação.
*/

//o proprio php define o nome das classe anonimas
echo "Nome Classe Anonima: " . get_class(new class{}); 

?>