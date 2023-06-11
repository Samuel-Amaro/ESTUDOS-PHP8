<?php 

/**
 * * EXEMPLO #1 ILUSTRAÇÃO DA RESOLUÇÃO DE NOMES
 * 
 *  
*/

//declarando um namespace, reservando um espaço de nomes dentro desse script para, funções, classes, constantes
namespace A;

//importando alguns namespaces, e apelidando alguns
use B\D, C\E as F;

//CHAMADA DE FUNÇÕES

foo(); //primeiro tenta chamar "foo" definido no namespace "A" então chama a função global "foo"

\foo(); //chama função "foo" definida no escopo global

my\foo(); //chama a função "foo" definida no namespace "A\my"

F(); //primeiro tenta chamar "F" definido no namespace "A"
    // então chama a função global "F"


//REFERENCIA CLASSES

new B(); // cria objeto de classe "B" definido no namespace "A" se não for encontrado, ele tenta carregar automaticamente a classe "A\B"

new D(); //usando regras de importação, cria objeto da classe "D" definido no namespace "B"
        // se não for encontrado, ele tenta carregar automaticamente a classe "B\D"

new F(); //usando regras de importação, cria objeto da classe "E" definido no namespace "C"
        // se não for encontrado, ele tenta carregar automaticamente a classe "C\E"

new \B(); // cria objeto de classe "B" definido no escopo global
        // se não for encontrado, ele tenta carregar automaticamente a classe "B"

new \D(); // cria objeto de classe "D" definido no escopo global
        // se não for encontrado, ele tenta carregar automaticamente a classe "D"

new \F(); // cria o objeto da classe "F" definido no escopo global
        // se não for encontrado, ele tenta carregar automaticamente a classe "F"

//métodos estáticos/funções de namespace de outro namespace

B\foo(); //chama a função "foo" do namespace "A\B"

B::foo(); // chama o método "foo" da classe "B" definida no namespace "A"
        // se a classe "A\B" não for encontrada, ele tenta carregar automaticamente a classe "A\B"

D::foo(); // usando regras de importação, chama o método "foo" da classe "D" definida no namespace "B"
        // se a classe "B\D" não for encontrada, ele tenta carregar automaticamente a classe "B\D"

\B\foo(); //chama a função "foo" do namespace B

\B::foo(); // chama o método "foo" da classe "B" do escopo global
            // se a classe "B" não for encontrada, ele tenta carregar automaticamente a classe "B"

// métodos estáticos/funções de namespace do namespace atual

A\B::foo(); //chama o método "foo" da classe "B" do namespace "A\A"
        // se a classe "A\A\B" não for encontrada, ele tenta carregar automaticamente a classe "A\A\B"

\A\B::foo(); // chama o método "foo" da classe "B" do namespace "A"
            // se a classe "A\B" não for encontrada, ele tenta carregar automaticamente a classe "A\B"
?>