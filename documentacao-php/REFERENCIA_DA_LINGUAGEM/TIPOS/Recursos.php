<?php 

/**
 * * RECURSOS(RESOURCES)
 * 
 *  Um recurso é uma variável especial, que mantém uma referência a um recurso externo. Recursos são criados e usados por funções especiais. Veja o apêndice para uma lista de todas essas funções e seus tipos correspondentes.
 * 
 * CONVERTENDO PARA RECURSOS(RESOURCE) 
 *
 * Como as variáveis resource mantém manipuladores especiais para arquivos abertos, conexões de bancos de dados, canvas de imagens e coisas do tipo, converter para resource não faz sentido algum.
 * 
 * * LIBERANDO RECURSOS(RESOURCE)
 * 
 * Graças ao sistema de contagem de referência introduzido com a Engine da Zend, um recurso sem referências é detectado automaticamente, e liberado pelo coletor de lixo. Por esta razão, é rara a necessidade de liberação de memória manualmente.
 * 
 * Nota: Conexões persistentes de bancos são exceções a regra. Elas não são destruídas pelo coletor de lixo.
 * 
*/

?>