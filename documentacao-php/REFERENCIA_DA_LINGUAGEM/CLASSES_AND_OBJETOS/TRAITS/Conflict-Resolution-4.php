<?php

/**
 * * CONFLICT RESOLUTION(RESOLUÇÃO DE CONFLITOS)
 * 
 *  Se duas Características(TRAITS) inserem um método com o mesmo nome, um erro fatal é produzido, se o conflito não for explicitamente resolvido.
 * 
 * Para resolver conflitos de nomenclatura entre Características(TRAITS) usadas na mesma classe, o INSTEADOF(em vez de) operador precisa ser usado para escolher exatamente um dos métodos conflitantes.
 * 
 * Como isso só permite a exclusão de métodos, o AS operador pode ser usado para adicionar um alias a um dos métodos. Observe que o AS operador não renomeia o método e também não afeta nenhum outro método.
 * 
 * * EXEMPLO #5 RESOLUÇÃO DE CONFLITO
 * 
 * Neste exemplo, o Talker usa os TRAITS A e B. Como A e B têm métodos conflitantes, ele define o uso da variante de smallTalk do TRAIT B e a variante de bigTalk do TRAIT A.
 * 
 * O Alias_Talker faz uso do AS operador para poder usar a implementação bigTalk de B sob um alias adicional talk.
 * */

//declarando um trait chamado A que tem 2 metodos que podem ser utilizados em qualquer classe 
trait A{
    //metodo publico que pode ser utilizado em qualquer classe
    public function pequenaConverssa() {
        echo 'a';
    }
    //metodo publico que pode ser utilizado em qualquer classe
    public function grandeConverssa() {
        echo 'A';
    }
} 

//declarando um trait chamado B que tem 2 metodos que podem ser utilizados em qualquer classe
trait B{
    //metodo publico que poder ser utilizado em qualquer classe, mas esse metodo possui o mesmo nome do metodo declarado dentro da trait A
    public function pequenaConverssa() {
        echo 'b';
    }
    //mesma coisa, gera conflito de nomes
    public function grandeConverssa() {
        echo 'B';
    }
}

//declarando um classe chamada Locutor
class Locutor{
    //essa classe utilizara, traits o trait A, e o B. 
    //porem esses traits possuem metodos com mesmo nome, isso gera um conflito de nomeclatura entre traits usadas na mesma classe
    use A, B{
        //para resolver o conflito usamos o operador INSTEADOF que escolhe exatamente um dos metodos conflitantes
        //especificando que e para utilizar o metodo pequenaConverssa da trait B ao inves da trait A
        B::pequenaConverssa insteadof A;
        //especificando que e para utilizar o metodo grandeConverssa da trait A ao inves da trait B, fazendo assim excluir os outros metodos não escolhidos das traits
        A::grandeConverssa insteadof B;
    }
}

//declarando um classe chamada Locutor_Alias
class Locutor_Alias{
    //essa classe utilizara, traits o trait A, e o B;
    //porem esses traits possuem metodos com mesmo nome, isso gera um conflito de nomeclatura entre traits usadas na mesma classe
    use A, B{
        //declarando que e para utilizar o metodo pequenaConverssa da trait B ao inves da trait A, metodos iguais mas especificando qual deles sera usado e de qual trait
        B::pequenaConverssa insteadof A;
        //declarando que e para utilizar o metodo grandeConverssa da trait A ao inves da trait B, metodos iguais mas especificando qual deles sera usado e de qual trait
        A::grandeConverssa insteadof B;
        //usando o operador AS para dar um apelido no metodo que esta na trait B, fazendo assim usar os dois metodos que são iguais de TRAIT diferentes, mas com nomes iguais, mas com AS gera um apelido para o nome e permite usar os metodos iguais de traits diferentes na mesma classe
        B::grandeConverssa as talk;
    }
}
?>