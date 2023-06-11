<?php

/**
 * Há outras formas de acessar dados enviados pelo usuário nas antigas versões do PHP. Elas estão listadas abaixo. Veja a lista de modificações no final da página para mais detalhes.
 * 
 * 
 * * EXEMPLO 3 MEIOS ANTIGOS DE ACESSAR DADOS ENVIADOS PELO USUÁRIO 
*/

// CUIDADO: esses métodos NÃO são mais suportados.
// Os válido estão descritos acima

//Utilizando import_request_variables() - esta função foi removida no PHP 5.4.0

import_request_variables('p', 'p_');
echo $p_seunome;

//Essas variáveis pré-definidas foram removidas no PHP 5.4.0
echo $HTTP_POST_VARS['seunome'];

//Utilizando register_globals. Este recurso foi removido no in PHP 5.4.0
echo $seunome;

/**
 * Utilizar um formulário GET é similar, exceto que você usará a variável GET pré-definida. GET também se aplica a superglobal QUERY_STRING (a informação depois do '?' numa URL). Então, por exemplo, http://www.example.com/test.php?id=3 contém os dados GET que estarão acessíveis com $_GET['id']
 * 
 *  O PHP também entende arrays no contexto de variáveis de formulário (veja essa FAQ). Pode-se, por exemplo, agrupar variáveis relacionadas, ou utilizar este recurso para obter valores de um input select múltiplo. Por exemplo, iremos enviar o formulário abaixo para si mesmo, e depois de submetido, mostra os dados:
*/
?>