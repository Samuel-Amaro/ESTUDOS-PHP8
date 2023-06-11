<?php

/**
 * * FUNÇÃO PHP FILTER_VAR()
 * 
 * A filter_var()função valida e limpa os dados.
 * 
 * A filter_var()função filtra uma única variável com um filtro especificado. São necessários dois dados:
 
    - A variável que você deseja verificar;

    - O tipo de cheque a usar;

 * 
 * 
  - filter_var — Filtra a variável com um especificado filtro;

  filter_var(mixed $variable, int $filter = ?, mixed $options = ?): mixed

 * PARÂMETROS
 
  variable: Valor para filtrar;

  filter: ID do filtro. O padrão é FILTER_SANITIZE_STRING.

  options: Array associativo de opções ou disjunção binário de flags. Se o filtro aceita opções, flags podem ser providas no campo "flags" do array. Para o "callback" do filtro, o tipo callback pode ser passado.

 * 
 * Valor Retornado: Retorna o dado filtrado, ou false se o filtro falhar.
 * 
*/

# EXEMPLO #1 UM EXEMPLO DA FILTER_VAR()

//FILTER_VALIDATE_EMAIL: Valida o valor como e-mail.
if(filter_var('bob@example.com', FILTER_VALIDATE_EMAIL) != false) {
    //verifica se um email informado e valido
    var_dump(filter_var('bob@example.com', FILTER_VALIDATE_EMAIL));
}

//FILTER_VALIDATE_URL: Valida o valor como URLL, opcionalmente com componentes requeridos.
if(filter_var('example.com', FILTER_VALIDATE_URL) != false) {
    //verifica se uma URL e valida
    var_dump(filter_var('example.com', FILTER_VALIDATE_URL));
}else{
    echo "URL example.com não e valida! </br>";
}

/**
 * * SANITIZE UMA STRING
 * 
 *  O exemplo a seguir usa a filter_var()função para remover todas as tags HTML de uma string:
*/

$str = "<h1>Hello World!</h1>";
echo "</br> Antes da Filter " . $str;
//FILTER_SANITIZE_STRING: Remove tags, opcionalmente remove ou codifica caracteres especiais.
$newstr = filter_var($str, FILTER_SANITIZE_STRING);
echo "Apos a Filter: " .  $newstr;

?>