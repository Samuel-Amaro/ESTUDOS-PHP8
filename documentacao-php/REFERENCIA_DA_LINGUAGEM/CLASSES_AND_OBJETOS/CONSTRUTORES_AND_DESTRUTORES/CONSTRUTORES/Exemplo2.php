<?php 

/**
 * * EXEMPLO #2 UTILIZANDO ARGUMENTOS DE CONSTRUTOR
 * 
 * Diferente de outros métodos, __construct() não precisa seguir as regras usuais de compatibilidade de assinatura em objetos derivados.
 * 
 * Construtores são métodos ordinários que são chamados durante a criação do objeto correspondente. Eles podem definir um número arbitrários de argumentos, quais podem ser obrigatórios, podem ter um tipo, e podem ter valores padrão. Argumentos de construtores são informados dentro de parênteses depois do nome da classe.
*/

/*definição de uma classe chamada Point*/
class Point{
      /*propriedades(ou campos, ou atributos, ou variaveis membro) da classe, que ainda não foram inicializadas, sua visibilidade e protegida, isso e as propriedades são disponiveis somente em sua propria classe, e nas classes filhas*/
      protected int $x;
      protected int $y;
      
      //definição de um metodo construtor publico, com um argumento obrigatorio, e  o outro e opcional, que possui um tipo e um deles possui um valor padrão, o argumento opcional, especificado caso não passe nenhum valor, ao instanciar um objeto  dessa classe
      public function __construct(int $x, int $y = 0) {
          /*o operador this, referencia o proprio objeto*/
          $this->x = $x;
          $this->y = $y;
          print "Point X: $this->x Point Y: $this->y </br>";
      }
}

//Passagem de ambos os argumentos
//Ao instancia o objeto da Class point
//E chamado o construtor definido nessa classe,
//Nesse caso o construtor possui paramentros obrigatorios de inicialização, tem que ser passados todas vez que for instancia um objeto da classe
//Ao instancia o parateses so e aberto se possui paramentros no construtor
$p1 = new Point(4, 5);

//Passar somente o argumento obrigatorio, $y terá o valor padrão o zero
$p2 = new Point(4);

//Com parâmetros nomeados, passe o paramentros a funçaõ usando o nome dos paramentros, ao inves de ser paramentros posicionais, tendo que seguir a ordem definida na função.
//Argumentos são independentes de ordem.
$p3 = new Point(y: 5, x: 4);

/**
 * Se a classe não tem construtor, ou o construtor não tem argumentos obrigatórios, o parêntesis pode ser omitido. 
*/

?>