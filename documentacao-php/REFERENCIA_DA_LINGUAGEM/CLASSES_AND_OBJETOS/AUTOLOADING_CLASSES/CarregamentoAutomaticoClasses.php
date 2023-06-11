<?php 

/**
 * * AUTOLOADING CLASSES(CARREGAMENTO AUTOMATICO DE CLASSES)
 * 
 * Muitos desenvolvedores ao desenvolver aplicações orientadas a objeto criam um arquivo PHP para cada definição de classe. Um dos maiores contratempos é ter de escrever uma longa lista de includes no início de cada script(um para cada classe).
 * 
 * No PHP 5 isso não é mais necessário. A função spl_autoload_register()(registro de carregamento automático spl) registra qualquer número de autoloaders, permitindo que classes e interfaces sejam automaticamente carregadas se elas não ainda não foram definidas. Ao registrar autoloaders, o PHP têm uma última chance de carregar classes e interfaces antes que falhem com um erro.
 * 
 * Dica: Embora a função __autoload() também pode ser utilizada para carregar automaticamente classes e interfaces, é preferível a utilização da função spl_autoload_register(). Por que é uma alternativa mais flexível (permitindo que vários autoloaders(carregamento automatico) sejam especificados na aplicação, assim como bibliotecas de terceiros). Por esta razão, o uso da função __autoload() é desencorajado e pode se tornar obsoleta em versões futuras.
 * 
 * Nota: Autoloading não é disponível usando PHP em modo interativo CLI.
 * 
 * Nota: Se o nome da classe é usado por exemplo em call_user_func() então ela pode conter alguns caracteres perigosos como ../. É recomendado não usar entrada de usuário nestas funções ou pelo menos verificar a entrada em __autoload().
*/

?>