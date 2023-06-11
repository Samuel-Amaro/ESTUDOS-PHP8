<?php 

//inlcuindo a classe no script
include("Jogador.php");

# instanciando um novo objeto
$j1 = new Jogador("Cristiano Ronaldo", "Atacante", "09/03/1995", "Português", 1.79, 82.500);
# dados do jogador
$j1->dadosJogador();
#descobrir idade do jogador
$j1->idade();
# tempo que falta para se aposentar
$j1->aposentadoria();

# instanciando um novo objeto
$j2 = new Jogador("Virgil van Dijk", "defesa", "08/07/1991", "neerlandês", 1.93, 92.45);
# dados do jogador
$j2->dadosJogador();
#descobrir idade do jogador
$j2->idade();
# tempo que falta para se aposentar
$j2->aposentadoria();

# instanciando um novo objeto
$j3 = new Jogador("Giorgian De Arrascaeta", "meio-campo", "01/06/1994", "uruguaio", 1.74, 78.32);
# dados do jogador
$j3->dadosJogador();
#descobrir idade do jogador
$j3->idade();
# tempo que falta para se aposentar
$j3->aposentadoria();

?>