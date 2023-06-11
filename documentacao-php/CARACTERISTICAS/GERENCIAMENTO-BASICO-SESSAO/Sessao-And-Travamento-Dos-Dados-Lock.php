<?php 

/**
 * * SESSÃO E TRAVAMENTO DOS DADOS(LOCK)
 * 
 *  Os dados de sessão são travados (lock) para evitar condição de corrida (data race) por padrão. A trava é necessária para manter os dados consistentes entre as requisições.
 * 
 * Contudo, o travamento pode ser abusado por um atacante para realizar um ataque DoS. Para diminuir os riscos de DoS por travamento de sessão, reduza o travamento. Use sessões somente leitura quando a alteração dos dados não for necessária. Use a opção 'read_and_close' com session_start(). session_start(['read_and_close'=>1]); Feche a sessão assim que você terminar de alterar $_SESSION, usando session_commit()
 * 
 * O módulo de sessão atual não detecta modificações em $_SESSION enquanto a sessão está inativa. É responsabilidade do desenvolvedor não modificar a variável $_SESSION quando a sessão está inativa.
 * */

?>