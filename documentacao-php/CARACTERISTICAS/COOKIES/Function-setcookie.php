<?php 

/**
 * * SETCOOKIE
 * 
 * setcookie — Envia um cookie
 * 
 * * DESCRIÇÃO
  
 setcookie(string $name, string $value = "",int $expire = 0, string $path = "", string $domain = "", bool $secure = false, bool $httponly = false): bool

 * 
 * A função setcookie() define um cookie para ser enviado juntamente com o resto dos cabeçalhos HTTP. Como outros cabeçalhos (headers), os cookies devem ser enviados antes de qualquer saída do seu script (isso é uma restrição do protocolo). O que quer dizer que você deve colocar chamadas a essa função antes de qualquer saída, incluindo as tags <html> e <head> e também espaços em branco.
 * 
 * Uma vez que os cookies foram setados, eles podem ser acessados no próximo carregamento da página através do array $_COOKIE. Os valores dos cookies também podem existir no $_REQUEST.
 * 
 * * PARÂMETROS
 * 
 * A » RFC 6265 fornece a referência normativa de como cada parâmetro de setcookie() é interpretado.
 * 
 * name: O nome do cookie.
 * 
 * value: O valor do cookie. Esse valor é guardado no computador do cliente; não guarde informação sensível. Supondo que o name seja 'nomedocookie', o valor pode ser lido través de $_COOKIE['nomedocookie']
 * 
 * expire: O tempo para o cookie expirar. Esse valor é uma timestamp Unix, portanto é o número de segundos desde a época (epoch). Em outras palavras, você provavelmente irá utilizar isso com a função time() mais o número de segundos que você quer que ele expire. Ou você pode utilizar a função mktime(). time() + 60 * 60 * 24 * 30 irá configurar o cookie para expirar em 30 dias. Se configurado para 0, ou omitido, o cookie irá expirar ao fim da sessao (quando o navegador fechar). Nota: Você pode ver que o parâmetro expire recebe uma timestamp Unix, ao contrário do formato de data Wdy, DD-Mon-YYYY HH:MM:SS GMT, isso se dá porque o PHP faz essa conversão internamente.
 * 
 * path: O caminho no servidor aonde o cookie estará disponível. Se configurado para '/', o cookie estará dosponível para todo o domain. Se configurado para o diretório '/foo/', o cookie estará disponível apenas dentro do diretório /foo/ e todos os subdiretórios como /foo/bar do domain. O valor padrão é o diretório atual onde o cookie está sendo configurado.
 * 
 * domain: O (sub) domínio para qual o cookie estará disponível. Definindo para um subdomínio (como 'www.example.com') deixará o cookie disponível para aquele subdomínio e todos os outros sub-domínios abaixo dele (exemplo w2.www.example.com). Para deixar o cookie disponível para todo o domínio (incluindo todos os subdomínios dele), simplesmente defina o valor para o nome do domínio ('example.com', nesse caso). Browsers antigos ainda implementam a » RFC 2109 e podem requerer um . no início para funcionar com todos os subdomínios.
 * 
 * secure: Indica que o cookie só podera ser transimitido sob uma conexão segura HTTPS do cliente. Quando configurado para true, o cookie será enviado somente se uma conexão segura existir. No lado do servidor, fica por conta do programador enviar esse tipo de cookie somente sob uma conexão segura (ex respeitando $_SERVER["HTTPS"]).
 * 
 * httponly: Quando for true o cookie será acessível somente sob o protocolo HTTP. Isso significa que o cookie não será acessível por linguagens de script, como JavaScript. É dito que essa configuração pode ajudar a reduzir ou identificar roubos de identidade através de ataques do tipo XSS (entretanto ela não é suportada por todos os browsers), mas essa informação é constantemente discutida. Foi adicionada no PHP 5.2.0. true ou false
 * 
 * * VALOR RETORNADO
 * 
 * Se existe saída antes da chamada dessa função, setcookie() irá falhar e retornará false. Se a função setcookie() for executada com sucesso, ela retornará true. Isso não indica que o usuário aceitou o cookie.
 * 
 * * NOTAS
 * 
 * Você pode utilizar o output buffering para enviar a saída antes de chamar essa função, com o custo de toda sua saída ser guardada em buffer no servidor até que você a envie. Você pode fazer isso chamando ob_start() e ob_end_flush() em seu script, ou configurando a diretiva output_buffering no seu php.ini ou arquivos de configuração do servidor.
 * 
 * * PROBLEMAS COMUNS:
 * 
 * Os cookies não estarão disponíveis até o próximo carregamento da página a qual o cookie deverá estar visível. Para testar se um cookie foi enviado com sucesso, verifique o cookie no próximo carregamento da página antes que ele expire. O tempo para expirar é configurado pelo parâmetro expire. Uma maneira boa de depurar a existência dos cookies é chamando a função print_r($_COOKIE);.
 * 
 * Os cookies devem ser deletados com os mesmos parâmetros com os quais foram configurados. Se o argumento de valor for uma string vazia, ou false, e todos os outros argumentos forem iguais a chamada anterior de setcookie, então o cookie com o nome especificado será deletado do cliente remoto. Internamente isso é feito colocando o valor do cookie para 'deleted' e a data de expiração para um ano no passado.
 * 
 * Quando você configurar um cookie com o valor false será tentando deletar o cookie. Portanto evite utilizar valores booleanos. No lugar, utilize 0 para false e 1 for true.
 * 
 * Nomes de cookies podem ser configurados como arrays e estarão disponíves para seus scripts PHP como arrays mas cookies separados serão guardados no sistema do usuário. Considere utilizar explode() para enviar um cookie com nomes e valores múltiplos. Não é recomendado o uso da função serialize() para esse propósito, pois ele pode resultar em furos de segurança.
 * 
 * Várias chamadas para a função setcookie() são feitas na ordem em que são chamadas.
*/

?>