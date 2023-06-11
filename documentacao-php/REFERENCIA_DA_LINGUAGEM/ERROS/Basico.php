<?php 

/**
 * * BÁSICO
 * 
 * O PHP retornará erros em resposta a inúmeras condições de erros internos. Pode ser utilizado para sinalizar inúmeras condições diferentes, impress e/ou logado, se necessário.
 * 
 * Cada erro que o PHP gera inclui um tipo. A lista destes erros está disponível, junto a uma breve descrição de seu comportamento e como podem ser causados.
 * 
 * * MANUSENADO ERROS COM O PHP
 * 
 * Se nenhum manipulador de erro for definido, o PHP tratará todos os que ocorrerem de acordo com sua configuração. Quais erros são reportados, e quais são ignorados é controlado pela diretiva error_reporting no php.ini, ou em tempo de execução, chamando a função error_reporting(). É altamente recomendável que esta diretiva de configuração seja definida, entretanto, alguns erros podem ocorrer antes da execução do script começar.
 * 
 * Em um ambiente de desenvolvimento, deve-se sempre definir a diretiva error_reporting para E_ALL, para estar ciente, e corrigir, problemas informados pelo PHP. Em produção, deve-se definir para um nível menos verboso, como E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED, mas em muitos casos E_ALL também é apropriado, pois pode antecipar avisos de problemas em potencial.
 * 
 * O que o PHP faz com estes erros depende de mais duas diretivas no php.ini. A diretiva display_errors controla se o erro será mostrado como parte da saída do script. Esta diretiva deve sempre estar desativada no ambiente de produção, já que pode incluir informações confidenciais como senhas do banco de dados, mas é útil habilitá-la em desenvolvimento, já que garante o reporte imediato de problemas.
 * 
 * Além de mostrar os erros, o PHP pode logar erros quando a diretiva log_errors estiver habilitada. Isso logará qualquer erro para um arquivo ou para o syslog definido com a diretiva error_log. Pode ser extremamente útil no ambiente de produção, já que pode-se logar os erros que ocorrerem e então gerar relatórios baseados nestes erros.
 * 
 * * MANIPULADORES DE ERROS PERSONALIZADOS
 * 
 * Se o manipulador de erros padrão do PHP for inadequado, pode-se manipular diversos tipos de erro com manipuladores de erros próprios ao instalá-los com a função set_error_handler(). Embora alguns tipos de erros não possam ser manipulados desta maneira, aqueles que puderem, serão manipulados da forma que o script decidir: por exemplo, pode ser utilizado para exibir uma página de erro customizada ao usuário e reportar mais precisamente que por log, como enviando um e-mail.
*/

?>